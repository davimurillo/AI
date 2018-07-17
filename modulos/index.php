<!DOCTYPE html>
<html lang="en">
<?php 
/*
Sistema: Gessalud
Author: Davi Murillo
Description: Sistema de Seguridad y Salud Ocupacional.
Version: 1.0
Tags: seguridad, salud, ocupacional, PAVH, IPER
*/
require_once('common.php'); checkUser(); 
?>
<?php require("head.php"); ?>
 <body id="mimin" class="dashboard">
      <?php require("cabecera.php"); ?>
	   <div class="container-fluid mimin-wrapper">
		   <?php require("menu_izquierdo.php"); ?>
		  <div id="content">
            <div class="col-md-12" style="padding:20px; ">
				<div class="col-md-12 padding-0">
						<div class="col-md-12" style="text-align:center">
							<img src="../img/logos/logo.png">	
						</div>
						<div class="col-md-12" style="text-align:center; margin-top:10px">
							<h1> BIENVENIDO </h1>	
						</div>
				</div>
			</div>
		  </div>
		</div>
  </body>
</html>