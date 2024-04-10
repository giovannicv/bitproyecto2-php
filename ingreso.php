<?php
	include("conexion.php");
	$conn=OCILogon($user,$passw,$bd);
	if(!$conn)
	{
		echo "Error en la Conexion..".var_dump(OCIError);
		die();
	}
	$var1=$_POST["user"];
	$var2=$_POST["pass"];
	$query=OCIParse($conn, "INSERT INTO tutorial VALUES (:dato1,:dato2)");
	OCIBindByName($query, ":dato1",$var1);
	OCIBindByName($query, ":dato2",$var2);
	OCIExecute($query, OCI_DEFAULT);
	OCICommit($conn);
	OCILogoff($conn);
?>