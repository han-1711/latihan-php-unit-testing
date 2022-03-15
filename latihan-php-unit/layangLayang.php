<?php
    require_once "bangunDatar.php";

    class layangLayang extends bangunDatar{
        private $dia;
        private $dib;

        public function __construct($dia,$dib){
            $this->dia = $dia;
            $this->dib = $dib;
        }

        function hitungkeliling(){
            if ($this->dia == '' && $this->dib == '' ) {
                return "tidak Boleh kosong!";
            }else{
                return 2*($this->dia+$this->dib);
            }
        }

        function hitungLuas(){
            if($this->dia == '' && $this->dib == ''){
                return "tidak Boleh kosong!";
            }else{
                return 0.5*$this->dia*$this->dib;
            }
        }

    }

?>