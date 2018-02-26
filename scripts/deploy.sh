#!/bin/bash

set -e

composer global require "hirak/prestissimo:^0.3"
composer install --prefer-dist

if [[ $ENV == 'production' ]]; then
  rsync -avzhe "ssh -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no" \
    --exclude-from "${PWD}/scripts/excludes.txt" \
    --exclude 'settings.local.php' \
    --delete --progress \
    . ${USER}@${SERVER}:~/${DIRECTORY}/

  ssh -o StrictHostKeyChecking=no ${USER}@${SERVER} \
    'cd ./${DIRECTORY}; ENV=production make update'
fi
