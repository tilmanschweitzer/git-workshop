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
* Shell Plugins 
    * Bash: https://github.com/revans/bash-it
    * Fish + https://github.com/bpinto/oh-my-fish
    * ZSH + https://github.com/robbyrussell/oh-my-zsh 
*  GUIs
    * Eclipse - http://eclipse.org/egit/
    * SourceTree - www.sourcetreeapp.com/download  

### Basis-Befehle

`git init|add|rm|commit|status|log`

    mkdir git-hallo-welt
    cd git-hallo-welt
    git init
    ls -la
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
    # Hilfe wo ist die Revisionsnummer? (Short Hash)

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
    
    # partial add
    git add -p

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

#### Repositorys für Stash anpassen

Besonderheit, um Änderungen privat zu halten. Normalerweise nicht notwendig.

    git remote -v
    git remote rm origin
    git remote add origin <new-repository>
    ## push and set upstream
    git push -u origin master
    
    git remote add public-github https://github.com/tilmanpotthof/git-workshop
    
    git pull public-github master


## Branching und Merging

### Befehle

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
    
    ## checkout remote branch
    git checkout experimental/zzz
    
    ## push to remote
    git push -u origin experimental/xy
    
    ## achtung - NICHT in anderen remote branches pushen!!!

#### Branching und Merging mit Stash

#### Pull Requests

## Fallstricke und Good-Practices

* Fallstricke
    * Vergessen von `git push` 
    * Public History-Rewriting - YOU SHALL NOT DO THAT [RFC 2119 - IETF](https://www.ietf.org/rfc/rfc2119.txt)
    * `git push --force` (In Stash verbieten!!!)
    * Naives Merging -- Server Änderungen einfach überschreiben.
    * Merging ohne Konflikte kann auch Fehler produzieren
* Good-Practices
    * Oft committen oder stagen
    * Feature-Branches in Sync mit `develop` halten
    * Nichts committen, das generiert werden kann

## Weitere Funktionen / Konzepte

### git flow

### Config

    cat .git/config

### Advanced Log

    git log --all --date-order --pretty=format:"%h%x09%an%x09%ad%x09%s"
    
    # source: http://stackoverflow.com/questions/1057564/pretty-git-branch-graphs
    [alias]
    lg1 = log --graph --abbrev-commit --decorate --date=relative --format=format:'%C(bold blue)%h%C(reset) - %C(bold green)(%ar)%C(reset) %C(white)%s%C(reset) %C(dim white)- %an%C(reset)%C(bold yellow)%d%C(reset)' --all
    lg2 = log --graph --abbrev-commit --decorate --format=format:'%C(bold blue)%h%C(reset) - %C(bold cyan)%aD%C(reset) %C(bold green)(%ar)%C(reset)%C(bold yellow)%d%C(reset)%n''          %C(white)%s%C(reset) %C(dim white)- %an%C(reset)' --all
    lg = !"git lg1"

### Advanced Diff

    git diff --word-diff
    git diff -r head~3 -- <path>
    git diff -r head~3 -- javaee7-wildfly-example/
    git diff --word-diff --word-diff-regex='[^[:space:]]' embed.plnkr.co/
    

### Stash

    git stash
    git stash apply
    git stash pop
    git stash list
    git checkout stash@{0} -- <path>
    git diff -r stash@{0} -- <path>
    git diff -r stash@\{0\} --stat

### Tagging

    git tag <tag>
    git tag v1.0
    git tag --list
    git tag --delete v1.0
    git push origin --tags
    git push origin v1.0

### History Rewriting

    git commit --amend
    git rebase -i HEAD~4
    
### ???

    git gc
    git fsck
    git reflog
    git diff --word-diff --word-diff-regex='[^[:space:]]'
    git format-patch feature/JUVE-1945-feedback-auf-mandantenmail-dokumentieren > feedbackClient
    git log --follow -S '{{nobilityTitle.nobilityTitles}}' -- src/main/webapp/js/app/person/view/person-view.html