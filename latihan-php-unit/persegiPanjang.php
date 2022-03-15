<?php

    require_once "bangunDatar.php";

    class persegiPanjang extends bangunDatar{
        private $panjang;
        private $lebar;

        public function __construct($p,$l){
            $this->panjang = $p;
            $this->lebar = $l;
        }

        public function hitungKeliling(){
            if ($this->panjang == '' && $this->lebar == '') {
                return "tidak Boleh kosong!";
            }else{
                return 2*($this->panjang + $this->lebar);
            }
        }

        function hitungLuas(){
            if($this->panjang == '' && $this->lebar == ''){
                return "tidak Boleh kosong!";
            }else{
                return $this->panjang * $this->lebar;
            }
        }

    }

?>