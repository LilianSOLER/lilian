#!/bin/bash
DIR="/home/didelofr/public_html/lilian-$1"
SERVER="didelofr@didelo.fr"

echo "👷 Build the prod version"
yarn
yarn run build:$1

echo "🗑🚀 Synchronize all files"
rsync -avzhe ssh --progress --delete "dist/" "$SERVER:$DIR/"
echo "🎉 Project deployed"