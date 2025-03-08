<?php

$domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
$domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
$domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
$domba = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
$domba = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];

/**
 * 2. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.
 * 3. The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.
 * Task
 * Given a year, return the century it is in.
 * 4. Budi ingin membuat fungsi untuk membedakan antara angka genap dan ganjil dalam sebuah array dengan bahasa PHP, bisakah kamu membantunya?
 * 5. Buat kumpulan data nama nama array kemudian buatlah 
 * fungsi yang menerima string untuk menambahkan carachter 
 * otomatis pada setiap array
 * 
 * Array =  [Nama1,Nama2,] | [10.000,20.000] 
 * Array = [Pak Nama1 -kun,Pak Nama2 -kun] | [Rp.10.000,00-,Rp.20.000,00-]
 */

// 2. Check if a given positive number is a multiple of 3 or a multiple of 7
function isMultipleOf3Or7($number) {
    return $number > 0 && ($number % 3 == 0 || $number % 7 == 0);
}

$number1 = [3, 12, 43, 21, 90, 120, 1330];
$number2 = [321, 64, 3, 24, 80, 34, 60];
$number3 = [99, 89, 45, 21, 75, 23, 55];
$number4 = [40, 12, 41992, 21, 908493, 13420, 1330];


// 3. Given a year, return the century it is in
function getCentury($year) {
    return ceil($year / 100);
}

$abad1 = [1000, 2309, 2341, 1001, 2022];
$abad2 = [210, 2031, 9201, 3209, 2432];
$abad3 = [909, 122, 3221, 1401, 2222];
$abad4 = [230, 2309, 2341, 12, 20022];
$abad5 = [100, 2, 43, 56, 9098];

// 4. Function to differentiate between even and odd numbers in an array
function differentiateEvenOdd($array) {
    $even = [];
    $odd = [];
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $even[] = $number;
        } else {
            $odd[] = $number;
        }
    }
    return ['even' => $even, 'odd' => $odd];
}

$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [23, 53532, 625265, 1230984, 102];
$numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
$numbers4 = [4902,902, 32, 31, 78, 424];
$numbers5 = [8932, 971902, 2179879, 31378121321, 432719079873987878932, 99189098453908];

// 5. Function to add a character to each element in an array
function addCharacterToArray($array, $character) {
    return array_map(function($item) use ($character) {
        return $item . $character;
    }, $array);
}

// Supporting arrays

$add1 = ['Andi', 10000, 'Frodo', 'Gandalf', 1000, 10000000];
$add2 = [232000, 15000, 'Frodo', 'Legolas','Sukardi', 2500, 'Hataru', 9320200];
$add3 = [20000, 'Aragorn','Legolas',320090, 'Gimli', 3000, 7500, 'Bambang'];
$add4 = ['Siti', 340023, 'Samwise', 'Boromir', 43000, 604000];
$add5 = ['Joko', 30000, 'Dwarf', 5000, 'Gwenn', 'Pippin', 2300, 2300,'Conan'];
