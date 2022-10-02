<h1 class="text-center py-4">Daftar Pegawai</h1>
<?php
/**
 * Buatlah CLASS PEGAWAI dengan member class:
 * variabel : nip, nama, jabatan, agama, status
 * konstruktor : (nip, nama, jabatan, agama, status)
 * FUNGSI:
 * setGajiPokok (gunakan switch case : manager=>15jt, asmen=>10jt, kabag=>7jt, staff=>4jt)
 * setTunjab = 20% dari Gaji Pokok
 * setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
 * setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
 * mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunjab, Tunkel, Zakat, Gaji Bersih 
 
 * Buatlah objPegawai dengan data:
 * 5 instance object pegawai
 * cetaklah semua struktur gaji pegawai
*/

require 'Pegawai.php';

//ciptakan object
$pg1 = new Pegawai('001122', 'Shinta Maria', 'Manager', 'Islam', 'Menikah');
$pg2 = new Pegawai('001123', 'Sherly Mariestya', 'Kepala Bagian', 'Kristen', 'Belum Menikah');
$pg3 = new Pegawai('001124', 'Gilang Yusuf', 'Staff', 'Budha', 'Belum Menikah');
$pg4 = new Pegawai('001125', 'Pratama Arhan', 'Asisten Manager', 'Kristen', 'Menikah');
$pg5 = new Pegawai('001126', 'Ririn Widiawati', 'Manager', 'Islam', 'Menikah');

//array assosiative
$dataPegawai = [$pg1, $pg2, $pg3, $pg4, $pg5];
foreach($dataPegawai as $pegawai){
    ?>
    <td><?= $pegawai->mencetak() ?></td>
<?php }
?>




