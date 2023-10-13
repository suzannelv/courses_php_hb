<?php


// require_once "classes/Product.php";

// $product=new Product();
// accéder à la valeur qui se trouve dans la propriété discount
// impossible d'accéder à des propiétés privées
// $product->name = "item";
// $product->priceVatFree = 12.34;
// $product->discount = true;
// var_dump($product->name);
// var_dump($product->priceVatFree );
// var_dump($product->discount);

// $product -> setPriceVatFree(50);
// var_dump($product);

// $product->getName();

// ----------------user-------------------
require_once "classes/User.php";

$user1 = new User("Joseph", "Linnie", new DateTime("1990-09-09"), false);
// interface fluid: appels en chaîne
// $user1->setName('Hirs')
//       ->setFirstname('Aya')
//       ->setBirthDate(new DateTime("1990-09-09"));

// echo $user1->getFullName();
// var_dump($user1);

// ----avec __construct

echo $user1->getFullName(User::FIRSTNAME_THEN_NAME);
echo $user1->getBirthDate()->format('Y/m/d');
