# phpunit fizz buzz kata

## PHPUnit über Composer installieren

	# Wechseln in <Pfad zum git-workshop-repo>/php-examples/phpunit-fizz-buzz-kata
	# composer.json ausgeben
	cat composer.json
	
	# composer Abhängigkeiten installieren
	composer install

## PHPUnit ausführen

	# Übersicht über die Befehle
	./vendor/phpunit/phpunit/phpunit 
	
	# Einzelnen Test aufführen
	./vendor/phpunit/phpunit/phpunit --colors --bootstrap=vendor/autoload.php tests/MoneyTest.php
	
	# Alle Tests im Ordner tests/ ausführen
	./vendor/phpunit/phpunit/phpunit --colors --bootstrap=vendor/autoload.php tests/

## FizzBuzz Spezifikation

1. Es werden Zahlen von 1 bis n (typisch 100) hochgezählt
2. Für alle Zahlen teilbar durch 3 wird "Fizz" ausgegeben
3. Für alle Zahlen teilbar durch 5 wird "Buzz" ausgegeben
4. Für alle anderen Zahlen wird die Zahl ausgegeben

	1
	2
	Fizz
	4
	Buzz
	Fizz
	7
	8
	Fizz
	...

	