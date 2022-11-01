include .env

phptools-init:
	@make phptools-build
	@make phptools-up
	@make phptools-composer-require-php-cs-fixer
	@make phptools-composer-require-phpinsights
	@make phptools-composer-require-rector
	@make phptools-composer-install
phptools-restart:
	@make phptools-down
	docker system prune
	@make phptools-up
phptools-up:
	docker compose up -d phptools
phptools-down:
	docker compose rm -fsv phptools
phptools-build:
	docker compose build phptools
phptools-build-no-cache:
	docker compose build phptools --no-cache
phptools-composer-install:
	docker compose exec phptools composer install
phptools-composer-require-rector:
	docker compose exec phptools composer require rector/rector
phptools-composer-require-phpinsights:
	docker compose exec phptools composer require nunomaduro/phpinsights
phptools-composer-require-php-cs-fixer:
	docker compose exec phptools composer require friendsofphp/php-cs-fixer
phptools-bash:
	docker compose exec phptools bash
phptools-composer-delete:
	rm -f ./phptools/composer.json
	rm -f ./phptools/composer.lock

# PSR12
psr12:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/phpcs ../$(SRC_DIR)/ --standard=PSR12 --ignore=*/vendor/*
psr12-fix:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/php-cs-fixer fix ../$(SRC_DIR)/ --rules=@PSR12
# PHP Insights
phpinsights:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/phpinsights analyse ../$(SRC_DIR) --summary
phpinsights-fix:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/phpinsights analyse ../$(SRC_DIR) --fix
# Rector
rector:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/rector process --dry-run
rector-fix:
	@make phptools-up
	docker compose exec phptools ./vendor/bin/rector process --clear-cache

