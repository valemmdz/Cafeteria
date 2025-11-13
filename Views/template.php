<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Proyecto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include "Views/modules/navegacion.php"; ?>
    <section class="contenido">
        <?php
            $mvc = new MvcController();
            $mvc->enlacesPaginasController();
        ?>
    </section>
</body>
</html>