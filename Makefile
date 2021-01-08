validate:
	composer validate

install:
	composer install

start:
	./bin/brain-games

even:
	./bin/brain-even

calc:
	./bin/brain-calc

gcd:
	./bin/brain-gcd

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
