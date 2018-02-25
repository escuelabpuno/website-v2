#!/bin/bash

set -e

composer global require "hirak/prestissimo:^0.3"
composer install --prefer-dist
