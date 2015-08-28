<?php

$format1 = 'd.m.Y';
$format2 = 'H.i';

$date1 = '11.12.2015';
$date2 = '22.11';

$result1 = DateTime::createFromFormat($format1, $date1);
$result2 = DateTime::createFromFormat($format1, $date2);
$result3 = DateTime::createFromFormat($format2, $date1);
$result4 = DateTime::createFromFormat($format2, $date2);

assert($result1 !== false);
assert($result2 === false);
assert($result3 === false);
assert($result4 !== false);