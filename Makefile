validate:
	composer validate

install:
	composer install

start:
	./bin/brain-games

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
