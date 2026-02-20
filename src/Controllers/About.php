<?php
//El about es del sistema controlador

namespace Controllers;

//renderizador de la vista
use Views\Renderer;

class About extends PublicController{
    public function run():void
    {
        $viewData = [
            "nombre" => "Edgardo J Caceres",
            "correo" => "edgar388@gmail.com",
            "telefono" => "0000-0000"
        ];

        //Metodo estatico
        //No ocupan ser invocados
        //Se mandan a llamar por el :: no con ->
        Renderer::render("about", $viewData);
    }

}


?>