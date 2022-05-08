#!/bin/bash
DIR="/home/didelofr/public_html/lilian-$1"
SERVER="didelofr@didelo.fr"

yarn run build:$1
ssh $SERVER "rm -rf $DIR"
ssh $SERVER "mkdir -p $DIR"
scp -r dist/* $SERVER:$DIR