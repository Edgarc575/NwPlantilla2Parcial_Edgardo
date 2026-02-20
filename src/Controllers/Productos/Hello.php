<?php

namespace Controllers\Productos;
use Views\Renderer;
use Controllers\PublicController;

//El router solo corre este
class Hello extends PublicController{

private string $txtNombre = "";
private string $txtResultado = "";
private array $viewData=[];

    public function run():void
    {
        //Is postBack es el que encapsula
        if($this->isPostBack()){
            $this->txtNombre = $_POST["txtNombre"] ?? "";//COALESCE
            if($this->txtResultado === ""){
                $this->txtResltado = "Error el nombre esta vacio";
            }
            $this->txtResultado = "Bienvenida, hola" . $this->txtNombre;

        }
        $this->preparaViewData();
        Renderer::render("productos/hello", $this->viewData);
    }

    private function preparaViewData(){
        $this->viewData["txtNombre"]=$this->txtNombre;
        $this->viewData["mensajeFinal"]=$this->txtResultado;
    }
}