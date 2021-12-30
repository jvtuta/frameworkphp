<?php
namespace FrameworkJvtuta\Init;

abstract class Router {
    private $name, $urlPath, $controller;

    /**
     * Rota deve conter o path, controlador e o nome
     * @param String $urlPath ex: '/'
     * @param Class Namespace do controlador e o controlador ex \\App\\Controllers\\API\\Index
     * @param String Nome da rota
     * @param 
     * 
     */

    public function __construct($urlPath, $controller, $name, $method) {
        $this->urlPath = $urlPath;     
        $this->controller = $controller;
        $this->name = $name;
        $this->method = $method;
    }

    public function getName() {
        return $name;
    }
    /**
     * Inicializador de rotas
     * @return Void
     */

    public function run() {
        
        new $this->controller();
        return;
    }   

}

?>