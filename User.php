<?php
require_once __DIR__ . '/Common.php';
require_once __DIR__ . '/Payment.php';
require_once __DIR__ . '/Product.php';


class User extends MainClass
{
    protected $name;
    protected $lastname;
    protected $paymentInfo = false;
    protected $email;
    protected $premium = false;
    protected $address;
    public $cart = [];
    function __construct($name, $lastname, $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->reserved = ['paymentInfo', 'reserved'];
    }
    function shippingFare () {
        // pass
    }
    function upgradeMembership($start, $end) {
        // per ora do solo data inizio e data fine premium membership, per cui User->premium = false se non e' premium
        // e User->premium = array con data inizio e data fine premium membership (qua non c'e alcuna verifica/casting del tipo, in teoria poi dovrebbero essere due date); se l'utente e' premium.
        // Poi valuto magari di fare un oggetto ad hoc per User->premium.
        $this->premium = [$start, $end];
    }
    function addPaymentMethod($card_number, $billing_address, $country) {
        $this->paymentInfo = new Payment($card_number, $billing_address, $country);
    }
    function addToCart($product ,$condition=true) {
        // aggiunge prodotto a carrello, se prodotto non ha valore falsy
        if ($product) {
            $this->cart[] = $product;
        }
    }
    function buy() {
        if (!$this->paymentInfo) {
            return false;
        }
        $total = 0;
        foreach($this->cart as $item) {
            $total += $item->price;
        }
        return $total;
    }

}
?>

<?php ?>