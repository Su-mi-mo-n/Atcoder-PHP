<?php
$input = trim(fgets(STDIN));
$input2 = explode(' ', trim(fgets(STDIN)));
$input3 = trim(fgets(STDIN));

//配列の合計値 102
$sum = array_sum($input2);
//print $sum;

//3つ目の入力/配列の合計 100/102
$inex = floor($input3 / $sum);
//print $inex;

// 1 * 配列の合計値 = 10
$sumy = $inex * $sum;

//print $sumy;

$num = 0;
for($i=0;$i<$input + 5;$i++)
{
    if($sumy < $input3)
    {
        $sumy = $sumy + $input2[$i];
        $num++;

    }
}

$output = $inex * $input + $num;

if($output == 0)
{
    print '1';
}
else
{
    print $output;
}


