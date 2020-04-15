#!/usr/bin/env bash

set -aeo pipefail

EXTRA_OPTIONS=( "$@" )

EXECUTABLE="/opt/hlds/hlds_run"
GAME="${GAME:-cstrike}"
MAXPLAYERS="${MAXPLAYERS:-32}"
START_MAP="${START_MAP:-de_dust2}"
SERVER_NAME="${SERVER_NAME:-Counter-Strike 1.6 Server}"

if [ "${HLTV}" == "true" ]; then
    EXECUTABLE="/opt/hlds/hltv"
    OPTIONS=( "+connect" "${HLTV_SERVER}" "-port" "${HLTV_PORT}" "+serverpassword" "${SERVER_PASSWORD}" "+spectatorpassword" "${SPECTATOR_PASSWORD}")
else
    OPTIONS=( "-game" "${GAME}" "+maxplayers" "${MAXPLAYERS}" "+map" "${START_MAP}" "+hostname" "\"${SERVER_NAME}\"")
fi

if [ -z "${RESTART_ON_FAIL}" ]; then
    OPTIONS+=('-norestart')
fi

# Add steam ids to sourcemod admin file
> "/opt/hlds/cstrike/addons/amxmodx/configs/users.ini"
IFS=',' read -ra STEAMIDS <<< "$STEAM_ADMINS"
for id in "${STEAMIDS[@]}"; do
    echo "\"$id\" \"\"  \"abcdefghijklmnopqrstu\" \"ce\"" >> "/opt/hlds/cstrike/addons/amxmodx/configs/users.ini"
done

# Update csgo dir
rsync -r "/opt/hlds_sync/" "/opt/hlds/"

# Make configs from templates
find "/opt/hlds_tpl" -type f -exec sh -c 'FILE=$(echo {} | sed "s|/opt/hlds_tpl/||"); ( echo "cat <<EOF"; cat "/opt/hlds_tpl/$FILE"; echo "EOF" ) | sh > "/opt/hlds/$FILE"' \;

exec "${EXECUTABLE}" "${OPTIONS[@]}" "${EXTRA_OPTIONS[@]}"
