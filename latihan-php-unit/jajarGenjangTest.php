<?php

use PHPUnit\Framework\TestCase;

require_once "jajarGenjang.php";

class jajarGenjangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling(){
        $JajarGenjang = new JajarGenjang(6,4);
        
        $result = $JajarGenjang->hitungKeliling();
        $expected = 20;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){
        $JajarGenjang = new JajarGenjang("","");

        $result = $JajarGenjang->hitungKeliling();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){
        $JajarGenjang = new JajarGenjang(6,4);
        
        $result = $JajarGenjang->hitungLuas();
        $expected = 24;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $JajarGenjang = new JajarGenjang("","");

        $result = $JajarGenjang->hitungLuas();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }

}