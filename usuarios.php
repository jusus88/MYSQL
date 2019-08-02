<?php 

include "conexion.php";
include "menu.php";
extract($_GET);
if(!isset($consulta)){
	$consulta=0;
}

$querys=[
"select nombres,dni from alumnos",
"select nombres,dni from alumnos where nombres = '$valor'"
];

$query=$querys[$consulta];
echo "<br/>";


if ($resultado=mysqli_query($conexion,$query))
	

{
echo "<br/>";
if(mysqli_num_rows($resultado)==0){
	echo "No hay";

}else{
	while($registro=mysqli_fetch_assoc($resultado))												
{
	echo "<div class='reguistro'>";
	echo $registro["nombres"]," - ",$registro["dni"], ":: <a href='#'>Editar</a>";
	echo "
	<form action=''method='get' class='editar'>
	<input type='text' name='nombres' value='",$registro["nombres"],"'>

	<input type='text' name='dni' value='",$registro["dni"],"'>
	<button type='submit'>Actualizar</button>
	</form>
	";
	echo "</div>";
	echo "<br/>";
}
}
}
//insert true,false;
//select (result)
	///array asociado   se van por en nombre    array numerico
 ?>
 <a href="buscar.php"> Nueva busqueda</a>
 <script type="text/javascript">
 	let reguistro=document.querySelectorAll(".reguistro");
 	for (var i = 0; i < reguistro.length; i++) {
 		reguistro[i].addEventListener("click",()=>{
 			reguistro[i].querySelector(".editar").style.display="block";
 		});

 	}
 </script>