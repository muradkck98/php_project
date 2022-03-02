<pre style="font-size: 16px">

<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
$planets2 = array_filter($planets);// deleting empty objects in an array


print_r($planets2) ;

function rand_arr(array $arr, int $n): array{
    $rand_key = array_rand($arr,$n);
    $new_rand_arr = [];

    foreach ($rand_key as $key) {
        $new_rand_arr[] = [
            $arr[$key],
        ];
    }
    return $new_rand_arr;
}

print_r(rand_arr($planets,5));









/*
Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın. (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 3));
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 4));
print_r(sizinFonksiyonunuz($planets, 5));


Ekran Çıktısı;

Array
(
    [0] => Venus
    [1] => Mars
)
Array
(
    [0] => Earth
    [1] => Jupiter
    [2] => Uranus
)
Array
(
    [0] => Mars
    [1] => Uranus
)
Array
(
    [0] => Venus
    [1] => Earth
    [2] => Jupiter
    [3] => Neptune
)
Array
(
    [0] => Mercury
    [1] => Earth
    [2] => Saturn
    [3] => Uranus
    [4] => Neptune
)
*/


















?>
</pre>