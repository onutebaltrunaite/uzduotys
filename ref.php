<?php

$currentPage = [
    "title" => "functions",
    "page" => "home",
];

require('./functions.php');
require './inc/head.php';

?>

<!-- // puslapio contentas -->

<h1>REFERENCE</h1>
<pre>

<?php 





$var1 = 50;
function changeVal($var1)
{
    global $var1;
    $var1 = 100;
    echo 'change val: ' . $var1 . '<br>';
}
changeVal(20);
// val of var1
echo "var1: $var1";

// prilyginti reiksmes pagal adresa o ne pagal reiksme

$var2 = [2, 5];
// perkeliama pati reiksme is var2 i var3
// $var3 = $var2;

// var2 i var3 kad rodytu ta pacia vieta atmintyje
$var3 = &$var2;


$var3[0] = 10;
echo 'var2 <br>';
print_r($var2);
echo 'var3 <br>';
print_r($var3);

// parasyti funkcija kuri paima skaiciu masyva ir 
// padidina kiekviena jo reiksme 5

$myArr = [2, 4, 7, 12, -5];

// function addFive($arr){
//     print_r($arr);
//     $addedArr = [];
//     foreach($arr as $val){
//         $addedArr[] = $val + 5;
//     }
//     print_r($addedArr);
// }

//perdarytas

function addFive($arr)
{
    print_r($arr);

    foreach($arr as &$val){
        $val += 5;
    }
    print_r($arr);
}
// addFive($myArr);

addFive($myArr);


echo '<br><br><br><br>';
$myVar = 'Hi there';
//$anotherVal kintamajame issaugomas adresas kur 
// yra laikoma $myvar kintamojo vieta
$anotherVar = &$myVar;
$anotherVar = "See you later";
echo "myVar: $myVar <br>";
echo "anotherVar: $anotherVar";

// atskirti kintamojo sasaja nuoroda
unset($anotherVar);
echo "anotherVar po unset: $anotherVar";


?>
</pre>







<?php
require './inc/footer.php';
?>