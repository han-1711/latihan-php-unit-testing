<?php
    require_once "bangunDatar.php";
    class Lingkaran extends BangunDatar{
        private $jariJari;

        public function __construct($j){
            $this->jariJari = $j;
        }


        function hitungkeliling(){
            if ($this->jariJari == '') {
                return "tidak Boleh kosong!";
            }else{
                return 2*3.14*$this->jariJari;
            }
        }

        function hitungLuas(){
            if($this->jariJari == '' ){
                return "tidak Boleh kosong!";
            }else{
                return 3.14*$this->jariJari*$this->jariJari;
            }
        }

    }

?>