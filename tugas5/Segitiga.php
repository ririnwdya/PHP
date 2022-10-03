<?php 
require_once 'Bentuk2D.php';

class Segitiga extends Bentuk2D{
    protected $alas = 20;
    protected $tinggi = 17;
    protected $sisi = 12;

    public function keterangan(){
        echo 'Alas = 20';
        echo ', Tinggi = 17';
        echo ', Sisi = 12';
    }
    public function namaBidang(){
        return 'Segitiga';
    }
    public function __constructor($alas, $tinggi, $sisi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    public function luasBidang(){
        return $luas = 0.5 * $this->alas * $this->tinggi;
    }
    public function kelilingBidang(){
        return $keliling = $this->sisi * $this->sisi * $this->sisi;
    }
}