<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, 
ci saranno sicuramente dei prodotti da acquistare e 
degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio 
ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure 
diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, 
l'utente dello shop inserisce una carta di credito... $c = new CreditCard(..); $user->insertCreditCard($c);

BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

// require_once 'User.php';
require_once 'PremUser.php';

$pippo = new User('pippo', 'rossi', 61);
$pippo->setDiscount();
$pippo->getDiscount();
// var_dump($pippo);

$paperino = new User('paperino', 'gialli', 15);
$paperino->setDiscount();
$paperino->getDiscount();
// var_dump($paperino);

$pluto = new PremUser('pluto', 'verdi', 61, 'premium');
$pluto->setDiscount();
$pluto->getDiscount();
// var_dump($pluto);

$topolino = new PremUser('topolino', 'mouse', 25, 'premium');
$topolino->setDiscount();
$topolino->getDiscount();
$topolino->setDisc(18,50);
// var_dump($topolino);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libreria</title>
</head>
<body>

  <h4><?php echo $pippo->getFullName(); ?></h4>
  <h5><?php echo 'Hai uno sconto del: ' . $pippo->discount . '%'; ?></h5>
  <hr>
  <h4><?php echo $paperino->getFullName(); ?></h4>
  <h5><?php echo 'Hai uno sconto del: ' . $paperino->discount . '%'; ?></h5>
  <hr>
  <h4><?php echo $pluto->getFullName(); ?></h4>
  <h5><?php echo 'Hai uno sconto del: ' . $pluto->discount . '%'; ?></h5>
  <hr>
  <h4><?php echo $topolino->getFullName(); ?></h4>
  <h5><?php echo 'Hai uno sconto del: ' . $topolino->discount . '%'; ?></h5>
  <p><?php echo $topolino->getDisc(); ?></p>
  <hr>



  
</body>
</html>