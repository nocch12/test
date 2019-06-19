<?php 

echo date(Y);

$thisMonth;

$thisMonth = new DateTime('first day of this month');
var_dump($thisMonth);

$dt = clone $thisMonth;
var_dump($dt);

$dtn = $dt->modify('+1 month')->format('Y-m');
var_dump($dtn);

echo "\n";


$period = new DatePeriod(
    new DateTime('first day of this month'),
    new DateInterval(P1D),
    new DateTime('first day of next month')
);
var_dump($period);

foreach ($period as $day) {
    if ()
    
}