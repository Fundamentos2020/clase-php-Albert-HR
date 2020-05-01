<?php
    //echo "hola";

    var_dump($_GET);


    $cdn = file_get_contents('php://input');

    $js = json_decode($cdn);
    var_dump($js);

?>