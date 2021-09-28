<?php 
$S1 = trim(fgets(STDIN));
$S2 = trim(fgets(STDIN));
$S3 = trim(fgets(STDIN));
$T1 = trim(fgets(STDIN));

$All = str_split($T1);

foreach($All as $all)
{
    if($all == 1)
    {
        print $S1;
    }
    if($all == 2)
    {
        print $S2;
    }
    if($all == 3)
    {
        print $S3;
    }
}
