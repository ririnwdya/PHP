<?php
/**
 * Buatlah daftar nilai mahasiswa minimal 10 data dengan array scalar ($m1 s/d $m10): nim, nama, nilai
 * Buat array associative $mahasiswa = [ $m1 ... $m10]
 * Buat array judul = No, NIM, Nama, Nilai, Keterangan, Grade,Predikat (di aera looping)
 * Keterangan => Ternary minimal nilai 60 lulus
 * Grade If multi kondisi => A, B, C, D, E
 * Predikat Switch Case dari Grade : Memuaskan ... Buruk
 * Buat daftar aggregate nilai gunakan aggregate function di array (TFoot) => Nilai Tertinggi, Nilai Terendah, Nilai Rata2, Jumlah Siswa
 */

//array scalar 
$mhs1 = ['nim'=> '1220303', 'nama'=> 'Ririn Widiawati', 'nilai' => 90];
$mhs2 = ['nim'=> '1220304', 'nama'=> 'Fitria Damayanti', 'nilai' => 35];
$mhs3 = ['nim'=> '1220305', 'nama'=> 'Karan Shegar', 'nilai' => 95];
$mhs4 = ['nim'=> '1220305', 'nama'=> 'Jimmy Shergill', 'nilai' => 85];
$mhs5 = ['nim'=> '1220305', 'nama'=> 'Nurma Salsabila', 'nilai' => 60];
$mhs6 = ['nim'=> '1220306', 'nama'=> 'Maruko Nasution', 'nilai' => 65];
$mhs7 = ['nim'=> '1220307', 'nama'=> 'Yuni Setiowati', 'nilai' => 75];
$mhs8 = ['nim'=> '1220308', 'nama'=> 'Diajeng Maharani', 'nilai' => 30];
$mhs9 = ['nim'=> '1220309', 'nama'=> 'Dimas Agusulisio', 'nilai' => 50];
$mhs10 = ['nim'=> '122040', 'nama'=> 'Reyhan Mubarok', 'nilai' => 87];

//array assosiative
$mahasiswa =[$mhs1, $mhs2,$mhs3,$mhs4,$mhs5,$mhs6,$mhs7,$mhs8,$mhs9,$mhs10];

$judul = ['No.','Nim','Nama','Nilai','Keterangan','Grade','Predikat'];

// aggregat function in array 
$jumlah_mhs = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai);
$max_nilai = max($nilai);
$min_nilai = min($nilai);
$rata2 = $total_nilai/ $jumlah_mhs;

//keterangan
$keterangan =[
    'Jumlah Mahasiswa'=> $jumlah_mhs, 
    'Nilai Tertinggi' => $max_nilai, 
    'Nilai Terendah' =>$min_nilai, 
    'Nilai Rata rata' =>$rata2 
    ];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container px-5 my-4">   
    <div class="alert alert-primary" role="alert">
    <h4 align="center">DAFTAR NILAI MAHASISWA</h4>
    </div>
    <table table class="table table-hover table-bordered">
    <thead>
        <tr class='text-center' bgcolor='#92B4EC'>
            <?php
            foreach($judul as $jdl){   
            ?>
            <th><?= $jdl ?></th>
            <?php } ?>   
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($mahasiswa as $siswa){
        //ternary
        $ketentuan = '';
        $siswa['nilai'] >= 60 ? $ketentuan = 'Lulus' : $ketentuan = 'Tidak Lulus';
        
        // grade if multikondisi
        $grade = '';
        if($siswa['nilai'] >= 90 && $siswa['nilai'] <=100){
            $grade = 'A';
        }
        else if($siswa['nilai'] >= 80 && $siswa['nilai'] <=89){
            $grade = 'B';
        }
        else if($siswa['nilai'] >= 70 && $siswa['nilai'] <=79){
            $grade = 'C';
        }
        else if($siswa['nilai'] >= 60 && $siswa['nilai'] <=69){
            $grade = 'D';
        }
        else{
            $grade = 'E';
        }

        //Predikat Switch Case
        $predikat ='';
        Switch($grade){
            case 'A' : $predikat = 'Memuaskan'; break;  
            case 'B' : $predikat = 'Baik'; break;  
            case 'C' : $predikat = 'Cukup'; break;  
            case 'D' : $predikat = 'Kurang'; break;  
            case 'E' : $predikat = 'Buruk'; break;  
        }

        //color
        if($no % 2 == 0){
            $color = '#D6E5FA';
        }
        else{
            $color = 'C4DDFF';
        }

        //rumus2
        
        ?>
        <tr class='text-center' bgcolor="<?= $color ?>">
            <td><?= $no++ ?></td>
            <td><?= $siswa['nim'] ?></td>
            <td><?= $siswa['nama'] ?></td>
            <td><?= $siswa['nilai'] ?></td>
            <td><?= $ketentuan?></td>
            <td><?= $grade?></td>
            <td><?= $predikat?></td>
        </tr>

        <?php } ?>
    </tbody>
    <tfoot>
    <tr>
        <th class='py-4 text-center' colspan="7"><h5>KETERANGAN</h5></th>
    </tr>
    <tr class='text-center' bgcolor='#92B4EC' >
        <?php
        foreach ($keterangan as $ket => $hasil){
        ?>
            <th colspan="2"><?= $ket ?></th>
        <?php } ?>
    </tr>
    <tr class='text-center'>
        <?php
        foreach ($keterangan as $ket => $hasil){
        ?>
            <th colspan="2"><?= $hasil?></th>
        <?php } ?>
    </tr>
    </tfoot>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

