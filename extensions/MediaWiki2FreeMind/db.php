<?php

/*
  Copyright 2011  nonstopgmbh.com,   (http://www.nonstopgmbh.com/)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 *
 *
 *
 *
  Dieses Programm ist freie Software. Sie k�nnen es unter den Bedingungen
  der GNU General Public License, wie von der Free Software Foundation ver�ffentlicht,
  weitergeben und/oder modifizieren, entweder gem�� Version 3 der Lizenz oder (nach Ihrer Option)
  jeder sp�teren Version.

  Die Ver�ffentlichung dieses Programms erfolgt in der Hoffnung, da� es Ihnen von Nutzen sein wird,
  aber OHNE IRGENDEINE GARANTIE, sogar ohne die implizite Garantie der MARKTREIFE oder der
  VERWENDBARKEIT F�R EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public License.

  Sie sollten ein Exemplar der GNU General Public License zusammen mit diesem Programm erhalten haben.
  Falls nicht, siehe <http://www.gnu.org/licenses/>.

 */
error_reporting(E_ALL);

// Zum Aufbau der Verbindung zur Datenbank
define('MYSQL_HOST', 'localhost');
define('MYSQL_BENUTZER', 'benutzer');
define('MYSQL_KENNWORT', 'kennwort');
define('MYSQL_DATENBANK', 'datenbank');

$db_link = mysql_connect(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT);

if ($db_link) {
//echo 'Verbindung erfolgreich: ';
// echo $db_link;
} else {
    // Wenn keine Verbindung
    die('keine Verbindung m�glich: ' . mysql_error());
}
?>