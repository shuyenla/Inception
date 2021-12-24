###
# makefile for docker compose
###
  # https://medium.com/freestoneinfotech/simplifying-docker-compose-operations-using-makefile-26d451456d63

FILE = srcs/docker-compose.yml
LOCAL_VOLUME = /home/shlu/data

all: build up

build:
	docker-compose -f ${FILE} build 

up:
	docker-compose -f ${FILE} up -d --force-recreate --remove-orphans

ps:
	docker ps

v:
	docker volumes ls

n:
	docker-compose -f ${FILE} network ls

down:
	docker-compose -f ${FILE} down

stop:
	docker-compose -f ${FILE} stop

clean: stop
	docker-compose -f ${FILE} rm
	docker volume rm srcs_db_volume
	docker volume rm srcs_webfile_volume

fclean: stop
	./srcs/requirements/tools/fclean.sh

re: fclean all

logs:
	docker-compose -f ${FILE} logs --tail=100 -f $(c)

.PHONY: help build up start down destroy stop restart logs logs-api ps login-timescale login-api db-shell