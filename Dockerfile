FROM debian:stretch-slim

ARG steam_user="anonymous"
ARG steam_password=""

RUN apt update && apt install -y \
    lib32gcc1 \
    curl \
    lib32stdc++6 \
    unzip \
    mc \
    rsync \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install SteamCMD
RUN mkdir -p /opt/steam && cd /opt/steam \
    && curl -sqL "https://steamcdn-a.akamaihd.net/client/installer/steamcmd_linux.tar.gz" | tar zxvf -

# Install HLDS
RUN mkdir -p /opt/hlds \
    # Workaround for "app_update 90" bug, see https://forums.alliedmods.net/showthread.php?p=2518786
    && /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 90 validate +quit \
    && /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 70 validate +quit || : \
    && /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 10 validate +quit || : \
    && /opt/steam/steamcmd.sh +login $steam_user $steam_password +force_install_dir /opt/hlds +app_update 90 validate +quit \
    && mkdir -p ~/.steam \
    && ln -s /opt/hlds ~/.steam/sdk32 \
    && ln -s /opt/steam/ /opt/hlds/steamcmd

ARG metamod_version="1.21.1-am"
ARG amxmod_version="1.8.2"

# Install metamod
RUN mkdir -p /opt/hlds/cstrike/addons/metamod/dlls \
    && curl -O http://www.amxmodx.org/release/metamod-$metamod_version.zip \
    && unzip -d /opt/hlds/cstrike metamod-$metamod_version.zip \
    && rm -f metamod-$metamod_version.zip

# Install AMX mod X
RUN curl -sqL "http://www.amxmodx.org/release/amxmodx-$amxmod_version-base-linux.tar.gz" | tar -C /opt/hlds/cstrike/ -zxvf - \
    && curl -sqL "http://www.amxmodx.org/release/amxmodx-$amxmod_version-cstrike-linux.tar.gz" | tar -C /opt/hlds/cstrike/ -zxvf -

# Add files
COPY hlds_run.sh /bin/hlds_run.sh
COPY hlds_sync /opt/hlds_sync
COPY hlds_tpl /opt/hlds_tpl

ENV LD_LIBRARY_PATH=/opt/hlds

WORKDIR /opt/hlds

ENTRYPOINT ["/bin/hlds_run.sh"]
