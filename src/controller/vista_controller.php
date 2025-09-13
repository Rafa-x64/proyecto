<?php
require_once("model/vista_model.php"); //debe incluir el codigo del modelo

class vista_controller extends vista_model //extiende del modelo para usar sus metodos
{

    public function cargarVista() //funcion que carga la vista segun la url que se obtiene como parametro
    {
        if (isset($_GET["page"])) { //page es el parametro especificado en .htaccess
            $vista = self::obtenerVista($_GET["page"]); //se asigna esa url a vista si esta establecido
        } else {
            $vista = "inicio-view.php"; //se muestra el inicio si no esta establecido el parametro en la url
        }

        require("view/plantilla.php"); //se requiere la plantilla para poder mostrar esa vista
    }
}
