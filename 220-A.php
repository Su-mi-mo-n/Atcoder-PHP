<?php
$input = explode(' ', trim(fgets(STDIN)));
 
$input1 = $input[0] / $input[2];
$input2 = $input[1] / $input[2];
 
$ceil = ceil($input1);
 
if($ceil <= $input2)
{
    print $ceil * $input[2];
}
else
{
    print '-1';
}

