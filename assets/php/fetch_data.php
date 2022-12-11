<?php

function fetch_data($filename) {
    $arrData = array();
    $csvFp = fopen($filename, "r");
    $index = 0;

    while(!feof($csvFp)) {
        // if($index === 0) continue;

        $data = fgetcsv($csvFp, 1000, ",");
        if(!empty($data)) {
            // foreach($data as $d) {
            //     echo $d;
            // }
            // var_dump($data);
            $tempData = array(
                "no" => $data[0],
                "nama_dataset" => $data[1],
                "produsen_data" => $data[2],
                "tanggal_pembuatan" => $data[3],
                "tanggal_update" => $data[4],
                "api" => $data[5],
            );
            array_push($arrData, $tempData);
        }

        $index++;
    }

    fclose($csvFp);

    // var_dump($arrData);
    array_shift($arrData);
    return $arrData;
}

?>