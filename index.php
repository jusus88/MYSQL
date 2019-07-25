<?php 

	echo "Conexion a Mysql";

	//la variable almacenara la conexion
	@$conexion=mysqli_connect("localhost","root",12345678,"mantenimiento");
			//conecta al servidor(servidor,usuario,clave)
/*
	echo "<br />";
	echo mysqli_connect_errno();
	echo "<br />";
	echo mysqli_connect_error();
*/

	echo "<br />";
	if(mysqli_connect_errno()==2002)
	{
		echo "No se encuentra el servidor al que quieres acceder";
	}else if(mysqli_connect_errno()==1045){
		echo "El usuario o clave son incorrectos";
	}else if(mysqli_connect_errno()==1049){
			echo "Base de datos no encontrada";
	}else{
		echo "Exito";
	}
	
	

//	var_dump($conexion);

 ?>