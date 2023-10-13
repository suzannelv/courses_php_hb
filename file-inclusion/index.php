<?php
$title = "Accueil";
require_once "./components/head.php";
require_once "./data/products.php";
require_once "./components/navbar.php";
?>

<main class="prose prose-lg mx-auto">  
  <h1>List de produits</h1>  
    <h2 ><?php echo count($produits) . 'prduits trouvés' ?> </h2>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:mx-0">
      <?php foreach($produits as $produit) { ?>
        <?php require "./components/products/card-template-item.php" ?>
      <?php } ?>
    </div>
</main>

  <?php
  require_once "./components/footer.php";
