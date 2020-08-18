<?php


namespace App\Controllers;
use App\Views;

class Home extends Views
{
    public function index(){
        echo $this->getBlade ()->render ('index',['name'=>'luis torres']);
    }
}