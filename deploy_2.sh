#!/bin/bash
DIR="/home/didelofr/public_html/lilian-$1"
SERVER="didelofr@didelo.fr"

yarn run build:$1
rsync -avzhe ssh --progress --delete "dist/" "$SERVER:$DIR/"