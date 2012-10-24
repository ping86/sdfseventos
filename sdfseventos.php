<?php
/*
Plugin Name: Gestor de Eventos sdf
Plugin URI: http://www.salirdefiestas.com
Description: Gestión de eventos para sdfs.
Version: 1.0
Author: Salirdefiestas.com
Author URI: http://www.salirdefiestas.com
License: GPL2
*/


   function sdfeventos(){
      echo 'hola mundo';   
   }
   
   
   
   function sdfInstall(){
      //   
   }
   function sdfUninstall(){
      //   
   } 
     
	//ojo con la sintaxis de la funcion add_action 
	add_action('sdfeventos/sdfeventos.php','sdfInstall');
	add_action('sdfeventos/sdfeventos.php', 'sdfUninstall');   


?>
