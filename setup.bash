#!/bin/bash

sudo composer self-update
composer update
art migrate
art db:seed
