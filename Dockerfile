FROM debian:jessie

LABEL maintainer "Vladislav Mozgovoy <vladzikus@gmail.com>"

ARG steam_user=anonymous
ARG steam_password=
ARG metamod_version=1.20
ARG amxmod_version=1.8.2

RUN apt update && apt install -y lib32gcc1 curl lib32stdc++6\
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install SteamCMD
RUN mkdir -p /opt/steam && cd /opt/steam && \
    curl -sqL "https://steamcdn-a.akamaihd.net/client/installer/steamcmd_linux.tar.gz" | tar zxvf -

# Install HLDS
RUN mkdir -p /opt/hlds
# Workaround for "app_update 90" bug, see https://forums.alliedmods.net/showthread.php?p=2518786
RUN /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 90 validate +quit
RUN /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 70 validate +quit || :
RUN /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 10 validate +quit || :
RUN /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 90 validate +quit
RUN mkdir -p ~/.steam && ln -s /opt/hlds ~/.steam/sdk32
RUN ln -s /opt/steam/ /opt/hlds/steamcmd
ADD files/steam_appid.txt /opt/hlds/steam_appid.txt

# Install metamod
RUN mkdir -p /opt/hlds/cstrike/addons/metamod/dlls
RUN curl -sqL "http://prdownloads.sourceforge.net/metamod/metamod-$metamod_version-linux.tar.gz?download" | tar -C /opt/hlds/cstrike/addons/metamod/dlls -zxvf -

# Install AMX mod X
RUN curl -sqL "http://www.amxmodx.org/release/amxmodx-$amxmod_version-base-linux.tar.gz" | tar -C /opt/hlds/cstrike/ -zxvf -
RUN curl -sqL "http://www.amxmodx.org/release/amxmodx-$amxmod_version-cstrike-linux.tar.gz" | tar -C /opt/hlds/cstrike/ -zxvf -

# Cleanup
RUN apt remove -y curl

# Add files
ADD hlds /opt/hlds
ADD hlds_run.sh /bin/hlds_run.sh

ENV LD_LIBRARY_PATH=/opt/hlds

WORKDIR /opt/hlds

ENTRYPOINT ["/bin/hlds_run.sh"]
