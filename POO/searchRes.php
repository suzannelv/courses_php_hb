<?php

require_once __DIR__ . "/layout/head.php";
require_once __DIR__ . "/data/cars.php";
require_once __DIR__ . "/functions/findCar.php";

if(!isset($_GET['q'])) {
    redirect("index.php");
}

$searchRes=$_GET['q'];
$result = findCar($cars, $searchRes);

?>


<main class="grid place-content-center">
  <h2 class="flex text-6xl font-bold justify-center mx-auto mb-20">Résultats de votre recherche</h2>

  <?php

    foreach($result as $item) { ?>
      
    <div href="#" class="bg-white border m-5 border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover h-[350px] w-full" src="<?php echo $item->getImg() ?>" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $item->getName() ?></h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Moteur: " . $item->getEngine() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Année de sortie: " . $item->getYear() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Kilomètres parcourus: " . $item->getKm() ?></p>
        </div>
    </div>

    <?php } ?>
</main>







<?php
require_once __DIR__ . "/layout/foot.php";
require_once __DIR__ . "/layout/footer.php";
