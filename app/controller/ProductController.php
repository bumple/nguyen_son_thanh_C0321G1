<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\Product;


class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }


    public function index()
    {
        $products = $this->getAll();
        require_once "resource/view/list.php";
    }

    public function getAll()
    {
        $data = $this->productModel->getAll();
        $products = [];
        foreach ($data as $key => $datum) {
            $product = new Product($datum);
            $product->setId($datum['id']);
            $products[] = $product;
        }
        return $products;
    }

    public function delete()
    {
        $id = $_REQUEST['id'];

        $productModel = new ProductModel();
        $productModel->delete((int)$id);
        header("Location: index.php");
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            include_once "resource/view/add.php";
        } else {
            $errors = [];
            $fields = ['product_name', 'product_line', 'unit_price', 'amount', 'date_input', 'description'];
            foreach ($fields as $key => $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = "Không được để trống";
                }
            }
            if (empty($errors)) {
                $product_name = $_REQUEST['product_name'];
                $product_line = $_REQUEST['product_line'];
                $unit_price = $_REQUEST['unit_price'];
                $date_input = $_REQUEST['date_input'];
                $amount = $_REQUEST['amount'];
                $description = $_REQUEST['description'];

                $data = ['product_name' => $product_name,
                    'product_line' => $product_line,
                    'unit_price' => $unit_price,
                    'amount' => $amount,
                    'date_input' => $date_input,
                    'description' => $description
                ];
                $product = new Product($data);
                $this->productModel->add($product);
                header("Location: index.php");
            } else {
                include_once "resource/view/add.php";
            }
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $result = $this->productModel->getByid($_REQUEST['id']);
            $result = $result[0];
            include_once "resource/view/edit.php";
        } else {
            $product_name = $_REQUEST['product_name'];
            $product_line = $_REQUEST['product_line'];
            $unit_price = $_REQUEST['unit_price'];
            $date_input = $_REQUEST['date_input'];
            $amount = $_REQUEST['amount'];
            $description = $_REQUEST['description'];

            $data = ['product_name' => $product_name,
                'product_line' => $product_line,
                'unit_price' => $unit_price,
                'amount' => $amount,
                'date_input' => $date_input,
                'description' => $description
            ];

            $product = new Product($data);
            $product->setId($_REQUEST['id']);
            $productModel = new ProductModel();
            $productModel->edit($product);
            header("Location: index.php");
        }
    }

}