<?php
    $arquivo_ =  $_FILES['arquivo'] ["tmp_name"];
    $content = file_get_contents($arquivo_);
    

    $personData = explode("00000", $content);
    $headers = explode("|", $personData[0]);
    foreach (array_slice($personData, 1) as $personData) {
        $personDatas = explode(PHP_EOL, $personData);
        $person = [];
        $person = [
            'info' => explode("|", $personDatas[0]),
            'data' => array_map(function ($data) {
                return explode("|", $data);
            }, array_slice($personDatas, 1)),
        ];
        var_dump($person);
   
    }
	  

?>