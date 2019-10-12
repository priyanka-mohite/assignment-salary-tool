<?php

class File{

    function createCSV( $arrData ){

        $f = fopen("tmp.csv", "w");
        foreach ($arrData as $line) {
            fputcsv($f, $line);
        }

        header('Content-Disposition: attachment; filename="filename.csv";');

    }
}