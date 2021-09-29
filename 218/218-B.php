<?php

$input = explode(' ',trim(fgets(STDIN)));
 
$abc = range('a','z');
 
for($i = 0; $i < count($input); $i++) 
{
    print $abc[$input[$i] - 1];
}



    