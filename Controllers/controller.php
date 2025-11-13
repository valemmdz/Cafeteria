<?php
class MvcController {

    public function pagina() {
        // Ruta absoluta al template
        include __DIR__ . "/../Views/template.php";
    }

    public function enlacesPaginasController() {

        if (isset($_GET['action'])) {
            $enlace = $_GET['action'];
        } else {
            $enlace = "inicio";
        }

        // El modelo ya devuelve la ruta completa
        $respuesta = Paginas::enlacesPaginasModel($enlace);

        include $respuesta;
    }
}
?>
