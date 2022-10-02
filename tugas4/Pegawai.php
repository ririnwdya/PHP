<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
<?php
$label = ['NIP', 'NAMA', 'JABATAN', 'AGAMA', 'STATUS', 'GAJI POKOK','TUNJANGAN JABATAN', 'TUNJANGAN KELUARGA', 'ZAKAT', 'GAJI BERSIH'];
?>
<table class="text-center table table-bordered border-primary ">
    <tr class="bg-primary text-light">
<?php
foreach ($label as $lb) {
    echo '<th>'.$lb.'</th>';
}
?>
</tr>

<?php
class Pegawai{
    //variabel
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    //variabel konstanta
    const PEGAWAI = 'Daftar Data Gaji Pegawai';

    //konstruktor
    public function __construct($nip,$nama,$jabatan,$agama,$status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    //function untuk menentukan Gapok dg menggunakan switch case
    public function gapok(){
        switch ($this->jabatan){
            case 'Manager' : $gapok = 15000000; break;
            case 'Asisten Manager' : $gapok = 10000000; break;
            case 'Kepala Bagian' : $gapok = 7000000; break;
            case 'Staff' : $gapok = 4000000; break;
            
        }
        return $gapok;
    }
    // function untuk menentukan Tunjab
    public function tunjab(){
        $tunjab = $this->gapok() * 0.2;
        return $tunjab;
    }
    // function untuk menentukan Tunkel
    public function tunkel(){
        $tunkel = ($this->status == 'Menikah') ? $this->gapok() * 0.1 : 0;
        return $tunkel;
    }
    // function untuk menentukan Gator
    public function gator() {
        $gator = $this->gapok() + $this->tunjab() + $this->tunkel();
        return $gator;
    }
    // function untuk menentukan Zaprof
    public function zaprof(){
        $zakat = 0;
        if($this->agama == 'Islam' && $this->gator() >=6000000){
            $zakat = $this->gator() * 0.025;
        }
        else{
            $zakat = 0;
        }
        return $zakat;
    }
    // function untuk menentukan Gaji Bersih
    public function gaber(){
        $thPay = $this->gator() - $this->zaprof();
        return $thPay;
    }

    //Mencetak
    public function mencetak(){
        $data = [
            $this->nip,
            $this->nama,
            $this->jabatan,
            $this->agama,
            $this->status,
            $this->gapok(),
            $this->tunjab(),
            $this->tunkel(),
            $this->zaprof(),
            $this->gaber()
        ];
        ?>
        <tr>
        <?php
        foreach ($data as $key) {
            echo '<td>'.$key.'</td>';
        }
    ?>
    <?php
    } 
}
?>
</tr>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>






