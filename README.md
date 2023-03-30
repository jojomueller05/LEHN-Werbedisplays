# LEHN-Werbedisplays

- [Ordnerstruktur](#Ordnerstruktur)
    - [app](#app)
    - [build](#build)
    - [docs](#docs)
    - [uploads](#uploads)
<br>

Repository Klonen:
```
git clone git@github.com:jojomueller05/LEHN-Werbedisplays.git
```
In diesem Repository ist eine Webapplikation, die verwendet wird,
um die Werbedisplays in den Filialen von Lehner-Versand AG zu steuern.

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