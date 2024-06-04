<?php

class PageController extends Controller {

    public function __construct()
    {
        
    }

    public function home() 
    {
        $this->render('home', [], 'site');
    }

    public function tienda() 
    {
        $this->render('product', [], 'site');
    }

    public function login() 
    {
        $this->render('login', [], 'site');
    }

    public function registro() 
    {
        $this->render('registro', [], 'site');
    }

}