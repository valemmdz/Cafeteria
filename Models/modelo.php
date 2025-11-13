<?php
class Paginas {
    public static function enlacesPaginasModel($enlace) {
        $modulos = ["inicio", "nosotros", "servicios", "contactenos"];
        
        // Verificar si el módulo existe físicamente
        $ruta = "Views/modules/" . $enlace . ".php";
        if (in_array($enlace, $modulos) && file_exists($ruta)) {
            return $ruta;
        } else {
            return "Views/modules/inicio.php";
        }
    }
}
?>