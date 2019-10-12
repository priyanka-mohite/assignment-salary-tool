<?php

require_once('Salary.php');
require_once('File.php');

$salary = new Salary();
$arrSalaryData = $salary->getSalaryData();

$file = new File();
$file->createCSV( $arrSalaryData );
