<?php

include "menu.php";
?>
<form action="usuarios.php" method="get">
	
<input type="search" name="valor" placeholder="Usuario a buscar" required="true">
<input type="hidden" name="consulta" value="1">
<button type="submit">buscar</button>

</form>
