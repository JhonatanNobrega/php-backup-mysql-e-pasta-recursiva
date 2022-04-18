<?php
class BackupZip extends ZipArchive
{
  public function Compact($cwd)
  {
    $open = opendir($cwd);
    while ($folder = readdir($open)) {
      if ($folder != '.' && $folder != '..') {
        if (is_dir($cwd . '/' . $folder)) {
          $dir = str_replace('./', '', ($cwd . '/' . $folder));
          $this->addEmptyDir($dir);
          $this->Compact($dir);
        } elseif (is_file($cwd . '/' . $folder)) {
          $arq = str_replace('./', '', $cwd . '/' . $folder);
          $this->addFile($arq);
        }
      }
    }
  }
}
