<?php
ini_set('display_errors',1);
function filetest($filename) {
  if(!file_exists($filename)) {
    throw new Exception("File not found");
  }
  return true;
}

try {
  filetest('exercise7.php');
  echo 'FIle is present';
}

//catch exception
catch(Exception $e) {
  echo $e;
}
?>