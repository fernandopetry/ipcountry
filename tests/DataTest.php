<?php

namespace Test\Petry\IpCountry;

/**
 *     
 * 
 * Classe: Data
 * 
 * @filesource Data.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 03/07/2017 16:19:02
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class DataTest extends \PHPUnit_Framework_TestCase
{

    private $data;

    public function setUp()
    {
        $this->data[] = array("extension" => ".br", "country" => "Brasil", "locale_" => "pt_BR", "locale" => "pt-BR", "acronym2" => "BR", "acronym3" => "BRA", "ibge" => 76);
        $this->data[] = array("extension" => ".pk", "country" => "Paquistão", "locale_" => "hi_PK", "locale" => "hi-PK", "acronym2" => "PK", "acronym3" => "PAK", "ibge" => 586);
        $this->data[] = array("extension" => ".ba", "country" => "Bósnia e Herzegovina", "locale_" => "sr_BA", "locale" => "sr-BA", "acronym2" => "BA", "acronym3" => "BIH", "ibge" => 70);
        $this->data[] = array("extension" => ".yu", "country" => "Sérvia e Montenegro", "locale_" => "sr_YU", "locale" => "sr-YU", "acronym2" => "YU", "acronym3" => "BIH", "ibge" => 70);
        $this->data[] = array("extension" => ".md", "country" => "Moldávia", "locale_" => "ro_MD", "locale" => "ro-MD", "acronym2" => "MD", "acronym3" => "MDA", "ibge" => 498);
    }
    
    public function testExtensionNotFound()
    {
        $extension = ".bk";
        $country = \Petry\IpCountry\Data::getCounty(new \Petry\IpCountry\Filter\FilterExtension($extension));
        $this->assertFalse($country);
    }
    
    public function testRegisterCountry()
    {
        $extension = ".br";
        $country = \Petry\IpCountry\Data::getCounty(new \Petry\IpCountry\Filter\FilterExtension($extension));
        $this->assertInstanceOf(\Petry\IpCountry\Country::class, $country);
    }
    
    public function testArrayColumnForPhp53()
    {
        $key = array_search('.br', test_array_column($this->data, 'extension'));
        $this->assertEquals(0,$key);
        
        $key = array_search('.ba', test_array_column($this->data, 'extension'));
        $this->assertEquals(2,$key);
        
        $key = array_search('.xx', test_array_column($this->data, 'extension'));
        $this->assertFalse($key);
    }

}
