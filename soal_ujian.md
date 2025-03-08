# SOAL UJIAN ANGKATAN 21
#### Sabtu, 08 Maret 2025

## Soal-soal
1. Perhatikan sebuah array/list dari domba yang mana terdapat domba yang hilang dari tempatnya. Kami butuh fungsi untuk menghitung domba yang hadir dan yang hilang di array atau list tersebut (true berarti hadir).

Example,
```php
$domba = [true,  true,  true,  false,   true,  true,  true,  true ,   true,  false, true,  false,   true,  false, false, true ,   true,  true,  true,  true ,   false, false, true,  true];
```

> The correct answer would be ‘**present = 17, alpha  = 7**’.

2. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

|Sample Input |  	Sample Output |
|-------------|-------------------|
|3            |bool(true)         |
|21           |	bool(true)        |
|14           |	bool(true)        |
|19           |	bool(false)       |

3. The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.

### Task  

Given a year, return the century it is in.

|Sample Input|	Sample Output|
|--|---|
|2002|	21|
|1789|	18|
|1029|	11|
|2193|	22|
|1900|	19|
|2000|	20|


4. Budi ingin membuat fungsi untuk membedakan antara angka genap dan ganjil dalam sebuah array dengan bahasa PHP, bisakah kamu membantunya?

5. Buat kumpulan data nama nama array kemudian buatlah fungsi yang menerima string untuk menambahkan carachter otomatis pada setiap array

```PHP  

$Array =  [Nama1,Nama2,] | [10.000,20.000]   
$Array = [Pak Nama1 -kun,Pak Nama2 -kun] | [Rp.10.000,00-,Rp.20.000,00-]  

```

6. Warung makan “Budhe Nar” ingin mendigitalisasi restorannya dia sudah menyediakan menu menu masakannya dalam bentuk array, bantulah mereka untuk menampilkan semua menu yang mereka punya secara rapih.

7. Dan buatkan function untuk set harga pada setiap menu yang mereka punya.

## Lampiran
Digunakan sebagia unit tester pada soal soal sebelumnya:  

Soal 1.

```php
$domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
$domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
$domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
$domba = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
$domba = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];
```

Soal 2.
```php
$number1 = [3, 12, 43, 21, 90, 120, 1330];
$number2 = [321, 64, 3, 24, 80, 34, 60];
$number3 = [99, 89, 45, 21, 75, 23, 55];
$number4 = [40, 12, 41992, 21, 908493, 13420, 1330];
```

Soal 3.
```php
$abad1 = [1000, 2309, 2341, 1001, 2022];
$abad2 = [210, 2031, 9201, 3209, 2432];
$abad3 = [909, 122, 3221, 1401, 2222];
$abad4 = [230, 2309, 2341, 12, 20022];
$abad5 = [100, 2, 43, 56, 9098];
```

Soal 4.
```php
$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [23, 53532, 625265, 1230984, 102];
$numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
$numbers4 = [4902,902, 32, 31, 78, 424];
$numbers5 = [8932, 971902, 2179879, 31378121321, 4327190];
```

Soal 5.
```php
$add1 = ['Andi', 10000, 'Frodo', 'Gandalf', 1000, 10000000];
$add2 = [232000, 15000000000000, 'Frodo', 'Legolas', 'Sukardi', 2500, 'Hataru', 9320200];
$add3 = [20000, 'Aragorn','Legolas',320090, 'Naruto', 3000, 7500, 'Bambang'];
$add4 = ['Siti', 340023, 'Samwise', 'Boromir', 43000, 604000];
$add5 = ['Joko', 30000, 'Dwarf', 5000, 'Gwenn', 'Pippin', 2300, 2300,'Conan',920000000000000000000];
```

Soal 6.
```php
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
        ],
    "minuman" =>[
        'es teh',
        'es jeruk',
        'es anggur',
        "masirmas",
        "teh sisri",
        "es teh anget",
        "soda gembira"
    ]
];
```