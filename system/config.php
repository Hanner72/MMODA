<?php

// DATENBANK #######################################################
$dbserver       = "localhost";
$dbuname        = "root";
$dbpass         = "";
$db             = "mmoda";


// DATENBANK VERBINDUNG ############################################
$conn = new mysqli($dbserver, $dbuname, $dbpass, $db);
// CHECK VERBINDUNG
if ($conn->connect_error)
{
  die("Datenbankverbindung fehlgeschlagen: ".$conn->connect_error);
}
else{
  // Wenn die Verbindung steht, dann Daten von Datenbank holen
  $kon_query = "SELECT titel, seperator, beschreibung, maintenance FROM konfiguration";
  $kon_result = mysqli_query($conn, $kon_query);
  $kon_row = mysqli_fetch_assoc($kon_result);

  $titel = $kon_row['titel'];
  $seperator = $kon_row['seperator'];
  $beschreibung = $kon_row['beschreibung'];
  $maintenance = $kon_row['maintenance'];
}


// SEITENEINSTELLUNGEN #############################################
$titel          = "MMODA";
$seperator      = " - ";
$beschreibung   = "Das neue MMO Spiel";