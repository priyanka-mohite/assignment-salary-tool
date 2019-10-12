<?php

/**
 * Class salary
 */
class salary{

    public $currentYear = 2019;
    public $weekends = ['Sat', 'Sun'];

    /**
     * @return array
     */
    function getSalaryDates(){

        $totalMonths = 12;
        $yearlyDetails = [];
        for( $currentMonth = 1; $currentMonth <= $totalMonths; $currentMonth++ ){
            $yearlyDetails[] = $this->getSalaryDate( $currentMonth ) + $this->getBonusDate( $currentMonth );
        }

        return $yearlyDetails;

    }

    /**
     * @param $currentMonth
     * @return array
     */
    function getSalaryDate( $currentMonth ){

        $monthlyDetails = [];

        $lastDateOfMonth = date('Y-m-t',mktime(null, null, null, $currentMonth, 1, $this->currentYear));
        $lastDayOfMonth = date('D', strtotime($lastDateOfMonth));

        while (in_array($lastDayOfMonth, $this->weekends)) {

            $lastDateOfMonth = date('Y-m-d', strtotime('-1 day', strtotime($lastDateOfMonth)));
            $lastDayOfMonth = date('D', strtotime($lastDateOfMonth));
        }


        $monthlyDetails['Month'] = date("F", mktime(null, null, null, $currentMonth));
        $monthlyDetails['Salary Date'] = $lastDateOfMonth;
        $monthlyDetails['Salary Day'] = $lastDayOfMonth;

        return $monthlyDetails;
    }


    /**
     * @param $currentMonth
     * @return array
     */
    function getBonusDate( $currentMonth ){

        $bonusDetails = [];

        $bonusDate = date('Y-m-d',mktime(null, null, null, $currentMonth, 15, $this->currentYear));
        $bonusDay = date('D', strtotime($bonusDate));

        while (in_array($bonusDay, $this->weekends)) {

            $bonusDay = date('D', strtotime('+1 day', strtotime($bonusDate)));
            while( $bonusDay != 'Wed' ){
                $bonusDate = date('Y-m-d', strtotime('+1 day', strtotime($bonusDate)));
                $bonusDay = date('D', strtotime(  $bonusDate ) );
            }
        }

        $bonusDetails['Bonus Date'] = $bonusDate;
        $bonusDetails['Bonus day'] = $bonusDay;

        return $bonusDetails;

    }
}

