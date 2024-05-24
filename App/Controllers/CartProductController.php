<?php
require_once(__DIR__ . '/../Models/CartProduct.php');

class CartProductController extends Controller {

    public $cartProductModel;
    
    public function __construct(PDO $coneccion)
    {   
        session_start();
        $this->cartProductModel = new CartProduct($coneccion);
        
        if (!isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = array();
        }

    }

    public function home()
    {
        print_r('acceso /home:');        
    }

    public function exit()
    {
        session_destroy();
        print_r('Sesion destruida');
    }

    public function addCart()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);
        $id = $body['id'];
        
        $this->cartProductModel->addProductCart($id);
        $data = $_SESSION['cart'];
        
        header('Content-Type: application/json');
        $res->success = true;
        $res->result = $data;
        $res->message = 'Producto añadido al carrito';
        echo json_encode($res);
    }

}