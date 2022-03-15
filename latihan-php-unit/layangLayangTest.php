<?php

use PHPUnit\Framework\TestCase;

require_once "layangLayang.php";

class layangLayangTest extends TestCase{

    public static function setUpBeforeClass(): void{
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling(){
        $layanglayang = new Layanglayang(5,2);
        
        $result = $layanglayang->hitungKeliling();
        $expected = 14;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){
        $layanglayang = new Layanglayang("","");
        
        $result = $layanglayang->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){
        $layanglayang = new Layanglayang(6,9);
        
        $result = $layanglayang->hitungLuas();
        $expected = 27;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $layanglayang = new Layanglayang("","");
        
        $result = $layanglayang->hitungLuas();
        $expected = "tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengjujian \n";
    }

}