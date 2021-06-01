<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Product.php';

$user = new User('Filo', 'Montani', 'calavera@mailmail.com');
$product1 = new Product('caffettiera', 'bialetti', 10, 4);
$product2 = new Product('computer', 'Dell', 400, 0);
?>
<?php ?>
    <?php
    $user->upgradeMembership(1, 2);
    $user->addToCart($product1, $product1->inStock);
    $user->addToCart($product2, $product2->inStock);


    $user->addPaymentMethod(1, 'Genova', 'Italia');

    var_dump($user->buy())
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Dati Utente</h2>
    <ul>

        <li>Nome utente: <?php echo $user->readProp('name') . ' ' . $user->readProp('lastname') ?></li>
        <li>Email: <?php echo $user->readProp('email') ?></li>

    </ul>
    <details>
        <summary>
            Dettagli utente
        </summary>
        <ul>

            <li>Utente premium: <?php
                                $isPremium = $user->readProp('premium') ? 'yep' : 'nope';
                                echo $isPremium ?></li>
        </ul>
    </details>
    <h2>Il Tuo carrello:</h2>
    <ul>
        <?php foreach ($user->cart as $item) { ?>

            <li>
                <h3>Prodotto</h3>
                <ul>
                    <li> <?php echo $item->name ?>
                    </li>
                    <li> <?php echo $item->brand ?></li>
                    <li><?php echo $item->price ?>$</li>
                </ul>
                <?php  ?>

            </li>
        <?php } ?>

    </ul>

</body>

</html>