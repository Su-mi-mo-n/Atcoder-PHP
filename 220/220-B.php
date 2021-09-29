<?php
$shinsuu = trim(fgets(STDIN));
$input = explode(' ', trim(fgets(STDIN)));
 
$out1 = base_convert($input[0], $shinsuu, 10);
$out2 = base_convert($input[1], $shinsuu, 10);
 
print $out1 * $out2;
?>