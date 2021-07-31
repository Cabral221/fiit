

# Development
# ------------------
.PHONY: dev
dev: vendor node_modules
	php artisan serve

.PHONY: seed
seed:
	php artisan migrate:refresh && php artisan db:seed

.PHONY: test
test: vendor
	php artisan test

.PHONY: stan
stan:
	./vendor/bin/phpstan analyse --memory-limit=2G --xdebug

.PHONY: push
push: prod_assets
	git add .
	git commit -m "Deploy: build production assets"
	git push

# Required
# ------------------
vendor:
	composer install

node_modules:
	npm install

.PHONY: asset
asset: node_modules
	npm run watch

# Required development
# ------------------
.PHONY: dev_assets
dev_assets: node_modules
	npm run dev


# Required Production
# ------------------
.PHONY: prod_assets
prod_assets: node_modules
	npm run prod


# Extra
.PHONY: seed_pro
seed_pro: vendor
	heroku run -a fiit-pretection php artisan migrate:refresh
	heroku run -a fiit-pretection php artisan db:seed