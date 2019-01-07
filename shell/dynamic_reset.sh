#!/usr/bin/env bash

while true; do
  read -p '!!!!!!!!!! ALL DATA WILL BE LOST !!!!!!!!!! Are you sure? [y/n]: ' answer
  case $answer in
    y ) find ../dynamic/cache   -not -name 'readme.mark' -not -path '../dynamic/cache'   -delete
        find ../dynamic/data    -not -name 'readme.mark' -not -path '../dynamic/data'    -delete
        find ../dynamic/files   -not -name 'readme.mark' -not -path '../dynamic/files'   -delete
        find ../dynamic/logs    -not -name 'readme.mark' -not -path '../dynamic/logs'    -delete
        find ../dynamic/tmp     -not -name 'readme.mark' -not -path '../dynamic/tmp'     -delete
        cp /dev/null ../dynamic/data/data.sqlite
        break;;
    n ) exit;;
    * ) echo 'Please answer "y" or "n".';;
  esac
done