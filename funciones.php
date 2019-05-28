<?php

session_start();
if(isset($_GET['lang'])) $_SESSION['lang']=$_GET['lang'];

function l_traduce($busca){ /* busca el txt */

switch($_SESSION['lang'])
{
case "es":
	$archivo=fopen("idiomas/es.txt","r",1) or die("No se pudo abrir el archivo de idioma español");
break;

case "en":
    $archivo=fopen("idiomas/en.txt","r",1) or die("No se pudo abrir el archivo de idioma ingles");
break;

case "zh":
    $archivo=fopen("idiomas/zh.txt","r",1) or die("No se pudo abrir el archivo de idioma");
break;

default:
    $archivo=fopen("idiomas/es.txt","r",1) or die("No se pudo abrir el archivo de idioma español");
}

while (!feof($archivo)){
	$linea=fgets($archivo);
	if(rtrim($linea)=="[:$busca:]")
	{
	   $linea=fgets($archivo);
	   while(rtrim($linea)!="[/:]")
	   {
	   	$palabra='';
	     $palabra=$palabra.$linea;
		 $linea=fgets($archivo);
	   }
	   break;
	}}
fclose($archivo);
$palabra = utf8_encode($palabra);

return trim($palabra);
}

function l($busca,$no_imprime=NULL){ /* Imprime la traduccion */
	if($no_imprime == NULL)
	   echo l_traduce($busca);
	else
	   return l_traduce($busca);
}




?>
