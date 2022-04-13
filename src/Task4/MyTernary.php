<?php
$s = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
$a=[];
$a= json_decode($s);

for (reset($a); ($k= key($a)); next ($a))
    echo $k.": "$a[$k].PHP_EOL;