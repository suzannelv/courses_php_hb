<?php

$operator = '<hr/>';
// 1. Fonction retournant l'entier le plus petit parmi 3

// solution 1:
function min_num(int $a, int $b, int $c): int
{
    $min = $a < $b ?
           ($a < $c ? $a : $c) :
           ($b < $c ? $b : $c);

    return $min;
}

echo min_num(3, 1, 9);

echo $operator;

// solution 2:
function getMin(int $n1, int $n2, int $n3): int
{
    return min($n1, $n2, $n3);
}

echo getMin(32, 90, 8);
echo $operator;

//-----------------------------------------------------------------

// 2. Fonction retournant la partie entière d'un réel

// function getIntPart(float $num): int
// {
//     $integer = floor($num);
//     return $integer;

// }

// echo getIntPart(3.23);

function getIntPart(float $nb): int
{
    $intPart = (int) $nb; // un cast
    return $intPart;
}
echo 'getIntPart:' . getIntPart(7.42);


echo $operator;

// ---------------------------------------------------------------
// 3. Réécriture de la fonction factorielle en utilisant la récursivité(递归函数)
function facto(int $num)
{
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * facto($num - 1);

    }
};

echo 'factoriel: ' . facto(3);
echo $operator;

// ---------------------------------------------------------
// 4. Réécriture de la fonction puissance en utilisant la récursivité

function puissance($n1, $pow)
{
    if($pow == 0) {
        return 1;
    };

    if($pow == 1) {
        return $n1;
    }

    return $n1 * puissance($n1, $pow - 1);
}

echo puissance(5, 3);
echo $operator;
// ---------------------------------------------------------------------------
// 5. Fibonacci en version récursive
function fib(int $n): int
{
    if($n < 0) {
        echo '0 n\'est pas valide';
        return 0;
    };

    if ($n === 0 || $n === 1) {
        return 1;
    }

    $res = fib($n - 2) + fib($n - 1);
    return $res;

}

echo fib(6);
echo $operator;

// ------------------------------------------------------------------------
// 6. Calculer la somme des chiffres d'un nombre, d'abord avec des enchaînements répétitifs (Tant que..., Pour..., etc...), puis en version récursive.
function getDigitSum(int $nb): int
{
    if($nb < 10) {
        return $nb;
    }

    $digitAdd = $nb % 10; //isoler le dernier chiffre
    return $digitAdd + getDigitSum(getIntPart($nb / 10));
}

echo 'get Digit somme:' . getDigitSum(288);
echo $operator;

// ------------------------------------------------------------------------
// 7.Écrire une fonction appliquer_html qui prend en paramètre une chaîne de caractères et un style à appliquer à cette chaîne. En retour, la fonction renverra la chaîne de caractères entourée de la balise HTML appropriée.

// declare(strict_type=1);//打开严格模式，检测数据类型
const BOLD = 0;
const ITALIC = 1;
const UNDERLINE = 2;
const AUTHORIZED_STYLE = [
    BOLD => "strong",
    ITALIC => "em",
    UNDERLINE => "u"];

function apply_html(string $text, int $style): string
{
    // méthode 1:
    // if(!in_array($style, AUTHORIZED_STYLE)) {
    //     return $text;
    // }

    // $htmlTag = match($style) {
    //     BOLD => "strong",
    //     ITALIC => "em",
    //     UNDERLINE => "u"
    // };


    // méthode 2:
    if(!array_key_exists($style, AUTHORIZED_STYLE)) {
        return $text;
    }

    $htmlTag = AUTHORIZED_STYLE[$style];

    return "<$htmlTag>$text</$htmlTag>";



    // switch ($style) {
    //     case BOLD:
    //         return "<strong>$text</strong>";
    //     case ITALIC:
    //         return "<em>$text</em>";
    //     case UNDERLINE:
    //         return "<u>$text</u>";
    //     default:
    //         return $text;
    // }
}

echo 'apply html: ' . apply_html(" Bonjour", UNDERLINE);
echo $operator;

// ---------------------------------------------------------------------
echo  "exercice 8: À partir d'une longueur n passée en entrée, remplir puis retourner un tableau d'entiers numéroté de 1 à n";
echo "<br/>";

require_once "functions.php";
// validation à faire  sur site:
//  -Existence en tant que paramètre GET
//  -Format correct (interger)

// vérifier dans un premier temps la situation opposée de celle voulu
if(!isset($_GET['size']) || !is_numeric($_GET['size'])) {
    // interrompre l'exécution du scipt : sortir prématurément
    http_response_code(400);
    echo "valeur incorrect";
    exit;
}
// $size = (int) $_GET['size'];
$size = intval($_GET['size']);
$tab = fillArray($size);
var_dump($tab) ;

echo $operator;
// ------------------
// 9. filter les notes
$notes = [12, 19, 15, 20, 10, 7, 8, 18, 19];
const AVG = 10;

// function isValid(int $note): bool
// {
//     return $note >= 10;
// }
// $validNotes = array_filter($notes, "isValid");
// var_dump($validNotes);

// use ($avg) 允许访问上层作用域变量

// function anonyme
// $validNotes = array_filter($notes, function (int $note) {
//     return $note >= AVG;
// });
// var_dump($notes, $validNotes);


// function fléché
// 如果箭头函数访问全局变量，不需要使用use

$validNotes = array_filter($notes, fn (int $note): bool => $note >= AVG);
var_dump($notes, $validNotes);


// spread operator
$tab = [32, 90, 43, 9, 78, 36, 66];
function add(array $array, int ...$elements): array
{
    return [...$array, ...$elements];
}

$myNewTab = add($tab, 23, 1, 30, 8);
var_dump($myNewTab);

$tab2 = [9, 9, 9];

$otherNewTab = add($myNewTab, ...$tab2);
var_dump($otherNewTab);
