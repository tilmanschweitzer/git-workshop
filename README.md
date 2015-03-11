# git-workshop

Live-Notizen und Kommunikation: [https://etherpad.mozilla.org/9xavy5HzeD](https://etherpad.mozilla.org/9xavy5HzeD)

## Installation und grundlegende Konfiguration

* git Projektseite: [git-scm.com](http://git-scm.com/)
* Windows
    * Installer herunterladen und starten
    * Option wählen **Use Git from the Windows Command Prompt**
    * Programm **Windows PowerShell** öffnen
* Mac/Linux
    * Installer herunterladen und starten
    * Programm **Terminal** öffnen

### Basis-Befehle

`git init|add|rm|commit|status|log`

    mkdir git-hallo-welt
    cd git-hallo-welt
    git init
    git status
    # nur mac/linux - windows datei anlegen
    echo "hallo welt" >> hallowelt.txt
    git add hallowelt.txt
    git status
    git rm hallowelt.txt
    git rm --cached hallowelt.txt
    git commit -m "mein erster commit"
    
    ## Author und Email
    git config --global user.email "myemail@example.com"
    git config --global user.name "My Username"
    
    git commit -m "mein erster commit"
    git log

	# hilfe
	git help commit
	
	# ignorieren von dateien
	echo ".DS_Store" >> .gitignore
	git add .gitignore
	git commit -m "ignore datei hinzugefügt."

### Arbeiten mit der Staging Area

`git diff|reset|checkout`


![Staging Area](staging-area.png)

([Image Source: Pro Git by Scott Chacon](http://www.progit.couchone.com/progit/_design/chacon/_show/chapter/01-chapter2))


    git status
    
    # datei bearbeiten
    git status
    git diff
    
    git add <dateiname>
    git status
    git diff
    
    ## datei bearbeiten
    git diff
    git diff -r head
    
    git reset head <dateiname>
    git status
    
    git add <dateiname>
    git status
    
    git checkout head <dateiname>
    git status
    
    ## abkürzung
    git commit -a -m "wichtige änderung"

### Befehle zum verteilten Arbeiten

`git clone|fetch|pull|push`


    git clone <repository-url>
    cd <repository-name>
    git status

#### Beispiel Projekt

[https://github.com/tilmanpotthof/git-workshop](https://github.com/tilmanpotthof/git-workshop)

    git clone https://github.com/tilmanpotthof/git-workshop
    cd git-workshop
    git status

#### Aufgabe: Name, Rolle und Fragen eintragen

... entweder als JSON-Datei oder in Java-Code:

* Java - Folgende Datei öffnen
   * `javaee7-wildfly-example/src/main/java/de/tilmanpotthof/workshop/ExampleWebservice.java`
   * Neues Object `WorkshopParticipant` hinzufügen
* JSON - Folgenden Ordner öffnen
   * `javaee7-wildfly-example/src/main/webapp/workshopParticipants/`
   * Datei `participant-0.json` kopieren und Nummer anpassen
   * Inhalte ändern

#### Repositorys auf Stash anpassen



### Befehel Branching und Merging

    git checkout -b experimental/xy
    
    # lange version
    git branch experimental/xy
    git checkout experimental/xy
    
    git add .
    git status
    git commit -m "..."
    
    git branch -a
    
    git checkout master
    
    git rebase experimental
    
    git rebase -i HEAD~4
    
    ##
    
    
    
    
    
    