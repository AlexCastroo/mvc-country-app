<?php 

class Controller{
    protected function render($path, $parameters = [], $layout = '')
    {
        ob_start(); //Inicializamos el buffer
        require_once (__DIR__ . '/../Views/'.$path.'.view.php');
        $content = ob_get_clean(); // Guardamos el contenido del buffer

        require_once (__DIR__ . '/../Views/layouts/'.$layout.'.layout.php');
    }
}