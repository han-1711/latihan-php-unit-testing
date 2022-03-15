<?php

use PHPUnit\Framework\TestCase;

require_once "persegiPanjang.php";

class persegiPanjangTest extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $persegipanjang = new PersegiPanjang(4,5);
         
        $result = $persegipanjang->hitungKeliling();
        $expected = 18;
        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong(){
        $persegipanjang = new PersegiPanjang("","");

        $result = $persegipanjang->hitungKeliling();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas(){
        $persegipanjang = new PersegiPanjang(4,5);
                
        $result = $persegipanjang->hitungLuas();
        $expected = 20;
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong(){
        $persegipanjang = new PersegiPanjang("","");
                
        $result = $persegipanjang->hitungLuas();
        $expected = "tidak Boleh kosong!";
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void{
        echo "\nEksekusi setelah pengujian \n";
    }

}