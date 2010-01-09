<?php
/*
 * @version $Id: HEADER 1 2009-09-21 14:58 Tsmr $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2009 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------

// ----------------------------------------------------------------------
// Original Author of file: NOUH Walid & Benjamin Fontan
// Purpose of file: plugin order v1.1.0 - GLPI 0.72
// ----------------------------------------------------------------------
 */
 
$LANG['plugin_order']['title'][1] = "Bestellverwaltung";

$LANG['plugin_order'][0] = "Bestellnummer";
$LANG['plugin_order'][1] = "Bestelldatum";
$LANG['plugin_order'][2] = "Beschreibung";
$LANG['plugin_order'][3] = "Budget";
$LANG['plugin_order'][4] = "Detail Lieferant";
$LANG['plugin_order'][5] = "Validation";
$LANG['plugin_order'][11] = "Keine Bestellung vorhanden";
$LANG['plugin_order'][13] = "Total Netto";
$LANG['plugin_order'][14] = "Total Brutto";
$LANG['plugin_order'][15] = "Total Netto + Porto";
$LANG['plugin_order'][25] = "MwSt";
$LANG['plugin_order'][26] = "Porto";
$LANG['plugin_order'][28] = "Rechnung";
$LANG['plugin_order'][30] = "Angebot";
$LANG['plugin_order'][31] = "Auftragsbestätigung";
$LANG['plugin_order'][32] = "Zahlungskonditionen";
$LANG['plugin_order'][39] = "Name der Bestellung";
$LANG['plugin_order'][40] = "Lieferort";
$LANG['plugin_order'][42] = "Ein Gerät kann nicht mehreren Positionen zugewiesen werden";
$LANG['plugin_order'][43] = "Zurück zum Menü";
$LANG['plugin_order'][44] = "Die Bestellnummer ist Pflicht!";
$LANG['plugin_order'][45] = "Noch nicht empfangene Geräte können nicht erzeugt werden";
$LANG['plugin_order'][46] = "Noch nicht empfangene Geräte können nicht verbunden werden";
$LANG['plugin_order'][47] = "Informationen über die Bestellung";
$LANG['plugin_order'][48] = "Eine oder mehrere ausgewählte Positionen wurden noch keinem Gerät zugeordnet";

$LANG['plugin_order']['status'][0] = "Status";
$LANG['plugin_order']['status'][1] = "Wird geliefert";
$LANG['plugin_order']['status'][2] = "Geliefert";
$LANG['plugin_order']['status'][7] = "Freigabe pendent";
$LANG['plugin_order']['status'][8] = "Empfangen";
$LANG['plugin_order']['status'][9] = "In Bearbeitung";
$LANG['plugin_order']['status'][10] = "Storniert";
$LANG['plugin_order']['status'][11] = "Lieferung pendent";
$LANG['plugin_order']['status'][12] = "Genehmigt";

$LANG['plugin_order']['item'][0] = "Verbundene Geräte";
$LANG['plugin_order']['item'][2] = "Keine verbundene Geräte";

$LANG['plugin_order']['detail'][2] = "Referenz";
$LANG['plugin_order']['detail'][4] = "Nettostückpreis";
$LANG['plugin_order']['detail'][5] = "Der Bestellung hinzufügen";
$LANG['plugin_order']['detail'][6] = "Typ";
$LANG['plugin_order']['detail'][7] = "Menge";
$LANG['plugin_order']['detail'][17] = "Positionen";
$LANG['plugin_order']['detail'][18] = "Nettostückpreis mit Rabatt";
$LANG['plugin_order']['detail'][19] = "Status";
$LANG['plugin_order']['detail'][20] = "Kein Gerät kann empfangen werden";
$LANG['plugin_order']['detail'][21] = "Lieferdatum";
$LANG['plugin_order']['detail'][25] = "Rabatt in %";
$LANG['plugin_order']['detail'][27] = "Lieferanten wählen";
$LANG['plugin_order']['detail'][28] = "Diese Referenz ist in der Bestellung bereits vorhanden";
$LANG['plugin_order']['detail'][29] = "Kein Gerät wurde ausgewählt";
$LANG['plugin_order']['detail'][30] = "Geräte erfolgreich erzeugt";
$LANG['plugin_order']['detail'][31] = "Geräte erfolgreich empfangen";
$LANG['plugin_order']['detail'][32] = "Bereits empfangene Geräte";
$LANG['plugin_order']['detail'][33] = "Der Rabattsatz muss zwischen 0 und 100 liegen";
$LANG['plugin_order']['detail'][34] = "Referenz hinzufügen";
$LANG['plugin_order']['detail'][35] = "Referenz entfernen";
$LANG['plugin_order']['detail'][36] = "Wollen Sie wirklich diese Positionen entfernen? Bereits gelieferte Geräte werden in Folge gelöscht!";
$LANG['plugin_order']['detail'][37] = "Es gibt nicht genügend zu empfangene Geräte";
$LANG['plugin_order']['detail'][38] = "Wollen Sie diese Bestellung wirklich stornieren? Dies kann nicht rückgängig gemacht werden!";
$LANG['plugin_order']['detail'][39] = "Wollen Sie den Freigabeantrag wirklich rückgängig machen?";
$LANG['plugin_order']['detail'][40] = "Wollen Sie die Bestellung wirklich Bearbeiten?";

$LANG['plugin_order']['delivery'][1] = "Warenempfang";
$LANG['plugin_order']['delivery'][2] = "Geräte empfangen";
$LANG['plugin_order']['delivery'][3] = "Verbundene Geräte erzeugen";
$LANG['plugin_order']['delivery'][4] = "Geräte Batch-Empfang";
$LANG['plugin_order']['delivery'][5] = "Empfangene Geräte";
$LANG['plugin_order']['delivery'][6] = "Zu empfangende Geräte";
$LANG['plugin_order']['delivery'][9] = "Erzeugen";
$LANG['plugin_order']['delivery'][11] = "Mit bereits existierendem Gerät verbinden";
$LANG['plugin_order']['delivery'][12] = "Verbindung mit Gerät entfernen";
$LANG['plugin_order']['delivery'][13] = "Aus Bestellung erzeugte Geräte";
$LANG['plugin_order']['delivery'][14] = "Mit Bestellung verbundene Geräte";
$LANG['plugin_order']['delivery'][15] = "Von Bestellung gelöste Geräte";
$LANG['plugin_order']['delivery'][16] = "Bereits im Inventar aufgenommene Geräte";
$LANG['plugin_order']['delivery'][17] = "Es kann kein Gerät erzeugt werden";

$LANG['plugin_order']['profile'][0] = "Berechtigungsverwaltung";
$LANG['plugin_order']['profile'][1] = "Bestellung freigeben";
$LANG['plugin_order']['profile'][2] = "Bestellung stornieren";
$LANG['plugin_order']['profile'][3] = "Freigegebene Bestellung ändern";

$LANG['plugin_order']['reference'][1] = "Produktreferenz";
$LANG['plugin_order']['reference'][2] = "Produktreferenz hinzufügen";
$LANG['plugin_order']['reference'][3] = "Liste der Referenzen";
$LANG['plugin_order']['reference'][5] = "Lieferant für eine Referenz";
$LANG['plugin_order']['reference'][6] = "Eine Referenz mit gleichem Namen existiert bereits";
$LANG['plugin_order']['reference'][7] = "Aktuell benutzte Referenzen";
$LANG['plugin_order']['reference'][8] = "Eine Referenz ohne Namen kann nicht erzeugt werden";
$LANG['plugin_order']['reference'][9] = "Eine Referenz ohne Typ kann nicht erzeugt werden";
$LANG['plugin_order']['reference'][10] = "Produktreferenz des Lieferanten";

$LANG['plugin_order']['config'][0] = "Plugin-Einstellungen";
$LANG['plugin_order']['config'][1] = "Standard-MwSt";
$LANG['plugin_order']['config'][2] = "Freigabeprozedur verwenden";

$LANG['plugin_order']['mailing'][0] = "Freigabeantrag einer Bestellung";
$LANG['plugin_order']['mailing'][2] = "von";

$LANG['plugin_order']['infocom'][1] = "Einige Felder können nicht verändert werden: sie stammen aus einer Bestellung";

$LANG['plugin_order']['history'][2] = "Add";
$LANG['plugin_order']['history'][3] = "Update";
$LANG['plugin_order']['history'][4] = "Delete";

$LANG['plugin_order']['validation'][0] = "Thanks to add at least one equipment on your order.";
$LANG['plugin_order']['validation'][1] = "Freigabeantrag der Bestellung";
$LANG['plugin_order']['validation'][2] = "Freigabe der Bestellung";
$LANG['plugin_order']['validation'][3] = "Bestellung wird geliefert";
$LANG['plugin_order']['validation'][4] = "Bestellung wurde komplett geliefert";
$LANG['plugin_order']['validation'][5] = "Bestellung wurde storniert";
$LANG['plugin_order']['validation'][6] = "Freigabeprozedur einer Bestellung";
$LANG['plugin_order']['validation'][7] = "Freigabeantrag der Bestellung wurde gestellt";
$LANG['plugin_order']['validation'][9] = "Bestellung freigeben";
$LANG['plugin_order']['validation'][10] = "Bestellung ist freigegeben worden";
$LANG['plugin_order']['validation'][11] = "Bestellung freigeben lassen";
$LANG['plugin_order']['validation'][12] = "Bestellung stornieren";
$LANG['plugin_order']['validation'][13] = "Freigabeantrag rückgängig machen";
$LANG['plugin_order']['validation'][14] = "Freigabeantrag wurde rückgängig gemacht";
$LANG['plugin_order']['validation'][15] = "Bestellung in Bearbeitung";
$LANG['plugin_order']['validation'][16] = "Freigabe wurde rückgängig gemacht";
$LANG['plugin_order']['validation'][17] = "Bestellung bearbeiten";

$LANG['plugin_order']['menu'][1] = "Bestellungen verwalten";
$LANG['plugin_order']['menu'][2] = "Liste der Produktreferenzen verwalten";
$LANG['plugin_order']['menu'][3] = "Budgets verwalten";

$LANG['plugin_order']['budget'][1] = "Bestellungen";
$LANG['plugin_order']['budget'][2] = "Verbrauchtes Budget";
$LANG['plugin_order']['budget'][3] = "Budgetwert ist gleich Null. Bitte versuchen Sie es erneut";

$LANG['plugin_order']['generation'][0] = "Erzeugen";
$LANG['plugin_order']['generation'][1] = "Lieferschein erzeugen";
$LANG['plugin_order']['generation'][2] = "Lieferschein";
$LANG['plugin_order']['generation'][3] = "Invoice address";
$LANG['plugin_order']['generation'][4] = "Delivery address";
$LANG['plugin_order']['generation'][5] = "The";
$LANG['plugin_order']['generation'][6] = "Quantity";
$LANG['plugin_order']['generation'][7] = "Designation";
$LANG['plugin_order']['generation'][8] = "Unit price";
$LANG['plugin_order']['generation'][9] = "Sum tax free";
$LANG['plugin_order']['generation'][10] = "Issuer order";
$LANG['plugin_order']['generation'][11] = "Recipient";
$LANG['plugin_order']['generation'][12] = "Order number";
$LANG['plugin_order']['generation'][13] = "Discount rate";
$LANG['plugin_order']['generation'][14] = "TOTAL tax free";
$LANG['plugin_order']['generation'][15] = "TOTAL with taxes";
$LANG['plugin_order']['generation'][16] = "Signature of issuing order";
$LANG['plugin_order']['generation'][17] = "£";

?>