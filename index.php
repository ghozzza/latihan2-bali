<?php
    echo"selamat belajar PHP Dasar";
    $a = 5;
    $b = 5;

    $tambah = $a + $b;
    $kurang = $a - $b;
    $kali = $a * $b;
    $bagi = $a / $b;
    $modulo = 5 % 2;
    $boolean = (5 < 2) ? "benerr" : "salah bos";

    echo "<br>";
    echo "penjumlahan : ". $a ."+". $b ." = ". $a+$b;
    echo "<br>";
    echo "penjumlahan : ". $a ."+". $b ." = ". $tambah;
    echo "<br>";
    echo "penjumlahan : ". $a ."+". $b ." = ". $kurang;
    echo "<br>";
    echo "penjumlahan : ". $a ."+". $b ." = ". $kali;
    echo "<br>";
    echo "penjumlahan : ". $a ."+". $b ." = ". $bagi;
    echo "<br>";
    echo "Penjumlahan : 5 + 5 = ". 5+5;
    echo "<br>";
    echo "modulo : 5 % 2 = ". $modulo;
    echo "<br>";
    echo "boolean : 5 < 2 = ". $boolean;

    echo "<br>";
    echo "=====================";
    echo "<br>";

    $p = 10;
    $t = 5;
    $segitiga = 1/2 * $p * $t;

    $r = 7;
    $lingkaran = 22/7 * $r * $r;
    
    $l = 6;
    $persegip = $p * $l;

    echo "Luas Segitiga <br> panjang = ". $p . "<br>" . "tinggi = " . $t . "<br>" . "luas = " . $segitiga . "<br><br>";
    echo "Luas lingkaran <br> jari-jari = ". $r . "<br>" . "luas = " . $lingkaran . "<br> <br>";
    echo "Luas persegi panjang <br> panjang = ". $p . "<br>" . "lebar = " . $l . "<br>" . "luas = " . $persegip . "<br><br>";

/////////////////////////////////////////////////////////

    $x = 2;
    $y = 4;

    if($a % 2) {
        echo "nilai a merupakan genap";
    }
    else{
        echo "nilai a merupakan nilai ganjil";
    }
    
    echo "<br><br><br>";

    $input = 80;

    if ($input > 75){
        echo "selamat kamu lulus <br>";
        if ($input >= 86 && $input <= 100) {
            echo "nilai kamu A";
        }
        else if ($input >= 76 && $input <= 85) {
            echo "nilai kamu B";
        }
        else if ($input >= 51 && $input <= 75) {
            echo "nilai kamu C";
        }
        else if ($input >= 31 && $input <= 50) {
            echo "nilai kamu D";
        }
        else if ($input >= 0 && $input <= 30) {
            echo "nilai kamu E";
        }
        else {
            echo "Error";
        }
    }
    else{
        echo "maad kamu tidak lulus";
        if ($input >= 86 && $input <= 100) {
            echo "nilai kamu A";
        }
        else if ($input >= 76 && $input <= 85) {
            echo "nilai kamu B";
        }
        else if ($input >= 51 && $input <= 75) {
            echo "nilai kamu C";
        }
        else if ($input >= 31 && $input <= 50) {
            echo "nilai kamu D";
        }
        else if ($input >= 0 && $input <= 30) {
            echo "nilai kamu E";
        }
        else {
            echo "Error";
        }
    }
?>