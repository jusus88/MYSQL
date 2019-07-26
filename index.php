<?php 
echo isset($_GET['r'])?"guardado ok":"";

 ?>
<form method="post" action="proceso.php">
	Nombres
	<input type="text" name="nombres">
	<br/>
	DNI
	<input type="text" name="dni">
	<br/>
	<button type="submit">Guardar</button>
</form>