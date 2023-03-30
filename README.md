# LEHN-Werbedisplays

- [Erste Schritte](#erste-schritte)
    - [Voraussetzungen](#voraussetzungen)
    - [Installation](#installation)
- [Ordnerstruktur](#Ordnerstruktur)
    - [app](#app)
    - [build](#build)
    - [docs](#docs)
    - [uploads](#uploads)
<br>

In diesem Repository ist eine Webapplikation, die verwendet wird,
um die Werbedisplays in den Filialen von Lehner-Versand AG zu steuern.
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