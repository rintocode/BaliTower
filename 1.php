<!DOCTYPE html>
<html>
<h1>Jika Anda ingin mendapatkan elemen yang cocok (sesuai dengan kondisi tertentu) dari sebuah array bilangan bulat dengan PHP, Anda bisa menggunakan fungsi array_filter</h1>
<p>
Contoh <br>
1. Mendapatkan Elemen Berdasarkan Kondisi <br>
2. Menggunakan foreach <br>
3. Mendapatkan Elemen yang Memiliki Indeks Genap
</p>
<body>
<?php

$array = [1, 2, 3, 4, 5];

// 1.Menggunakan array_filter untuk mendapatkan elemen yang lebih besar dari 2
$filteredArray = array_filter($array, function($element) {
    return $element > 2;
});

// Output: Array ( [2] => 3 [3] => 4 [4] => 5 )
print_r($filteredArray);



// 2.Menggunakan foreach untuk mencetak elemen yang lebih kecil dari 4
foreach ($array as $element) {
    if ($element < 4) {
        echo $element . ' ';
    }
}
// Output: 1 2 3


// 3.Menggunakan array_filter untuk mendapatkan elemen dengan indeks genap
$filteredArray = array_filter($array, function($key) {
    return $key % 2 == 0;
}, ARRAY_FILTER_USE_KEY);

// Output: Array ( [0] => 1 [2] => 3 [4] => 5 )
print_r($filteredArray);






?>
</body>
</html>