#!/bin/bash
# Simple Docker-Compose PHP wrapper
docker-compose exec --user "1000:1000" php "$@"