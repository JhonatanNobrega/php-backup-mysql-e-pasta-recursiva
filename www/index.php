<?php

require_once './class/BackupZip.php';

$zip = new BackupZip();
if ($zip->open("./backups/arquivoFAClassAbc.zip", ZIPARCHIVE::CREATE) === true) {
  $zip->Compact("./backups");
}
$zip->close();