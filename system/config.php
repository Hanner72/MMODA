<?php

// DATENBANK
$dbserver       = "localhost";
$dbuname        = "root";
$dbpass         = "";
$db             = "mmoda";

// DATENBANK VERBINDUNG
$conn = new mysqli($dbserver, $dbuname, $dbpass, $db);
// CHECK VERBINDUNG
if ($conn->connect_error)
{
  die("Datenbankverbindung fehlgeschlagen: ".$conn->connect_error);
}
echo "Verbindung zu DB steht";

// ADMINISTRATION
$maintenance    = "0";

// SEITENEINSTELLUNGEN
$titel          = "MMODA";
$seperator      = " - ";
$beschreibung   = "Das neue MMO Spiel";