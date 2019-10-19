<?php  global $configG; 



$msg = "";



/****************************************/

$msg = "<style>";

/****************************************/





/*Fondo Header*/
$msg .= ".bg-dark,footer { background-color: ".$configG['selcolor_fondoheader']['rgba']."!important; }";

/*Color Menu Principal*/
$msg .= ".navbar-nav > li > a, footer .colinfo { color: ".$configG['selcolor_menuheader']['rgba']."; }";



/****************************************/

$msg .= "</style>";

/****************************************/

echo $msg;



?>