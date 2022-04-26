<?php
$birthday = "05.11.1985";
$today = date("z") + 1;   // количество дней с начала года
$birthdayArray = [];
$birthdayArray = explode('.', $birthday); //
$dayToB=$birthdayArray[0];
switch ($birthdayArray[1])
{
    case 2 : $dayToB+=31; break;
    case 3 : $dayToB+=59; break;
    case 4 : $dayToB+=90; break;
    case 5 : $dayToB+=121; break;
    case 6 : $dayToB+=152; break;
    case 7 : $dayToB+=182; break;
    case 8 : $dayToB+=213; break;
    case 9 : $dayToB+=244; break;
    case 10 : $dayToB+=274; break;
    case 11 : $dayToB+=305; break;
    case 12 : $dayToB+=335; break;
}
$year_today=date('Y');  // текущий год
if (! ($year_today %4)) {
    $dayToB++;                    // высокосный год
}
$delta=$dayToB-$today;

echo "Until the birthday left $delta days" . PHP_EOL;
