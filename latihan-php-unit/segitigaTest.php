<?php

use PHPUnit\Framework\TestCase;

require_once "segitiga.php";

class segitigaTest extends TestCase{
    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling(){       
        $segitiga = new Segitiga(4,4,4,5,4);
        
        $result = $segitiga->hitungKeliling();
        $expected = 21;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){
        $segitiga = new Segitiga("","","","","");

        $result = $segitiga->hitungKeliling();
        $expected = "Tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){        
        $segitiga = new Segitiga(4,4,4,5,4);

        $result = $segitiga->hitungLuas();
        $expected = 10;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $segitiga = new Segitiga("","","","","");
        
        $result = $segitiga->hitungLuas();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }

}