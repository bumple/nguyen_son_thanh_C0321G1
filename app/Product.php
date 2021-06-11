<?php
namespace App;

class Product
{
    public $id;
    public $product_name;
    public $product_line;
    public $unit_price;
    public $amount;
    public $date_input;
    public $description;
    public function __construct($data)
    {
        $this->product_name = $data['product_name'];
        $this->product_line = $data['product_line'];
        $this->unit_price = $data['unit_price'];
        $this->amount = $data['amount'];
        $this->date_input = $data['date_input'];
        $this->description = $data['description'];
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}