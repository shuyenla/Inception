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

down:
	docker-compose -f ${FILE} down

stop:
	docker-compose -f ${FILE} stop

clean: stop
	docker-compose -f ${FILE} rm

volume:
	docker volumes ls

fclean: clean
	docker volume rm srcs_db_volume
	docker volume rm srcs_webfile_volume
	sudo rm -rf ${LOCAL_VOLUME}/dataBase/*
	sudo rm -rf ${LOCAL_VOLUME}/websitesFiles/*

re: fclean all

logs:
	docker-compose -f ${FILE} logs --tail=100 -f $(c)

.PHONY: help build up start down destroy stop restart logs logs-api ps login-timescale login-api db-shell