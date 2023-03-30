# LEHN-Werbedisplays

- [Über das Projekt](#über-das-projekt)
    - [Gebaut mit](#gebaut-mit)
- [Erste Schritte](#erste-schritte)
    - [Voraussetzungen](#voraussetzungen)
    - [Installation](#installation)
- [Backup & Shutdown](#backup--shutdown)
- [Administration](#administration)
- [Ordnerstruktur](#Ordnerstruktur)
    - [app](#app)
    - [build](#build)
    - [docs](#docs)
    - [uploads](#uploads)
- [Kontakt](#kontakt)
<br>

# Über das Projekt
In diesem Repository ist eine Webapplikation, die verwendet wird,
um die Werbedisplays in den Filialen von Lehner-Versand AG zu steuern.

## Gebaut mit
Dieses Projekt habe ich gebaut mit:
- Docker
- HTML
- CSS
- JavaScript
- Bootstrap5
- PHP

# Erste Schritte
Damit man die Webapplikation verwenden kann, muss man vorher einige Vorbereitungen machen.

## Voraussetzungen
- Docker <br>
&#8594; [Linux Installation](https://docs.docker.com/engine/install/ubuntu/)<br>
&#8594; [Windows](https://docs.docker.com/desktop/install/windows-install/)
- Git<br>
&#8594; Linux: 

``` 
sudo apt install git 
```
&#8594; [Windows](https://git-scm.com/download/win)

## Installation
1. Repository Klonen:
```
git clone git@github.com:jojomueller05/LEHN-Werbedisplays.git
```
2. In das verzeichnis Build wechseln
```
cd ./LEHN-Werbedisplays/build
```
3. Applikation mit Docker starten
```
sudo docker-compose up -d
``` 
4. Die Website lauft nun auf Port 9000. <br>
Siehe [http://localhost:9000](http://localhost:9000)
# Backup & Shutdown
Da die Datenbank dieser Applikation auch in einem Docker Conntainer ist, muss man vor dem Herunterfahren der Container, einen SQL DUMP auf der DB machen.

Wenn man die Appliaktion, bzw. die Container wieder hochfahren möchte, muss man den SQL DUMP in die Datei [init.sql](./build/sql-install/init.sql) kopieren. Docker baut anhand dieser Datei den DB Container auf.

**Container herunterfahren:**
```
sudo docker-compose down --volumes
```

# Administration
In seltenen Fällen kann es vorkommen, dass man auf der Datenbank als Systemadministrator direkt etwas machen muss. Für diesen Fall, ist PHPMyAdmin installiert. Das Portal erreicht man über den Port 8080.
[http://localhost:8080](http://localhost:8080)

# Ordnerstruktur
Hier ein kleiner Überblick über die Ordnerstrucktur der Website.

```
├───app                                                                                                                                                                                               │   ├───img                                                                                                                                                                                           
│   ├───includes
│   ├───JS
│   └───views
├───build
│   └───sql-install
├───docs
└───uploads
```
## [app](./app/)
Im ordner app werden alle Dateien für die Website gespeichert:
- **img** &#8594; Bilder, Logos, Icons etc.
- **includes** &#8594; PHP Backend code
- **JS** &#8594; JavaScript code
- **views** &#8594; Website Bausteine (z.b. Header, Footer etc.)

## [build](./build/)
In diesem Ordner werden alle Dateien abgespeichert, um die Umgebung (Webserver, Datenbank usw.) auf zu bauen. In Fall dieses Projektes sind das Docker files.
- **sql-install** &#8594; in diesem Ordner befindet sich ein [SQL Script](./build/sql-install/init.sql), das beim Aufbau der Umgebung ausgeführt wird.

## [docs](./docs/)
In diesen Ordner kommen alle Konzepte, Anleitungen, Planungen, Zeichnungen usw.

## [uploads](./uploads/)
In disem Ordner werden alle Bilder, die ein Benutzer auf der Website hochlädt gespeichert.

# Kontakt
Joël Julien Müller - joel.mueller@lehner-versand.ch <br>
Project Link https://github.com/jojomueller05/LEHN-Werbedisplays