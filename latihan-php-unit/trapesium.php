<?php
    require_once "bangunDatar.php";
    
    class trapesium extends bangunDatar{
        private $alasa,$alasb;
        private $tinggi;
        private $sisi;

        public function __construct($sisi,$alasa,$alasb,$tinggi){
            $this->alasa = $alasa;
            $this->tinggi = $tinggi;
            $this->alasb = $alasb;
            $this->sisi = $sisi;
        }

        function hitungkeliling(){
            if ($this->sisi == '' ) {
                return "tidak Boleh kosong!";
            }else{
                return $this->sisi+$this->sisi+$this->sisi+$this->sisi;
            }
        }

        function hitungLuas(){
            if($this->alasa == '' && $this->alasb == '' && $this->tinggi == ''){
                return "tidak Boleh kosong!";
            }else{
                return $this->tinggi*($this->alasa+$this->alasb);
            }
        }

    }

?>