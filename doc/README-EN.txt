* DOCUMENTATION

** INSTALLATION 
Extrahieren Sie den Inhalt dieses Archivs in Ihr Magento Verzeichnis. 
Ggf. ist das Leeren/Auffrischen des Magento-Caches notwendig. 
Achtung! Das Attribut 'delivery_time' muss dem/einem Attributset 
hinzugefügt werden!

** USAGE
Symmetrics_DeliveryTime ermöglicht bei Produkten die 
Lieferzeit als Produktattribut einzugeben. Das Modul erstellt 
ein neues Attribut "Lieferzeit" für Produkte mit dem Standardwert "2-3 Tage"
(nur für neu angelegte Produkte). Die neue Spalte "Lieferzeit" im 
Produkt-Grid hat eine Filterfunktion.

** FUNCTIONALITY
*** A: Erstellt Attribut "Lieferzeit" für Produkte mit
        Standardwert "2-3 Tagen". Dieser Standardwert wird
        nur bei neu angelegten Produkten eingetragen. Bei 
        bestehenden Produkten bleibt dieses Feld leer,
        wenn man nichts einträgt.
*** B: Neue Spalte "Lieferzeit" in der Produkt-Grid mit
        einer Filterfunktion.

** TECHNICAL 
Bei der Modulinstallation erstellt das Modul mittels einer
 Migrationsdatei ein neues Produktattribut "delivery_time".
 Dieses Attribut wird durch die Vererbung der Produkt-Grid 
Klasse in der Produktliste im Backend als eine neue Spalte
 dargestellt. 

Ist das Attribut bei der Produkterstellung nicht gefüllt, 
wird der Standardwert "2-3 Tage" benutzt.

** PROBLEMS 
Keine Probleme bekannt.

* TESTCASES
** BASIC
*** A: Erstellen Sie ein neues Produkt. Geben Sie einen Wert für 
         das Attribut "Lieferzeit" ein, stellen Sie dieses Attribut 
         auf sichtbar und prüfen Sie es im Front-End.

*** B: Gehen Sie Ins Back-End unter "Katalog/Produkte verwalten". 
         Überprüfen Sie die Filterfunktion für das Attribut "Lieferzeit".
