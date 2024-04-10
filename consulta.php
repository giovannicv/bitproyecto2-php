<?php
	include("conexion.php");
	$conn=OCILogon($user,$passw,$bd);
	if(!$conn)
	{
		echo "Error en la Conexion..".var_dump(OCIError);
		die();
	}
	$query=OCIParse($conn, "SELECT * FROM tutorial");	
	OCIExecute($query, OCI_DEFAULT);
	while(OCIFetch($query)){
	     echo "USUARIO-->".OCIResult($query,"USUARIO").
		 "<br>PASSWORD-->".OCIResult($query,"PASSWORD")."<br><br>";
	}
	
	
	
	OCICommit($conn);
	OCILogoff($conn);
?>