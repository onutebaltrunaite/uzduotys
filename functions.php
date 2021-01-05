
<!-- // funkcijos php -->

<?php
// susikurti pirma funkcija
// funkcijos aprasymas
function myFirstFunction($var1, $var2, $varDefault = 'bet kas, kas mum reikia')
{
    // funkcijos body
    $rez = "$var1, $var2, $varDefault <br>";
    return $rez;
}
// panaudoti funkcija arba iskviesti

// Sukurti funkciją, kuri ima 3 parametrus, ir atspausdina juos <h3> HTML tag‘e.

function printH3($one, $two, $three){
    echo "<h3>$one</h3>";
    echo "<h3>$two</h3>";
    echo "<h3>$three</h3>";
}

// Sukurti funkciją, kuri ima 2 parametrus, juos sudaugina, ir grąžina rezultatą į iškvietimo vietą.

function sand($num1, $num2){
    $result = $num1 * $num2;
    return $result;
}

//Sukurti funkciją, kuri ima 1 parametrą ir grąžiną teigiamą reikšmę. (Patikrinti tipą).
function returnPositive($numb){
// patikrinti tipa
if(is_int($numb)){
    echo "parameter is int";
    return abs($numb);
} else {
    echo 'is not int';
}
}

// funkcija su default reiksme
// sukurti funkcija kuri paima 3-4 paramterus ir grazineja ju vidurki

function myAvg($num1, $num2, $num3, $num4 = 0){
    $length = 4;
    if($num4 === 0){
        $length = 3;
    }
    $sum = $num1 + $num2 + $num3 + $num4;
    $avg = $sum / $length;
    return $avg;

}

// masyvu argumentu pavyzdis
// atspausdinti paduoto masyvo vidurki

function myAvgArr($arr){
    $leng = count($arr);
    $sum = 0;
    foreach($arr as $val){
        $sum += $val;
    }
    $avg = $sum / $leng;
    echo '<pre>';
    print_r($arr);
    echo '<pre>';

    echo 'sio masyvo ilgis yra ' . $leng . '<br>';
    echo 'sio masyvo sumas yra ' . $sum . '<br>';
    echo 'sio masyvo vidurkis yra ' . $avg . '<br>';
    
}


?>