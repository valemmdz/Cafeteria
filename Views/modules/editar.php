<h2>Editar Usuario</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
    <input type="submit" name="actualizar" value="Actualizar">
</form>