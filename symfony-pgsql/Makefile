UID = $(shell id -u)
GUID = $(shell id -g)

SERVICE_APP = app

RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))

composer:
	@docker-compose exec -u ${UID}:${GUID} ${SERVICE_APP} /usr/local/bin/composer ${RUN_ARGS}

composer-install:
	@$(MAKE) composer RUN_ARGS="install --ignore-platform-reqs"

test:
	@docker-compose exec -u ${UID}:${GUID} ${SERVICE_APP} vendor/bin/phpunit

console:
	@docker-compose exec -u ${UID}:${GUID} ${SERVICE_APP} bin/console ${RUN_ARGS}