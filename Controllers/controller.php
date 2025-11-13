<?php
class MvcController {
    public function pagina() {
        include "Views/template.php";
    }

    public function enlacesPaginasController() {
        if (isset($_GET['action'])) {
            $enlace = $_GET['action'];
        } else {
            $enlace = "inicio";
        }
        $respuesta = Paginas::enlacesPaginasModel($enlace);
        include $respuesta;
    }
}
?>