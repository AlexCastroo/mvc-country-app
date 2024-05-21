<?php
require_once(__DIR__ . '/../Models/CartProduct.php');

class CartProductController extends CartProduct {

    public $cartProductModel;

    public function __construct(PDO $coneccion)
    {
        $this->cartProductModel = new CartProduct($coneccion);
    }

    public function home()
    {/*
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);
        $id = $body['id'];

        $product = $this->cartProductModel->getById($id);
        $product->addToCart($product);

        $res->success = true;
    */
        
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);
        $id = $body['id'];
        //var_dump($this->cartProductModel);
        $this->cartProductModel->addToCart($id);
        $res->success = true;
        $res->message = 'El registro fue eliminado correctamente';
        
    }

}