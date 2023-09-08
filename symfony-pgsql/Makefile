UID = $(shell id -u)
GUID = $(shell id -g)

SERVICE_APP = app

COMPOSER_EXECUTABLE = /usr/local/bin/composer

RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))

composer:
	@docker-compose exec ${SERVICE_APP} $(COMPOSER_EXECUTABLE) ${RUN_ARGS}

composer-install:
	@$(MAKE) composer RUN_ARGS="install --ignore-platform-reqs"

console:
	@docker-compose exec -u ${UID}:${GUID} ${SERVICE_APP} bin/console ${RUN_ARGS}