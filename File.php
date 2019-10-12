<?php

class File{

    function createCSV( $arrData ){

        $file = fopen("tmp.csv", "w");
        chmod('tmp.csv', 0777);

        foreach ($arrData as $line) {
            fputcsv($file, $line);
        }

        fclose($file);

        header('Content-Type: application/csv; charset=UTF-8');
        header("Content-Disposition: attachment; filename=tmp.csv");

        exit();

    }
}