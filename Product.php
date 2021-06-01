
<?php
class Product
{
    public $name;
    public $brand;
    protected $id;
    public $price;
    public $onSale = false;
    public $inStock;

    function __construct($name, $brand, $price, $inStock)
    {
        $this->name = $name;
        $this->inStock = $inStock;
        $this->brand = $brand;
        $this->price = $price;
    }

}
?>