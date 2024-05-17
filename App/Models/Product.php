<?php
    class Product extends Orm {
        public function __construct(PDO $coneccion)
        {
            parent::__construct('id','productos', $coneccion);
        }
    }