<?php
    class CartProduct extends Orm{

        public $productos = [];

        public function __construct(PDO $coneccion)
        {
            parent::__construct('id','productos', $coneccion);
        }


        public function addProductCart($id)
        {
            //print_r($_SESSION['cart']);
            $producto = $this->getById($id);
            $_SESSION['cart'][] = $producto;
            //print_r($_SESSION['cart']);
        }

    }