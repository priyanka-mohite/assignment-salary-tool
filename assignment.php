<?php

function minimumMoves($a, $m) {
    // Write your code here

    $a = [];
    $m = [];



    $moves = 0;
    if( !empty($a) && !empty($m) && sizeof($a) == sizeof($m)){

        $size = sizeof($a);
        for( $i=0; $size > $i ; $i++ ){
            if($a[$i] == $m[$i]){
                echo i.'th number are equal';

            }else {
                # code...
            }        
        }


	}else{
        echo "Invalid input : empty | diff size";
    }


die();

       

        for( $i=0; $size > $i ; $i++ ){

         
               //do nothing
           }elseif(strlen((string)$a) == strlen((string)$m)){
               $aa = str_split((string)$a);
               $mm = str_split((string)$m);

                $numberOfDigits = strlen((string)$a);
                         
                for($j=0; $numberOfDigits > $j ; $j++){
                    if($aa[$j] == $mm[$j]){
                        //do nothing
                    }elseif($aa[$j] > $mm[$j]){

                        while($aa[$j] > $mm[$j] ){
                            $aa[$j]++;
                            $moves++;
                        }
                    }elseif($aa[$j] < $mm[$j]){

                        while($aa[$j] < $mm[$j] ){
                            $aa[$j]--;
                            $moves++;
                        }
                }
           }

        }

    }

    }

    return $moves;

}


$minMoves = minimumMoves();

$a = [123,543];
$m = [321,279]; 
//16

$a1 = [1234,4321];
$m1= [2345,3214];

//10


$minMoves = minimumMoves($a,$m);

