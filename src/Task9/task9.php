<?php
$str = "The quick-brown_fox jumps over the_lazy-dog";
$mask = [' ', '-', '_'];
echo str_replace($mask,'',ucwords($str, implode($mask)))  . PHP_EOL;