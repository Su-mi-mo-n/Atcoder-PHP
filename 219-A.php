<?php
$input = trim(fgets(STDIN));

if($input < 40)
{
    print 40 - $input;
}
elseif($input < 70)
{
    print 70 - $input;
}
elseif($input < 90)
{
    print 90 - $input;
}
else
{
    print 'expert';
}