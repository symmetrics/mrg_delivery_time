* DOCUMENTATION

** INSTALLATION
Extrahieren Sie den Inhalt dieses Archivs in Ihr Magento Verzeichnis.
Ggf. ist das Leeren/Auffrischen des Magento-Caches notwendig. 
! Das Attribut 'delivery_time' muss dem/einem Attributset hinzugefügt werden. !

** USAGE

Symmetrics_DeliveryTime ermöglicht bei Produkten die
Lieferzeiten als Produktattribut einzugeben.

** FUNCTIONALITY
*** A: Erstellt Attribut "Lieferzeit" für Produkte mit
       Standardwert "2-3 Tagen"
*** B: Neue Spalte "Lieferzeit" in der Produkt-Grid mit
       einer Filterfunktion

** TECHNINCAL
Bei der Modulinstallation erstellt das Modul mittels einer
Migrationsdatei ein neues Produktattribut "delivery_time".
Dieses Attribut wird durch die Vererbung der Produkt-Grid
Klasse in der Produktliste im Backend als eine neue Spalte
dargestellt.

Ist das Attribut bei der Produkterstellung nicht gefüllt,
wird der Standardwert "2-3 Tage" benutzt.

** PROBLEMS

* TESTCASES

** BASIC

*** A:  1. Erstellen Sie ein neues Produkt. Geben Sie einen Wert für 
           das Attribut "Lieferzeit" ein, stellen Sie dieses Attribut 
           auf sichtbar und prüfen Sie es im Front-End.

*** B:  2. Gehen Sie Ins Back-End unter "Katalog/Produkte verwalten". 
           Überprüfen Sie die Filterfunktion für das Attribut "Lieferzeit".

** CATCHABLE

** STRESS