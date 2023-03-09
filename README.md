# Rangkuman Video Youtube Laracast

#### Source : [Laracast](https://www.youtube.com/watch?v=U2lQWR6uIuo&list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC&ab_channel=Laracasts)


## Video 1 => Cara Memilih Bahasa Pemrograman
Jika kita memiliki keinginan untuk membuat situs web maka kita harus belajar bahasa pemrograman seperti HTML, CSS, dan JavaScript. Jika ingin membuat aplikasi desktop, kita bisa memilih bahasa pemrograman seperti c++, python ataupun java. jika kita ingin menjadi game developement kita bisa memilih bahasa C++ atau C#. Jika kita ingin fokus pada pengembangan web, kita bisa fokus pada bahasa JavaScript ataupun PHP

## Video 2 => Memilih Tools yang Akan Digunakan
1. Text Editor : ada beberapa teks editor yang dapat digunakan untuk pemrograman web. Untuk yang berbayar ada PHPStorm, dan yang gratis ada Visual Studio Code dan Sublime Text

2. Terminal : Terminal ini adalah alat yang digunakanuntuk mengeksekusi perintah. Pada pemrograman php, terminal digunakan untuk web server lokal

3. Local Development Environtment : yaitu alat untuk membuat lingkungan pengembang lokal pada setiap pc. contohnya XAMPP, MAMP dan WAMP

4. Browser : digunakan untuk menampilkan halaman web, contohnya adalah Google Chrome, Microsoft Edge, dan Mozila

5. Version Control : Digunakan unutk melacak perubahan pada kode jika anda bekerja sama dengan tim. Contoh version Control disini adalah Git dan GitHub

## Video 3 => Tag PHP
untuk menuliskan bahasa php, dimulai dengan tag php seperti berikut
```
<?php
    //kode php
?>
```

Untuk menampilkan halaman file php, maka nama file haruslah ```index.php``` kemudian buka terminal di folder yang sama kemudian ketik
```
php -S localhost:8000
```

Untuk menampilkan kode yang ada didalam php bisa menggunakan perintah ```echo```. Contoh : 
```
<?php echo "Hello World"; ?>
``` 

## Video 4 => Variables
Penggunaan variable pada php diawali dengan tanda ```$```. Contoh : 
```
<?php 
    $greeting = "Hello";
    echo "$greeting Everybody";
?>
```

Terdapat perbedaan jika menggunakan simbol ```"``` dengan ```'```. Jika ingin mengembalikan nilai variable maka harus menggunakan simbol ```"```. Simbol ```'``` digunakan untuk menampilkan semua isi echo

## Video 5 => Boolean
Boolean adalah jenis data yang hanya terdapat benar atau salah (```True``` or ```False```). Contoh penggunaan Boolean pada php : 
```
<?php 
    $name = "Dark Matter";
    $read = false;
    if($read){
        $message = "You have read $name";
    }else{
        $message = "Yout have NOT read $name";
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>
```

penggunaan echo pada php dapat disingkat menjadi ```<?php echo $message ?>```

## Video 6 => Array
Array adalah jenis variable yang dapat menyimpan banyak nilai didalamnya. Nilainya dapat berupa string, boolean, integer

Contoh penggunakan Array :
```
<?php    
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
?>
```

Untuk pemanggilan Array kita dapat menggunakan looping ```foreach```. Contoh : 
```
<h1>Recommended Books</h1>
<ul>
    <?php foreach($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>
```

## Video 7 => Array Asosiatif
Array Asosiatif adalah array yang memiliki nilai ```key``` dan ```value```. Contoh penggunaan array asosiatif :
```
<?php 
    $books = [
        [
            'name' => 'Do Android Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ]
    ]
?>
```

Untuk pemanggilan array asosiatif dengan menggunakan perulangan ```foreach``` :
```
<ul>
    <?php foreach($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>"><?=$book['name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>
```

## Video 8 => Function dan Filtering
Fungsi digunakan untuk membuat blok yang berisi kode yang nantinya akan dipanggil dan mengembalikan sebuah nilai. Contoh penggunaan function : 
```
function filterByAuthor ($books, $author) {
    $filteredBooks = [];
    foreach ($books as $book){
        if($book['author']===$author){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}
```
Pada operasi ```if``` diatas menggunakan tanda ```===``` karena untuk membandingkan nilai. Sedangkan jika hanya ada tanda ```=``` maka dia akan mengubah variabel yang sudah ada

Untuk pemanggilan function dapat dilakukan seperti ini : 
```
<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
    <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaserYear'] ?>) - By <?= $book['author'] ?>  
        </a>
    </li>
    <?php endforeach; ?>
</ul>
```

## Video 9 => Lambda Function
Fungsi lambda atau biasa disebut anonymous function adalah sebuah fungsi yang tidak diberi nama dan tidak didefinisikan secara jelas. fungsi ini dapat digunakan saat kita hanya membutuhkan pemanggilan fungsi ini satu kali atau beberapa kali

```
$filteredBooks = filter($books, function ($book){
    return $book['releaseYear'] < 2000;
})
```
Dalam fungsi lambda diatas, $filteredBooks adalah nama variabel yang digunakan untuk menampung fungsi lambda. dan nantinya variabel ini yang akan dipanggil untuk dieksekusi

## Video 10 => Pemisahan logika php dari template
Pemisahan logika php dari halaman utama yang berisi template/html dapat dilakukan dengan 2 cara yaitu menggunakan ```require "namaFile.php"``` atau dengan ```include "namaFile.php"```.

Contoh jika kita 2 membuat file php. file yang pertama kita beri nama ```index.php``` dan file kedua kita beri nama ```index.logic.php```. File index kita berisi : 
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>       
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>  
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```

dan File kedua berisi : 
```
<?php 
$books = [
    [
        'name' => 'Do Android Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];
$filteredBooks = array_filter($books, function ($book){
    return $book['author'] === 'Andy Weir';
});
```
Maka kita harus menambahkan ```include "index.logic.php"``` pada file pertama baris paling atas. atau kita bisa menambahkan ```requiere "index.php"``` pada file kedua baris paling akhir.

## Video 11 => Review ulang singkat dan quiz
Nilai kuis : 
<img width="1118" alt="quis laravel" src="https://user-images.githubusercontent.com/88817830/223885155-f77f56be-74d2-4cae-a4de-661c54afb63f.png">



