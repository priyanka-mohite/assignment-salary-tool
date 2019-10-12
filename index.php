<?php

require_once( 'Salary.php' );
require_once( 'File.php' );

$year = readline("Enter a year: ");
echo 'You entered year : ' . $year . "\n";

$salary = new Salary();
$SalaryDetails = $salary->getSalaryDates( $year );

$file = new File();
$file->createCSV( $SalaryDetails );

echo "\n CSV File with Salary dates created for " . $year . " in home folder \n";
