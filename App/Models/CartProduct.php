<?php
    class CartProduct extends Orm{

        public $productos = [];
        public $quantity;
        public $sub_total;

        public function __construct(PDO $coneccion)
        {
            parent::__construct('id','productos', $coneccion);
        }
        /*
        public function __construct($productos = [], $quantity = 0, $sub_total = 0.0) {
            $this->productos = [];
            $this->quantity = $quantity;
            $this->sub_total = $sub_total;
        }
        */
    
        public function jsonSerialize() {
            return [
                'productos' => $this->productos = [],
                'quantity' => $this->quantity,
                'sub_total' => $this->sub_total,
            ];
        }
        public function addToCart($id)
        {
            
            //$productos = $this->getById($id);
            $producto = $this->getById($id);
            //echo json_encode($producto);
            $this->productos = $producto;
            echo json_encode($this->productos);

        }
        public function getQuantity()
        {
            return $this->quantity;
        }
    }