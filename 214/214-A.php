<?php
$input = trim(fgets(STDIN));

if($input < 126)
{
    print '4';
}
elseif($input < 212)
{
    print '6';
}
else
{
    print '8';
}