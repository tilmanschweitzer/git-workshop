# karma testing setup

## Node Abhängigkeiten installieren

	# Wechseln in <Pfad zum git-workshop-repo>/js-examples/karma-testing
	# package.json ausgeben
	cat package.json
	
	# Node Abhängigkeiten installieren
	npm install

## Grunt Tasks

	# Übersicht über die Befehle
	grunt --help 
	
	# Grunt Konfiguration ausgeben
	cat Gruntfile.js
	
	# Code minifizieren und testen
	grunt
	
	# Interaktiver Task für die Entwicklung mit Livereload
	# ^^^^^^^^^^^^^^^^^
	grunt dev


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

	