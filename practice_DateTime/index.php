<?php 

// echo date(Y);

$thisMonth;

$thisMonth = new DateTime('first day of this month');
// var_dump($thisMonth);

// $dt = clone $thisMonth;
// var_dump($dt);

// $dtn = $dt->modify('+1 month')->format('Y-m');
// var_dump($dtn);

// echo "\n";


// $period = new DatePeriod(
//     new DateTime('first day of this month'),
//     new DateInterval(P1D),
//     new DateTime('first day of next month')
// );
// var_dump($period);

// foreach ($period as $day) {
//         if($day->format('w') === '0') {
//             echo "Sunday!";
//         }
//         echo "not Sunday";
// }


// echo $thisMonth->modify('-1 month')->format('Y-m-d');
// echo $thisMonth->sub(new DateInterval('P1M'))->format('Y-m-d');

// var_dump($thisMonth->modify('-1 day'));
// var_dump(new DateInterval('P1D'));

$period = new DatePeriod (
    new DateTime('first day of this month'),
    new DateInterval('P2D'),
    new DateTime('last day of this month')
);

foreach ($period as $day) {
    var_dump($day);
    
}

