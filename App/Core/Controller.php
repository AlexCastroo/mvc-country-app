<?php
    class Controller{
        protected function render($path ,$parameters = [], $layout = ''){
            
            ob_start();
            require_once(__DIR__ . '/../Views/'.$path.'.view.php');

                $content = ob_get_clean();
            

            require_once('C:/xampp/htdocs/mvc-country-app/App/Views/layouts/'.$layout.'.layout.php');
        }
    }