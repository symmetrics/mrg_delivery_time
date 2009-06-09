----------------------------------------------------
Installation
----------------------------------------------------

1. Ordner app/ in den Projekt-Root kopieren.

3. Cache löschen

4. Frontend aufrufen

5. Fertig!

----------------------------------------------------
Beschreibung
----------------------------------------------------

Symmetrics_DeliveryTime ermöglicht bei Produkten die
Lieferzeiten als Produktattribut einzugeben.

Features:

- Erstellt Attribut "Lieferzeit" für Produkte mit
Standardwert "2-3 Tagen"
- Neue Spalte "Lieferzeit" in der Produkt-Grid mit
einer Filterfunktion

----------------------------------------------------
Funktonalität und Besonderheiten
----------------------------------------------------

Bei der Modulinstallation erstellt das Modul mittels einer
Migrationsdatei ein neues Produktattribut "delivery_time".
Dieses Attribut wird durch die Vererbung der Produkt-Grid
Klasse in der Produktliste im Backend als eine neue Spalte
dargestellt.

Ist das Attribut bei der Produkterstellung nicht gefüllt
wird der Standardwert "2-3 Tage" benutzt.

----------------------------------------------------
Probleme
----------------------------------------------------

Keine bekannt.