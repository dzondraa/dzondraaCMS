<?php
session_start();
require_once "app/Config/autoload.php";
require "app/Config/database.php";

// require_once "app/Config/DB.php";

// $db = new DB(); // poziva se AUTOLOAD

// require_once "app/Models/Uloga.php";
use App\Config\DB;
use App\Models\Uloga;
$uloga = new Uloga(DB::instance());
// var_dump($uloga->getAll());

use App\Controllers\LoginController;
use App\Controllers\FilmoviController;


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case "login":
            $login = new LoginController();
            $login->login($_POST);
            break;
    }
} else {
    require_once "app/Views/header.php";
    require_once "app/Views/footer.php";
}




