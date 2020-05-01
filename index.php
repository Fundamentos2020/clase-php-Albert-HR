<?php
    //Declaracion de variables

    $a = "Hola mundo ";
    $b = 3;
    $c = 2.5;


    //Function
    function miFuncion(){
        global $a, $b;
        $a = "cambiar texto";
    }

    miFuncion();
    echo $a;

    //echo $a . $b . $c;

    $arr1 = array();
    $arr2 = array();

    $arr1[] = 1;
    $arr1[] = 2;
    $arr1[] = "hola";

    //var_dump($arr1);

    $arr2['Valor1'] = 1;
    $arr2['Valor2'] = 2;
    $arr2['Valor3'] = 3;

    //var_dump($arr2);

    //echo $arr2['Valor2'];

    //JSON

    $alm['clave'] = 277898;
    $alm['Nombre'] = "Albert";
    $alm['Apellidos'] = "HR";

    $json = '{"clave": "277898", "Nombre": "Albert", "apellidos": "HR"}';

    $alm_aux = json_decode($json);

    //var_dump($alm_aux);

    //echo $alm_aux->clave;


    class Aux {
        public $x;
        public $y;
    }


    $aux = new Aux();

    $aux->x = "valor x";

    var_dump($aux);




?>