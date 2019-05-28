<?php

if(strlen($_GET['lang']) == 0)
{
  header('Location:?&lang=es');
}

include 'funciones.php';
include 'header.php';

$pag = '';

if(isset($_GET['pag']))$pag=$_GET['pag']; //pregunta si pag.url esta definida, y le da un valor $pag

// switch de los posibles valores de pag, por default sera
switch($pag){
    case 'uno':
      include('primero.php');
      break;
    case 'dos':
      include('segundo.php');
      break;
    default:
      include('primero.php');
      $_GET['pag']="uno";
      break;
}

include('footer.php');

?>
