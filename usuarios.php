<?php 

include "conexion.php";

extract($_GET);

$query="select nombres,dni from alumnos where nombres = '$valor'";
echo "<br/>";


if ($resultado=mysqli_query($conexion,$query))
	

{
echo "<br/>";
if(mysqli_num_rows($resultado)==0){
	echo "No hay";

}else{
	while($registro=mysqli_fetch_assoc($resultado))												
{
	
	echo $registro["nombres"]," - ",$registro["dni"];
	echo "<br/>";
}
}
}
//insert true,false;
//select (result)
	///array asociado   se van por en nombre    array numerico
 ?>
 <a href="buscar.html"> Nueva busqueda</a>