<?php
require_once __DIR__ . '/Common.php';
class Payment extends MainClass {
    protected $card_number;
    protected $provider;
    protected $billing_address;
    protected $country;

    public static function getCardProvider($card) {
        // mockup di funzione per identificare il circuito di pagamento di $card.
        switch($card) {
            case 0:
                return 'VISA';
                break;
            case 1:
                return 'MASTERCARD';
                break;
            case 2:
                return 'BANCOMAT';
                break;
        }
    }
    function __construct($card_number, $billing_address, $country)
    {
        $this->card_number = $card_number;
        $this->billing_address = $billing_address;
        $this->country = $country;
        $this->provider = $this->getCardProvider($card_number);

    }
}
?>
<?php ?>
<?php ?>