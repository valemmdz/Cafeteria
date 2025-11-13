<?php
class Paginas {
    public static function enlacesPaginasModel($enlace) {

        $modulos = ["inicio", "nosotros", "servicios", "contactenos"];

        // Ruta absoluta a la carpeta de módulos
        $base = __DIR__ . "/../Views/modules/";

        // Ruta del archivo real
        $archivo = $base . $enlace . ".php";

        if (in_array($enlace, $modulos) && file_exists($archivo)) {
            return $archivo;
        } else {
            return $base . "inicio.php";
        }
    }
}
?>
