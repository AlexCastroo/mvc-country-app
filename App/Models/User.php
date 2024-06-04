<?php


class User extends Orm {

    public function __construct(PDO $coneccion)
    {
            parent::__construct('id','usuarios', $coneccion);
    }
}