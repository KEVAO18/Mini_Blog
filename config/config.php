<?php 

$autor = "Santiago Orrego Martínez";

$co_autor = "Kevin Andrés Orrego Martínez";

$appName = "Lifestyles, traditions, concepts of beauty";

$email = "example@gmail.com";

$date = date("Y-m-d");

$mes = date('n');

if ($mes >= 2) {
    $n = date('Y');
    $ex = $n - 2018;
    $ag = $n - 2001;
}else{
    $nacimiento=2001;
    $n = date('Y');
    $ex = $n - 2018;
    $ag = $n - 2001 - 1;
}

$icoName = "favicon";

//$host = "localhost";

//$user = "root";

//$pass = "";

//$db = "test";

$serve = "http://localhost/terminadas/santiago/";

//$con = new mysqli($host, $user, $pass, $db) or die("Fallo en la conexion a la base de datos");

?>