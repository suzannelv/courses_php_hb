<?php

require_once "classes/Car.php";
require_once "data/cars.php";
require_once "functions/findCarByYear.php";
require_once "layout/head.php";

if (!isset($_GET['year'])) {
    redirect('index.php');
}

['year'=>$search] = $_GET;
$cars = new CarsFn($cars);
$carsFound = $cars->findByYear($search);

// solution de Lucas
if (isset($_GET['year'])) {
    $year= intval($_GET['year']);
    $results = array_filter($cars, fn (Car $car) => $year === $car->getYear());

} else {
    $results = $cars;
}
?>


<h2 class="flex text-6xl font-bold justify-center mx-auto mb-20">Voitures de l'année <?php echo $search; ?></h2>

<main class="grid place-content-center ">
    
<a href="services.php" type="button" class="py-2.5 px-5 mr-2 mb-2 w-[100px] text-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">< Retour</a> 
<?php

foreach($carsFound as $carItem) { ?>
    <div href="#" class="bg-white border m-5 border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover h-[350px] w-full" src="<?php echo $carItem->getImg() ?>" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $carItem->getName() ?></h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Moteur: " . $carItem->getEngine() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Année de sortie: " . $carItem->getYear() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo "Kilomètres parcourus: " . $carItem->getKm() ?></p>
        </div>
    </div>
  <?php } ?>
</main>


