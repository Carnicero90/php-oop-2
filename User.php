<?php
require_once __DIR__ . '/Common.php';
require_once __DIR__ . '/Payment.php';

class User extends MainClass
{
    protected $name;
    protected $lastname;
    protected $paymentInfo;
    protected $email;
    protected $premium = false;
    protected $address;
    protected $cart = [];
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
    function addToCart($product) {
        $this->cart[] = $product;
    }

}
?>

<?php ?>