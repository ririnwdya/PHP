<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    
<h1 class="text-center py-4">Data Bidang</h1>
<div class="table-responsive p-3">
<table class="table">
  <thead>
  <tr class="text-light" bgcolor="#06283D">
<?php
/**
 * Buatlah Abstract Class Bentuk2D sebagai induk kelas dengan member class:
 * -method abstract:  
 * fungsi luasBidang()
 * fungsi kelilingBidang()
 * Buatlah class2 turunan:
 * -Lingkaran
 *   variabel: jari2
 *   method: namaBidang(), luasBidang(), kelilingBidang()
 * -PersegiPanjang 
 *   variabel: panjang, lebar
 *   method: namaBidang(), luasBidang(), kelilingBidang()
 * -Segitiga
 * variabel: alas, tinggi
 * method: namaBidang(), luasBidang(), kelilingBidang()
 * Buatlah file kumpulan_bidang.php untuk membuat object:
 * Cetak dalam bentuk tabel:
 * - Thead: cetak judul kolom dengan (array scalar :No, Nama Bidang, Keterangan, Luas Bidang, Keliling Bidang) 
 * - Tbody: cetak data-data bidang
 */


require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$bd1 = new Lingkaran();
$bd2 = new PersegiPanjang();
$bd3 = new Segitiga();

$bangunDatar = [$bd1,$bd2,$bd3];

$label = ['NO', 'NAMA BIDANG', 'KETERANGAN', 'LUAS BIDANG', 'KELILING BIDANG'];
$no = 1;
?>



<?php
foreach($label as $lb){ ?>
    <th scope="col"><?= $lb?></th>
<?php }
?>
</tr>
</thead>
<tbody>
<?php
foreach($bangunDatar as $bgd){ ?>
   <tr>
    <td><?= $no++?></td>
    <th scope="col"><?= $bgd->namaBidang()?></th>
    <th scope="col"><?= $bgd->keterangan()?></th>
    <th scope="col"><?= $bgd->luasBidang()?></th>
    <th scope="col"><?= $bgd->kelilingBidang()?></th>
    </tr>
<?php } ?>
  </tbody>

</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>