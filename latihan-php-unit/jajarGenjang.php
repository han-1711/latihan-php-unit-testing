<?php
    require_once "bangunDatar.php";

    class jajarGenjang extends bangunDatar{
        private $alas;
        private $tinggi;

        public function __construct($alas,$tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        function hitungkeliling(){
            if ($this->alas == '' && $this->tinggi == '' ) {
                return "tidak Boleh kosong!";
            }else{
                return 2*($this->alas + $this->tinggi);
            }
        }

        function hitungLuas(){
            if($this->alas == '' && $this->tinggi == ''){
                return "tidak Boleh kosong!";
            }else{
                return $this->alas*$this->tinggi;
            }
        }

    }

?>