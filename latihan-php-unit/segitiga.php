<?php
    require_once "bangunDatar.php";

    class segitiga extends bangunDatar{
        private $alas;
        private $tinggi;
        private $sisia;
        private $sisic;
        private $sisib;

        public function __construct($sisia,$sisib,$sisic,$alas,$tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->a = $sisia;
            $this->b = $sisib;
            $this->c = $sisic;
        }

        function hitungkeliling(){
            if ($this->sisia == '' && $this->sisib == '' && $this->sisic == '') {
                return "tidak Boleh kosong!";
            }else{
                return $this->sisia+$this->sisib+$this->sisic;
            }
        }

        function hitungLuas(){
            if($this->alas == '' && $this->tinggi == ''){
                return "tidak Boleh kosong!";
            }else{
                return 0.5*$this->alas*$this->tinggi;
            }
        }

    }

?>