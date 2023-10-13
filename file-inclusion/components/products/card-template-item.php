<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="h-auto max-w-full rounded-lg m-0" src="<?php echo $produit['img'] ?>" alt="" />
    </a>

    <div class="p-0" >
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo 'Produit : ' . $produit['name'] . '<br>' ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo ' Prix: ' . $produit['price']?>€ </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo ' Poids: ' . $produit['weight']?>kg</p>
        <?php if($produit['discount']) {?>
      <div class="mb-2">
        <span class="bg-warning rounded py-1 px-3 ">promo</span>
      </div>
      <?php } ?> 

      <a href="product-item.php?id=<?php echo $produit['id']; ?>" type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Voir le produit</a>
    </div>
</div>



