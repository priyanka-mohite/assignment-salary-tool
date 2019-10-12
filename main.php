<?php

require_once( 'Salary.php' );
require_once( 'File.php' );

$salary = new Salary();
$SalaryDetails = $salary->getSalaryDates();

$file = new File();
$file->createCSV( $SalaryDetails );
