<?php

use PHPUnit\Framework\TestCase;

require_once "lingkaran.php";

class lingkaranTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling(){
        $lingkaran = new Lingkaran(4);

        $result = $lingkaran->hitungKeliling();
        $expected = 25.13;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungKeliling();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){        
        $lingkaran = new Lingkaran(4);
    
        $result = $lingkaran->hitungLuas();
        $expected = 50.26;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungLuas();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }

}