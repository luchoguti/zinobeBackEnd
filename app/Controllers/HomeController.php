<?php


namespace App\Controllers;

use Config\Views;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends Views
{

    /**
     *
     */
    public function init()
    {
        echo $this->getBlade ()->render ('home');
    }
}