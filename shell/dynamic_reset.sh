#!/usr/bin/env bash

find ../dynamic/data/ -not -name 'readme.mark' -delete
cp /dev/null ../dynamic/data/data.sqlite
./cache_clear.sh