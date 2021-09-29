<?php

$input = explode(' ', trim(fgets(STDIN)));


$arr = [];
for($i=0;$i<=$input[0];$i++)
{
    for($j=0;$j<=($input[0]);$j++)
    {
        for($k=0;$k<=($input[0]);$k++)
        {
            $in = $i + $j + $k;
            $in2 = $i * $j * $k;
            if($in <= $input[0] && $in2 <= $input[1])
            {
                $arr[] = $i.$j.$k;
            }
        }
    }
}
print count($arr);
