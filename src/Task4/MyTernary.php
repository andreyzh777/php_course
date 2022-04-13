<?php
$s = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';

$a= json_decode($s);
var_dump($a);
// (reset($a); ($k= key($a)); next ($a))
//    echo $k.": "$a[$k].PHP_EOL;