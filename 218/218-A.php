<?php
$input = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

$input3 = substr($input2,$input - 1,1);

if($input3 == 'o')
{
    print 'Yes';
}
else{
    print 'No';
}