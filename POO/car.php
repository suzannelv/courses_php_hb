<?php
require_once "./layout/head.php";
require_once "./data/cars.php";

if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    http_response_code(404);
    echo "Page non trouvé";
    exit;
};

$id = intval($_GET['id']);

// map les $cars vers $car->getId()
// $cars = [Car, Car, Car...];
// Après map : [1, 2, 3...];
$carIds = array_map(fn (Car $car): int => $car->getId(), $cars);
$key = array_search($id, $carIds);

if($key===false) {
    http_response_code(404);
    require_once "pageNotfound.php";
    exit;
}

$carItem = $cars[$key];
?> 



<!-- car info -->





<?php
require_once "./layout/foot.php";
require_once "./layout/footer.php";
