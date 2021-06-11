<?php

include "vendor/autoload.php";

use App\Controller\ProductController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
$productController = new ProductController();
//if (!empty($_POST['search'])) {
//    $userController->search();
//}
switch ($page) {
    case 'product':
        switch ($action) {
            case 'delete':
                $productController->delete();
                break;
            case 'edit':
                $productController->edit();
                break;
            case 'add':
                $productController->add();
                break;
            case 'list':
                $productController->index();
                break;
        }
        break;
    default:
        $productController->index();
        break;
}
