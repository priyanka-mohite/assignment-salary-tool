<?php

$intCurrentYear = 2019;
$stringYearlyData = [];


for($intCurrentMonth = 1; $intCurrentMonth <= 12; $intCurrentMonth++){

    $stringYearlyData[] = getSalaryDate( $intCurrentMonth, $intCurrentYear ) + getBonusDate( $intCurrentMonth, $intCurrentYear );

}

echo "<pre>";
print_r($stringYearlyData);

function getSalaryDate( $intCurrentMonth, $intCurrentYear ){

    $arrStringWeekends = ['Sat', 'Sun'];
    $stringMonthlyData = [];

    $stringLastDateOfMonth = date('Y-m-t',mktime(null, null, null, $intCurrentMonth, 1, $intCurrentYear));
    $stringLastDayOfMonth = date('D', strtotime($stringLastDateOfMonth));

    while (in_array($stringLastDayOfMonth, $arrStringWeekends)) {

        $stringLastDateOfMonth = date('Y-m-d', strtotime('-1 day', strtotime($stringLastDateOfMonth)));
        $stringLastDayOfMonth = date('D', strtotime($stringLastDateOfMonth));
    }


    $stringMonthlyData['Month'] = date("F", mktime(null, null, null, $intCurrentMonth));
    $stringMonthlyData['Salary Date'] = $stringLastDateOfMonth;
    $stringMonthlyData['Salary Day'] = $stringLastDayOfMonth;

    return $stringMonthlyData;
}


function getBonusDate( $intCurrentMonth, $intCurrentYear ){

    $arrStringWeekends = ['Sat', 'Sun'];
    $arrBonusData = [];


    $stringBonusDate = date('Y-m-d',mktime(null, null, null, $intCurrentMonth, 15, $intCurrentYear));
    $stringBonusDay = date('D', strtotime($stringBonusDate));

    while (in_array($stringBonusDay, $arrStringWeekends)) {

        $stringBonusDay = date('D', strtotime('+1 day', strtotime($stringBonusDate)));

        while( $stringBonusDay != 'Wed' ){
            $stringBonusDate = date('Y-m-d', strtotime('+1 day', strtotime($stringBonusDate)));
            $stringBonusDay = date('D', strtotime(  $stringBonusDate ) );
        }

    }

    $arrBonusData['Bonus Date'] = $stringBonusDate;
    $arrBonusData['Bonus day'] = $stringBonusDay;


    return $arrBonusData;

}
