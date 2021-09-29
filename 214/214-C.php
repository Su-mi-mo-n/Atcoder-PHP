<?php

$input = trim(fgets(STDIN));
$S = explode(' ', trim(fgets(STDIN)));
$T = explode(' ', trim(fgets(STDIN)));


for($j=0;$j<$input;$j++)
{
$TC = $T;

$TS = $S[$input - 1] + $T[$input - 1];

if($T[0] < $TS)
{
    //print $T[0]."\n";
}
else
{
    //print $TS."\n";
    $T[0] = $TS;
}

for($i=1;$i<$input;$i++)
{
    if($T[$i] < $S[$i - 1] + $T[$i - 1])
    {
        //print $T[$i]."\n";
    }
    else
    {
        //print $S[$i - 1] + $T[$i - 1]."\n";
        $T[$i] = $S[$i - 1] + $T[$i - 1];
    }

}
if($TC == $T){
    print implode("\n", $T);
    exit;
}
}




