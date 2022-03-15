<?php

require_once 'bangunDatar.php';
class persegi extends bangunDatar{
    private $sisi;

        public function __construct($s){
            $this->sisi = $s;
        }
    function hitungKeliling(){
        if ($this->sisi == ''){
            return "tidak boleh kosong";
        }else{
            return $this->sisi * 4;
        }
    }
    function hitungLuas(){
        if($this->sisi == ''){
            return "tidak boleh kosong";
        }else{
            return $this->sisi * $this->sisi;
        }

    }
}

?>