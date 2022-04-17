<?php
$s = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';

function outputStrData (array $a)
{
    foreach ($a as $key => $data) {
        if ('string' == gettype($data)) {
            echo " " . $key . " => " . $data . " " . PHP_EOL;
            continue;
        }
        outputStrData( $data );
    }
}

outputStrData( json_decode($s, true) );
