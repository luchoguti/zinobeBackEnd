<?php
require 'vendor/autoload.php';
use App\Controllers\Home;
use App\Controllers\User;

$home = new Home();
$user = new User();

if(isset($_REQUEST['action'])){
    switch ($_REQUEST['action']){
        case 'save_user':
            $user->store ();
        break;
        case 'new_user':
            $user->create_user_view ();
        break;
        default:
            $home->index ();
        break;
    }
}else{
    $home->index ();
}

