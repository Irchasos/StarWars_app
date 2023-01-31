#!/bin/bash

docker network rm $(docker network ls | grep "bridge" | awk '/ / { print $1 }')
