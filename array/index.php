<?php

$array = [];
$note = [66, 79, 46, 9, 64, 18, 44];

// 1. ajouter un élément dans un tableau vide
$array[] = "Clyde";

// 2. afficher le premier élément
echo $note[0];
array_unshift($array, 'aaa', 'bbb');
var_dump($array);

// 3. nombre total dans un tableau
$notesLength = count($note);
echo "il y a $notesLength notes";

// 4. tableau associatif(关联数组)
$user = [
  'name' => 'John',
  'age' => 23,
];

var_dump($user);
echo 'bienvenue ' . $user['name'];


// 5. opérateur sur les tableaux
//       0, 1, 2
$arr1 = [1, 2, 3];
//       0, 1, 2, 3
$arr2 = [4, 5, 6, 7];

/**
 * 在PHP中，当两个数组具有相同的键时，使用加法运算符（+）将它们合并时，只会保留第一个数组的值，而不会将相同键的值相加。$arr3 将包含 $arr1 中的值，而不会包含 $arr2 中的值，因为它们有相同的键。
 */
$arr3 = $arr1 + $arr2;
var_dump($arr3);


// 6. tableau déstruction
[$one, $two] = $arr1;
var_dump($one, $two);


// affhicher que le troixième élément
// méthode 1:
[,,$three] = $arr1;
var_dump($three);

// mérthode 2:
[2 => $threeEl] = $arr1;
var_dump($threeEl);


// 7. spread operator
// 可以省略扩展运算符，不会改变原来的数组
$noteCopy = [...$note];

var_dump($noteCopy);

$noteCopy[] = 100;
var_dump($noteCopy, $note);

// 在数组前面插入元素
$notes = [99, ...$note];
var_dump($notes);


// fusion les tableau
$spreadFusion = [...$arr1, ...$arr2];
var_dump($spreadFusion);



// boucle parcourir les éléments.
$newArr = [12, 39, 20, 76, 99, 23, 5];

// a. for
// echo 'boucle for';
// for($i = 0; $i < count($newArr); $i++) {
//     echo $newArr[$i] . '<br/>';
// }

echo '<hr/>';

// b. while
// echo 'while <br/>';
// $i = 0;
// while ($i < count($newArr)) {
//     echo $newArr[$i] . '<br/>';
//     $i++;
// }
// echo '<hr/>';


// c. do...while

// $i = 0;
// do {
//     echo $newArr[$i] . '<br/>';
//     $i++;
// } while($i < count($newArr));
echo '<hr/>';


// d. foreach
echo 'foreach <br/>';

foreach($newArr as $key => $value) {
    echo $key. '=>' . $value . '<br/>';
}
