<?php

// boucle parcourir les éléments.
$newArr = [12, 39, 20, 76, 99, 23, 5];
$newArrLength = count($newArr);

// a. for
// echo 'boucle for';
// for($i = 0; $i < $newArrLength; $i++) {
//     echo $newArr[$i] . '<br/>';
// }

echo '<hr/>';

// b. while
// echo 'while <br/>';
// $i = 0;
// while ($i < $newArrLength) {
//     echo $newArr[$i] . '<br/>';
//     $i++;
// }
// echo '<hr/>';


// c. do...while

// $i = 0;
// do {
//     echo $newArr[$i] . '<br/>';
//     $i++;
// } while($i < $newArrLength);
echo '<hr/>';


// d. foreach
echo 'foreach <br/>';

foreach($newArr as  $value) {
    echo $value . '<br/>';
}


$user = [
  'name' => "lucile",
  'age' => 20
];

foreach($user as $property => $value) {
    echo $property . '=>' . $value . '<br/>';
}
