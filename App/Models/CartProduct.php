<?php
    class CartProduct extends Orm{

        public $productos = [];

        public function __construct(PDO $coneccion)
        {
            parent::__construct('id','productos', $coneccion);
        }

        public function addProductCart($id)
        {
            $producto = $this->getById($id);

            if (empty($_SESSION['cart'])) {
                $producto['cart_qty'] = 1;
                $producto['total'] = $producto['precio'] * $producto['cart_qty'];
                
                $_SESSION['cart'][] = $producto;
            } else {
                $productFound = false;
                foreach ($_SESSION['cart'] as &$product) {
                    if ($id == $product['id']) {
                        $product['cart_qty']++;
                        $product['total'] = $product['cart_qty'] * $product['precio'];
                        $product['total'] = round($product['total'],2);
                        $productFound = true;
                        break;
                    }
                }
                
                if (!$productFound) {
                    $producto['cart_qty'] = 1;
                    $producto['total'] = $producto['precio'];
                    $_SESSION['cart'][] = $producto;
                }
                $_SESSION['sub_total'] += $producto['precio'];
            }
            $data = $_SESSION['cart'];
            //Depuracion => print_r($data);
        }

    }