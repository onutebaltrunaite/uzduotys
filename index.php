<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$currentPage = [
    "title" => "functions",
    "page" => "home",
];

//bando itraukti nurodyta faila ir jei nepavyksta, tesia toliau
// include_once('./functions.php');
// jei neras nurodyto failo, kodo vykdymas yra stabdonas
// require('./functions.php');

require('./functions.php');
require './inc/head.php';

?>

<h1>Functions</h1>
<?php

$firstRun = myFirstFunction('jphn', 'Doe');
echo $firstRun;

$secondRun = myFirstFunction('jphn', 'Doe', 'age: 50');
echo $secondRun;

// pirmoji uzduotis
printH3(1, 'du', true);

// antroji uzduotis
echo sand(10, 5);
echo '<br>';

// trecioji uzduotis
returnPositive(50);
echo '<br>';


// ketvirtoji uzduotis VIDURKIAI
echo '<h2>vidurkiai</h2>';
echo myAvg(4, 2, 6, 100);
echo '<br>';
echo myAvg(4, 2, 6);


$myArr = [2, 4, 7, 12, -5];
myAvgArr($myArr);


// itraukti footer
require('./inc/footer.php');



// HURDLE JUMP

$hurdles = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), ];
$jump_height = rand(5, 12);

function jumping($hurdle, $height){
    print_r($hurdle);
    print "aukstis: $height <br>";
    foreach($hurdle as $val){
        if($val < $height){
            print "true <br>";
        } else {
            print "false <br>";
        } 
    }

};
jumping($hurdles, $jump_height);


// Largest swap

$two_digit_num = rand(11, 99);

function numbering($number){
    print $number . "<br>";
    $item = strval($number);
    $opposite_number = number_format($item[1] . $item[0]);
    print $opposite_number . "<br>";
    if($opposite_number >= $number) {
        print "true <br>";
    } else {
        print "false <br>"; 
    }
}
numbering($two_digit_num);


// Sort array (using reference)

$array = [80, 29, 4, -95, -24, 85, 1, 2, 10, 50, 5];

function sorting(&$arr){
    asort($arr);
    print_r($arr);

    // sort($array);

}

sorting($array);

// Eliminate odd numbers (using reference) 

function generate_new_array($numb, $from, $to){
    $new_array = [];
    for ($x = 0; $x < $numb; $x++){
        $item = rand($from, $to);
        $new_array[$x] = $item;
    }
    return $new_array;
}

$new_array = generate_new_array(6, 1, 3000);
print_r($new_array); 




function eliminate_odd_numbers(&$arr){
    print_r($arr); 
    foreach($arr as $key => $number){
        if($number % 2 === 1){
            unset($arr[$key]);
            // array_splice($arr, $key, 1);
        }
    }   
    $arr = array_values($arr);
};
// & prie number foreache
// var_dumb($new_array);
eliminate_odd_numbers($new_array);
var_dump($new_array);


// Palindromes only (using reference)

$numbers_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];

function generate_polidromes(&$array){
    foreach($array as $key => $number){
        // print "pirmas skaicius: $number <br>";
        $reverse_number = number_format(strrev(strval($number)));
        // print "atvirkscias skaicius: $reverse_number <br>";
        if($number != $reverse_number){
            unset($array[$key]);
        }
    }
    return $array;
}

generate_polidromes($numbers_array);
var_dump($numbers_array);

// Alternating caps (using reference)

$stringas =  'mano batai buvo trys viens pasislepe gaidys' ;

function capital_letters(&$string){
    
}






?>









