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
            $_SESSION['sub_total'] = 0;
        }

    }

    public function home()
    {  
        //echo json_encode($_SESSION['cart']);
        $this->render('cartProduct', [], 'site');  
    }

    public function carrito()
    {
        $res = new Result();

        header('Content-Type: application/json');
        $res->success = true;
        $res->result['productos'] = $_SESSION['cart'];
        $res->result['sub_total'] = round($_SESSION['sub_total'], 2);
        $res->message = 'Producto añadido al carrito';
        echo json_encode($res);
    }

    public function exit()
    {
        session_destroy();
        $this->render('login', [], 'site');
    }

    public function addCart()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);
        $id = $body['id'];

        $this->cartProductModel->addProductCart($id);

        header('Content-Type: application/json');
        $res->success = true;
        $res->result['productos'] = $_SESSION['cart'];
        $res->result['sub_total'] = round($_SESSION['sub_total'], 2);
        $res->message = 'Producto añadido al carrito';
        echo json_encode($res);
    }

    public function restCart()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);
        $id = $body['id'];
    
        $new_cart = [];
        $sub_total = 0;
    
        foreach ($_SESSION['cart'] as $product) {
            if ($product['id'] == $id) {
                // Disminuir la cantidad del producto
                $product['cart_qty']--;
    
                // No añadir el producto si la cantidad es cero o menos
                if ($product['cart_qty'] > 0) {
                    $product['total'] = $product['cart_qty'] * $product['precio'];
                    $new_cart[] = $product;
                    $sub_total += $product['total'];
                }
            } else {
                // Mantener el producto sin cambios
                $new_cart[] = $product;
                $sub_total += $product['total'];
            }
        }
    
        $_SESSION['cart'] = $new_cart;
        $_SESSION['sub_total'] = $sub_total;
    
        header('Content-Type: application/json');
    
        $res->success = true;
        $res->result['productos'] = $_SESSION['cart'];
        $res->result['sub_total'] = round($_SESSION['sub_total'], 2);
        $res->message = 'Producto restado al carrito';
        echo json_encode($res);
    }
    

}