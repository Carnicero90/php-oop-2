
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
    public function productToAdd() {
        // determina se $this disponibile, ritornando un valore falsy se $this->inStock 
        // e' falsy (aka: sperabilmente === 0)
        if (!$this->inStock) {
            return false;
        }
        return $this;
    }
}
?>