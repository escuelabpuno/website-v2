.PHONY: up in deploy
	# SHELL := /bin/bash # Use bash syntax

up:
	docker-compose up

in:
	docker exec -it $(shell docker-compose ps | grep php | cut -d" " -f 1) /bin/bash

deploy:
	ENV=production ./scripts/deploy.sh