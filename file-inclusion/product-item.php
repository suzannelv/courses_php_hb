<?php
require_once 'components/head.php';
require_once 'data/products.php';
?>

<main class="prose prose-lg mx-auto">
<h1>Fiche de produit</h1>
    <?php
    $id = intval($_GET['id']); // retourne 0 en cas de valeur incorrecte.

if($id === 0) {
    http_response_code(404);
    echo 'produit non trouvé';
    exit;
}

foreach($produits as $product) {
    if($product ['id'] === $id) {
        ?>   
        <h2><?php $product['name']?></h2>
        <div>
        <a href="#">
            <img class="rounded-t-lg" src="<?php echo $product['img'] ?>" alt="" />
            </a>
        </div>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo ' Prix: ' . $product['price']?>€ </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo ' Poids: ' . $product['weight']?>kg</p>

             <div type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Promo</div>

       <?php }
    }?>

</main>

<?php require_once "./components/footer.php";
