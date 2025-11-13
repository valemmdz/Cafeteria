<h2>Lista de Usuarios</h2>
<a href="index.php?action=agregar">Agregar Usuario</a>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr>
<?php 
$mvc = new MvcController();
$mvc->vistaUsuariosController();
?>
</table>