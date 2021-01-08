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

progression:
	./bin/brain-progression

prime:
	./bin/brain-prime

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
