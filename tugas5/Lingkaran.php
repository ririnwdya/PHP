<?php 
require_once 'Bentuk2D.php';

class Lingkaran extends Bentuk2D{
    protected $PHI = 3.14;
    protected $jari2 = 20;

    public function keterangan(){
        echo 'PHI = 3.14';
        echo ', jari2 = 20';
    }
    public function namaBidang(){
        return ('Lingkaran');
    }
    public function luasBidang(){
        return $this->PHI*($this->jari2* $this->jari2);
    }
    public function kelilingBidang(){
        return $this->PHI* ($this->jari2*2);
    }
}


