# Laravel Project Boilerplate

## Requirement
- PHP >= 7.x
- Docker
- Docker Compose 

## Setup
Clone this repository.
```shell
$ git clone git@github.com:kkznch/poempoempoem-api.git
$ cd poempoempoem-api
```

Copy `.env` file for docker compose.
```shell
$ cp .env.example .env
```

Copy `src/.env` file for Laravel.
```shell
$ cp src/.env.example src/.env
```

Build and run docker containers.
```shell
$ make up
```

Init application.
```shell
$ make app-init
```

Migrate.
```shell
$ make app-db-fresh
```
