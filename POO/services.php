<?php

$title = "Nos services";
require_once __DIR__ . "/layout/head.php";
require_once __DIR__ . "/classes/Car.php";
require_once __DIR__ . "/data/cars.php";

// 去重年份
$allYears = [];
foreach($cars as $car) {
    $allYears[] = $car->getYear();
}

$uniqueYear = array_unique($allYears);
// $uniqueYear = array_unique(array_map(fn (Car $c) :int => $c->getYear(), $cars));
sort($uniqueYear);

?>

<h2 class = "flex text-6xl font-bold justify-center mx-auto mb-20 "> <?php echo $title ?></h2>

<form action="search.php" class="text-xl font-semibold text-center mb-20">
    <label for="year">Choisir l'année de voiture:</label>
      <select name="year" id="year">
        <option value="">--Année--</option>
      
          <?php
            // parcourir les cars dans le tableau cars:
            foreach($uniqueYear as $year) {?>  
              <option value="<?php echo $year; ?>">
                <?php echo $year; ?>
              </option>
            <?php }?>
      </select>

      <input type="submit" class="text-white bg-[#ced4da] hover:bg-[#adb5bd]/80 focus:ring-4 focus:outline-none focus:ring-[#adb5bd]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#adb5bd]/80 dark:focus:ring-[#adb5bd]/40 mr-2 mb-2" value="Rechercher" />

 </form>

<main class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 place-content-center place-items-center"> 
    <?php
    foreach($cars as $car) { ?> 
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-[300px] object-cover m-0" src="<?php echo $car->getImg() ?>" alt=""/>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $car->getName(); ?></h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Moteur: " . $car->getEngine(); ?></p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Année de sortie: " . $car->getYear(); ?></p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Kilomètres parcourus: " . $car->getKm() . " km"; ?></p>
             
                <a href="car.php?id=<?php echo $car->getId() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Savoir plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    <?php } ?>
</main>

<?php
require_once __DIR__.'/layout/footer.php';
