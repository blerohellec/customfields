<?php
/*

   ----------------------------------------------------------------------
   GLPI - Gestionnaire Libre de Parc Informatique
   Copyright (C) 2003-2008 by the INDEPNET Development Team.

   http://indepnet.net/   http://glpi-project.org/

   ----------------------------------------------------------------------
   LICENSE

   This program is free software; you can redistribute it and/or
   modify it under the terms of the GNU General Public License (GPL)
   as published by the Free Software Foundation; either version 2
   of the License, or (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   To read the license please visit http://www.gnu.org/copyleft/gpl.html
   ----------------------------------------------------------------------
// Sponsor: Oregon Dept. of Administrative Services, State Data Center
// Original Author of file: Ryan Foster
// Contact: Matt Hoover <dev@opensourcegov.net>
// Project Website: http://www.opensourcegov.net
// Purpose of file: Italian translation of plugin customfields
// by Passero 25.07.2009
----------------------------------------------------------------------
 */

$title = 'Campi personalizzati';

//English

$LANG['plugin_customfields']['title'] = $title;

// General
$LANG['plugin_customfields']['Enabled'] = 'Abilitato';
$LANG['plugin_customfields']['Disabled'] = 'Disabilitato';
$LANG['plugin_customfields']['Enable'] = 'Abilita';
$LANG['plugin_customfields']['Disable'] = 'Disabilita';
$LANG['plugin_customfields']['Device_Type'] = 'Tipo dispositivo';
$LANG['plugin_customfields']['Status'] = 'Stato';
$LANG['plugin_customfields']['Label'] = 'Etichetta';
$LANG['plugin_customfields']['System_Name'] = 'Nome di sistema (campo del DB)';
$LANG['plugin_customfields']['Update_Custom_Fields'] = 'Aggiorna '.$title;
$LANG['plugin_customfields']['Update_Financial_CF'] = 'Update Financial CF';
$LANG['plugin_customfields']['delete_warning'] = '(Attenzione: non puoi annullarlo!)';

// Manage Custom Fields
$LANG['plugin_customfields']['Manage_Custom_Fields'] = 'Gestione '.$title;
$LANG['plugin_customfields']['Type'] = $LANG['common'][17];
$LANG['plugin_customfields']['Location'] = 'Location';
$LANG['plugin_customfields']['Sort'] = 'Ordine';
$LANG['plugin_customfields']['Required'] = 'Required';
$LANG['plugin_customfields']['Restricted'] = 'Restricted';
$LANG['plugin_customfields']['Unique'] = 'Unique';
$LANG['plugin_customfields']['Entities'] = 'Entities';
$LANG['plugin_customfields']['no_cf_yet'] = 'Non &egrave stato ancora definito nessun campo personalizzato. Aggiungilo qui sotto.';
$LANG['plugin_customfields']['Add_New_Field'] = 'Aggiungi un nuovo campo';
$LANG['plugin_customfields']['Clone_Field'] = 'Duplica il campo (da altro dispositivo)';
$LANG['plugin_customfields']['Field'] = 'Campo';
$LANG['plugin_customfields']['Add_Custom_Dropdown'] = 'Aggiungi un men&ugrave personalizzato';
$LANG['plugin_customfields']['Dropdown_Name'] = 'Nome del men&ugrave';
$LANG['plugin_customfields']['status_of_cf'] = 'Stato di '.$title;
$LANG['plugin_customfields']['Activate_Custom_Fields'] = 'Atttiva '.$title;
$LANG['plugin_customfields']['add_fields_first'] = 'Devi aggiungere i campi data prima di poter abilitare i campi personalizzati per questo dispositivo';
$LANG['plugin_customfields']['cf_enabled'] = 'I campi personalizzati sono stati abilitati per questo dispositivo.';
$LANG['plugin_customfields']['cf_disabled'] = 'I campi personalizzati sono stati disabilitati per questo dispositivo.';
$LANG['plugin_customfields']['Custom_Field'] = 'Campo personalizzato'; // the default name for a field if left blank
$LANG['plugin_customfields']['multiselect_note'] = 'If creating a multiselect field, put table_name.field_name in the System Name field.';

// Manage Custom Dropdowns
$LANG['plugin_customfields']['Manage_Custom_Dropdowns'] = 'Gestisci i men&ugrave personalizzati';
$LANG['plugin_customfields']['Back_to_Manage'] = 'Ritorna alla '.$LANG['plugin_customfields']['Manage_Custom_Fields'];
$LANG['plugin_customfields']['Uses_Entities'] = 'Utilizza entit&agrave';
$LANG['plugin_customfields']['Tree_Structure'] = 'Struttura ad albero';
$LANG['plugin_customfields']['Used_by_NNN_devices'] = 'Usato da NNN dispositivi'; // IMPORTANT: Use NNN where the number should go
$LANG['plugin_customfields']['no_dd_yet'] = 'Non &egrave stato ancora definito nessun men&ugrave personalizzato. Aggiungilo qui sotto.';
$LANG['plugin_customfields']['Add_New_Dropdown'] = 'Aggiungi un nuovo men&ugrave';
$LANG['plugin_customfields']['Custom_Dropdown'] = 'Men&ugrave personalizzato'; //the default name of a custom dropdown

// Data Types
$LANG['plugin_customfields']['dropdown'] = 'Men&ugrave';
$LANG['plugin_customfields']['general'] = 'Generale';
$LANG['plugin_customfields']['text'] = 'Testo';
$LANG['plugin_customfields']['text_explained'] = 'Testo (su pi&ugrave linee)';
$LANG['plugin_customfields']['notes'] = 'Note';
$LANG['plugin_customfields']['notes_explained'] = 'Note (area testo)';
$LANG['plugin_customfields']['date'] = 'Data';
$LANG['plugin_customfields']['number'] = 'Numero';
$LANG['plugin_customfields']['money'] = 'Valuta';
$LANG['plugin_customfields']['yesno'] = 'Si/No';
$LANG['plugin_customfields']['sectionhead'] = 'Intestazione';
$LANG['plugin_customfields']['multiselect'] = 'Multiselect';

// Device Types
$LANG['plugin_customfields']['device_type'][COMPUTER_TYPE]  = $LANG['Menu'][0];
$LANG['plugin_customfields']['device_type'][NETWORKING_TYPE]= $LANG['Menu'][1];
$LANG['plugin_customfields']['device_type'][PRINTER_TYPE]   = $LANG['Menu'][2];
$LANG['plugin_customfields']['device_type'][MONITOR_TYPE]   = $LANG['Menu'][3];
$LANG['plugin_customfields']['device_type'][PERIPHERAL_TYPE]= $LANG['Menu'][16];
$LANG['plugin_customfields']['device_type'][SOFTWARE_TYPE]  = $LANG['Menu'][4];
$LANG['plugin_customfields']['device_type'][PHONE_TYPE]     = $LANG['Menu'][34];
$LANG['plugin_customfields']['device_type'][CARTRIDGE_TYPE] = $LANG['Menu'][21];
$LANG['plugin_customfields']['device_type'][CONSUMABLE_TYPE]= $LANG['Menu'][32];
$LANG['plugin_customfields']['device_type'][CONTACT_TYPE]   = $LANG['Menu'][22];
$LANG['plugin_customfields']['device_type'][ENTERPRISE_TYPE]= $LANG['Menu'][23];
$LANG['plugin_customfields']['device_type'][CONTRACT_TYPE]  = $LANG['Menu'][25];
$LANG['plugin_customfields']['device_type'][DOCUMENT_TYPE]  = $LANG['Menu'][27];
$LANG['plugin_customfields']['device_type'][TRACKING_TYPE]  = $LANG['Menu'][5];
$LANG['plugin_customfields']['device_type'][USER_TYPE]      = $LANG['Menu'][14];
$LANG['plugin_customfields']['device_type'][GROUP_TYPE]     = $LANG['Menu'][36];
$LANG['plugin_customfields']['device_type'][ENTITY_TYPE]    = $LANG['Menu'][37];
$LANG['plugin_customfields']['device_type'][NETWORKING_PORT_TYPE] = $LANG['networking'][6];
$LANG['plugin_customfields']['device_type'][COMPUTERDISK_TYPE] = $LANG['computers'][8];
$LANG['plugin_customfields']['device_type'][SOFTWAREVERSION_TYPE] = 'Software Versions';
$LANG['plugin_customfields']['device_type'][SOFTWARELICENSE_TYPE] = 'Software License';
$LANG['plugin_customfields']['device_type'][DEVICE_TYPE]    = $LANG['title'][30];

$LANG['plugin_customfields']['component_type'][MOBOARD_DEVICE]   = $LANG['devices'][5];
$LANG['plugin_customfields']['component_type'][PROCESSOR_DEVICE] = $LANG['devices'][4];
$LANG['plugin_customfields']['component_type'][RAM_DEVICE]       = $LANG['devices'][6];
$LANG['plugin_customfields']['component_type'][HDD_DEVICE]       = $LANG['devices'][1];
$LANG['plugin_customfields']['component_type'][NETWORK_DEVICE]   = $LANG['devices'][3];
$LANG['plugin_customfields']['component_type'][DRIVE_DEVICE]     = $LANG['devices'][19];
$LANG['plugin_customfields']['component_type'][CONTROL_DEVICE]   = $LANG['devices'][20];
$LANG['plugin_customfields']['component_type'][GFX_DEVICE]       = $LANG['devices'][2];
$LANG['plugin_customfields']['component_type'][SND_DEVICE]       = $LANG['devices'][7];
$LANG['plugin_customfields']['component_type'][PCI_DEVICE]       = $LANG['devices'][21];
$LANG['plugin_customfields']['component_type'][CASE_DEVICE]      = $LANG['devices'][22];
$LANG['plugin_customfields']['component_type'][POWER_DEVICE]     = $LANG['devices'][23];

// Setup
$LANG['plugin_customfields']['setup'][2] = 'Questo plugin richiede una versione di GLPI 0.72 o superiore';
$LANG['plugin_customfields']['setup'][3] = 'Setup del plugin '.$title;
$LANG['plugin_customfields']['setup'][4] = 'Nel tuo sistema sono stati trovati dati di '.$title.'. Questi dati sono stati ripristinati.';
$LANG['plugin_customfields']['setup'][5] = 'Sono stati trovati dati di una precedente versione di '.$title.'. Questi dati saranno aggiornati quando attiverai questo plugin.';
$LANG['plugin_customfields']['setup'][7] = 'La versione del plugin non &egrave compatibile con i dati esistenti. Per favore aggiorna il plugin.';
$LANG['plugin_customfields']['setup'][8] = $title.' &egrave stato disinstallato ma i suoi dati non sono stati rimossi.';
$LANG['plugin_customfields']['setup'][9] = 'Fai click qui per cancellare tutti i dati memorizzati.';
$LANG['plugin_customfields']['setup'][10] = 'Sei sicuro di voler cancellare tutti i dati del plugin?';
$LANG['plugin_customfields']['setup'][11] = 'Istruzioni';
//$LANG['plugin_customfields']['setup'][12] = 'FAQ';
//$LANG['plugin_customfields']['setup'][14] = 'Per favore passa a "Entit&agrave principale" prima di installare questo plugin';
?>
