<?php
    
    $getjson = file_get_contents("../data/json/teacher.json");
    $decodedjson = json_decode($getjson, true);
    // print_r($decodedjson[0]);
    


?>