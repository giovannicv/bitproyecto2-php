<?php
	$user="system";
	$passw="fabricio";
	$bd="xe";
	$conn = oci_connect($user,$passw,$bd);
	if(!$conn){
		echo"Error en la conexion..";
		die();
	}
?>