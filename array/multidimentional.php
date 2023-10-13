<?php
// produit: name, price, weight, discount(bool),

$produits = [
    [
     'name' => 'Natural',
     'price' => 4002.72,
     'weight' => 45,
     'discount' => false

   ],
    [
     'name' => 'Either',
     'price' => 1728.08,
     'weight' => 93,
     'discount' => false

   ],
    [
     'name' => 'Did',
     'price' => 1992.07,
     'weight' => 52,
     'discount' => false

   ],
    [
     'name' => 'Mouth',
     'price' => "2083.45",
     'weight' => 35,
     'discount' => false

   ],
    [
     'name' => 'Large',
     'price' => 4853.5,
     'weight' => 42,
     'discount' => false

   ],

  [
     'name' => 'Keybord',
     'price' => 70,
     'weight' => '0.6kg',
     'discount' => true
   ],

    [
     'name' => 'Mouse',
     'price' => 20,
     'weight' => 23,
     'discount' => true
   ]

   ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <h1 class="text-center">List de produits</h1>  
  <h2 class="text-center"><?php echo count($produits) . 'prduits trouvés' ?> </h2>
  <div class="d-flex justify-content-center flex-wrap">
    <?php
       foreach($produits as $item) {
           echo '<div class="card text-center" style="width: 18rem;">';
           echo '<div class="card-body">';
           echo '<h5 class="card-title">' . $item['name'] . '</h5>';
           echo '<p class="card-text">'. $item['price'] . '</p>';
           echo '<p class="card-text">'. $item['weight'] . '</p>';
           echo '<a href="#" class="btn btn-primary">' . 'Réduction: ' . ($item['discount'] ? 'Oui' : 'Non') . '</a>';
           echo '</div>';
           echo '</div>';
       }

?>


</div>


<div class="">
  <?php foreach($produits as $produit) { ?>
      <div class="border g-5">
        <h6><?php echo $produit['name'] . '<br>' ?></h6>
        <p><?php echo $produit['price']?>€ </p>
        <?php if($produit['discount']) {?>
          <div>
            <span class="bg-success rounded">promo</span>
          </div>
        <?php } ?>
      
      </div>
    <?php } ?>
</div>

</body>
</html>