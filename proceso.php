<?php 
include "conexion.php";

//$consulta;
//laguaje query structure
extract($_POST);
$string="insert into alumnos (nombres,dni)values(?,?)";

$query=mysqli_prepare($conexion,$string);

mysqli_stmt_bind_param($query,ss,$nombres,$dni);

 if (mysqli_stmt_execute($query))
 {
 	header("location:index.php?r=ok");
 }else{
	echo "<br/>";
	echo mysqli_errno($conexion);
	echo "<br/>";
	echo mysqli_error($conexion);
}

/*$result=mysqli_query($conexion,$query);
echo "<br/>";


echo mysqli_errno($conexion);
echo "<br/>";
echo mysqli_error($conexion);
echo "<br/>";
var_dump($result);*/
/*if (mysqli_query($conexion,$query)) {

	echo "El reguistro se guardo correctamente";
}else{
	echo "<br/>";
	echo mysqli_errno($conexion,$query);
	echo "<br/>";
	echo mysqli_error($conexion);
}*/


 ?>