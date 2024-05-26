<?php
require_once(__DIR__ . '/../Models/Product.php');
class ProductController extends Controller {

    private $productModel;


    public function __construct(PDO $coneccion)
    {
        $this->productModel = new Product($coneccion);
    }

    public function home()
    {   
        $this->render('product',[],'site');
        //$this->render('cartProduct');
    }

    public function create()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);

        $this->productModel->insert([
            'id' => $body['id'],
            'nombre' => $body['nombre'],
            'categoria' => $body['categoria'],
            'stock' => $body['stock'],
            'precio' => $body['precio'],
        ]);

        $res->success = true;
        $res->message = "El registro fue insertado correctamente";

        //echo json_encode($res);
        $this->home();
    }

    public function new()
    {
        $this->render('productNew', [], 'site');
    }


    public function delete()
    {
        $res = new Result();
        $postData = file_get_contents('php://input');
        $body = json_decode($postData, true);

        $this->productModel->deleteById($body['id']);

        $res->success = true;
        $res->message = 'El registro fue eliminado correctamente';
        $this->home();
    }

    public function catalogo()
    {
        $res = new Result();
        $productos = $this->productModel->getAll();

        $res->success = true;
        $res->result = $productos;
        echo json_encode($res);
    }

    public function increment()
    {
        $id = $_GET['id'];

        var_dump($this->productModel);
        
        $product = $this->productModel->getById($id);
        $new_stock = $product['stock'] + 1;

        $this->productModel->updateById($id, ['stock' => $new_stock]);
        $this->home();
    }

    public function decrement()
    {
        $id = $_GET['id'];

        var_dump($this->productModel);
        
        $product = $this->productModel->getById($id);
        $new_stock = $product['stock'] - 1;

        $this->productModel->updateById($id, ['stock' => $new_stock]);
        $this->home();
    }

}