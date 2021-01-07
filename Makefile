validate:
	composer validate

install:
	composer install

start:
	./bin/brain-games

even:
	./bin/brain-even

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
