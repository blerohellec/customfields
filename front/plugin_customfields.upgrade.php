<?php
/*
   ----------------------------------------------------------------------
   GLPI - Gestionnaire Libre de Parc Informatique
   Copyright (C) 2003-2009 INDEPNET Development Team.

   http://indepnet.net/   http://glpi-project.org/
   ----------------------------------------------------------------------

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
   ------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Sponsor: Oregon Dept. of Administrative Services, State Data Center
// Original Author of file: Ryan Foster
// Contact: Matt Hoover <dev@opensourcegov.net>
// Project Website: http://www.opensourcegov.net
// Purpose of file: Page to upgrade the plugin
// ----------------------------------------------------------------------

define('GLPI_ROOT', '../../..');

include (GLPI_ROOT.'/inc/includes.php');
if (haveRight('config','w'))
{
	// Check the version of the database tables. 
	$query="SELECT enabled FROM glpi_plugin_customfields WHERE device_type='-1';";
	$result = $DB->query($query);
	$data=$DB->fetch_array($result);
	$olddbversion=$data['enabled']; // Version of the last modification to the plugin tables' structure
	
	cleanCache('GLPI_HEADER_'.$_SESSION['glpiID']);
	plugin_customfields_upgrade($olddbversion);
	plugin_customfields_initSession();
	
	glpi_header($_SERVER['HTTP_REFERER']);

}
else
{
	commonHeader($LANG['login'][5],$_SERVER['PHP_SELF'],'plugins','customfields');
	echo '<div align="center"><br><br><img src="'.$CFG_GLPI['root_doc'].'/pics/warning.png" alt="warning"><br><br>';
	echo '<b>'.$LANG['login'][5].'</b></div>';  // Access denied
	commonFooter();
}

?>
