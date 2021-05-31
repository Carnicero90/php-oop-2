
<?php
class Product
{
    public $name;
    public $producer;
    protected $id;
    public $price;
    public $onSale = false;

    function __construct($name, $producer, $price)
    {
        $this->name = $name;
        $this->producer = $producer;
        $this->price = $price;
    }
}
?>