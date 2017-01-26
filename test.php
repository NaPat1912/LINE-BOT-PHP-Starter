<?php

$file = fopen("https://github.com/NaPat1912/LINE-BOT-PHP-Starter/test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

?>
