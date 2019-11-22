<?php

function minimumMoves($a, $m) {
    // Write your code here

 // $a = [123,456];
 // $m = [321,653];



    $moves = 0;

    echo '</br>first array is </br>';
    print_r($a);

    echo '</br>second array is </br>';
    print_r($m);

    if( !empty($a) && !empty($m) && sizeof($a) == sizeof($m)){

        $size = sizeof($a);
        for( $i=0; $size > $i ; $i++ ){
            if($a[$i] == $m[$i]){
                echo '</br>'.$i.'th numbers are equal</br>';

            }else {

            	echo '</br>'.$a[$i].' and '.$m[$i].' are not equal</br>';
                $aa = str_split($a[$i]);
                $mm = str_split($m[$i]);

                $numberOfDigits = sizeof($aa);
                	for($j=0; $numberOfDigits > $j ; $j++){
                		if($aa[$j] == $mm[$j]){
                			echo '</br>'.$j.'th digit is same</br>';
                		}elseif ($aa[$j] < $mm[$j]) {
                			while($aa[$j] < $mm[$j] ){

                				echo '</br>'.$aa[$j] .' is less than'. $mm[$j].'</br>';
                            	$aa[$j]++;
                            	$moves++;

                            	echo '</br>'.'increamented ' . $j . 'th digit i.e. ' . $aa[$j].'</br>';  
                       		}
                		}elseif ($aa[$j] > $mm[$j]) {
                			while($aa[$j] > $mm[$j] ){

                				echo '</br>'.$aa[$j] .' is greater than'. $mm[$j].'</br>';
                            	$aa[$j]--;
                            	$moves++;

                            	echo '</br>'.'decreamented ' . $j . 'th digit i.e. ' . $aa[$j].'</br>';  
                        	}
                		}
                	}
            }        
        }


	}else{
        echo "Invalid input : empty | diff size";
    }

echo 'total  moves === ' . $moves;

// die();

}

$a = [123,543];
$m = [321,279]; 
//16

$a1 = [1234,4321];
$m1= [2345,3214];

//10


$minMoves = minimumMoves($a1,$m1);


