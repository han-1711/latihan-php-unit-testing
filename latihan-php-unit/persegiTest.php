<?php
use PHPUnit\Framework\TestCase;

require_once 'persegi.php';

class persegiTest extends TestCase{

    static $persegi;

    public static function setUPBeforeClass(): void {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungKeliling(){
        $persegi = new Persegi(4);

        $sisi =2;
        $result = $persegi->hitungKeliling($sisi);
        $expected = 8;

        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas(){
        $persegi = new Persegi(4);

        $sisi = 2;
        $result = $persegi->hitungLuas($sisi);
        $expected = 4;

        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong(){
        $persegi = new Persegi("","");

        $sisi ="";
        $result = $persegi->hitungKeliling($sisi);
        $expected = "tidak boleh kosong";

        $this->assertEquals($expected, $result);
    }

    public function testHitungLuasKosong(){
        $persegi = new Persegi("","");

        $sisi = "";
        $result = $persegi->hitungLuas($sisi);
        $expected = "tidak boleh kosong";

        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void{
     echo "\nEksekusi setelah pengjujian \n";
    }
    
}