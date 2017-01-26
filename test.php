<?php

$file = fopen("https://aisapi.herokuapp.com/test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

?>
