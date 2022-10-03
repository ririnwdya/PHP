<?php 
require_once 'Bentuk2D.php';

class PersegiPanjang extends Bentuk2D{
    protected $panjang = 15;
    protected $lebar = 10;

    public function keterangan(){
        echo 'Panjang = 15';
        echo ', Lebar = 10';
    }
    public function namaBidang(){
        return 'Persegi Panjang';
    }
    public function luasBidang(){
        return $this->panjang * $this->lebar;
    }
    public function kelilingBidang(){
        return $keliling = 2*($this->panjang * $this->lebar);
    }
}