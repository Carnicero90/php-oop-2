<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';

$user = new User('filo', 'montani', 'calavera@mailmail.com');
$product = new Product('caffettiera', 'bialetti', 10);
?>
<?php ?>
<p>
    <?php
    var_dump($user->enumerateProps());
    $user->upgradeMembership(1,2);
    $user->addPaymentMethod(1,'Genova','Italia');
    var_dump($user);
    
    $user->addToCart($product);
    var_dump($user->readProp('cart'));
    ?>

</p>

<p><?php if($user->readProp('premium')) { ?>
Benvenuto, utente premium!

    <?php } else { ?>
    Utente qualunque
<?php } ?>

</p>