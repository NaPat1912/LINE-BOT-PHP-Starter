<?php
  echo"hello world";
  $myfile = fopen("logs.txt", "wr") or die("Unable to open file!");
  $txt = "user id date";
  fwrite($myfile, $txt);
  fclose($myfile);
  
  ?>
