<?php

namespace Petry\IpCountry;

/**
 * País pelo IP    
 * 
 * Classe: IpCountry
 * 
 * @filesource IpCountry.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 09:56:40
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Country
{

    /**
     * Locale seguindo o padrão de internacionalização: 
     * https://pt.wikipedia.org/wiki/Internacionaliza%C3%A7%C3%A3o_(inform%C3%A1tica)
     * 
     * Lista de Códigos IBGE
     * http://www.ibge.gov.br/home/estatistica/populacao/registrocivil/2013/codigo_paises.shtm
     * @var string
     */
    private $locale;

    /**
     * Locale no formato SO
     * @var string
     */
    private $locale_;

    /**
     * Extensão do País utilizado em domínios 
     * @var string
     */
    private $extension;

    /**
     * Nome do País
     * @var string
     */
    private $country;

    /**
     * Sigla de 2 caracteres
     * @var string
     */
    private $acronym2;

    /**
     * Sigla de 3 caracteres
     * @var string
     */
    private $acronym3;

    /**
     * Código do IBGE
     * @var integer
     */
    private $ibge;

    /**
     * Bandeira do País
     * @var string
     */
    private $flag;

    public function getLocale()
    {
        return $this->locale;
    }

    public function getLocale_()
    {
        return $this->locale_;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getAcronym2()
    {
        return $this->acronym2;
    }

    public function getAcronym3()
    {
        return $this->acronym3;
    }

    public function getIbge()
    {
        return $this->ibge;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    public function setLocale_($locale_)
    {
        $this->locale_ = $locale_;
        return $this;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setAcronym2($acronym2)
    {
        $this->acronym2 = $acronym2;
        return $this;
    }

    public function setAcronym3($acronym3)
    {
        $this->acronym3 = $acronym3;
        return $this;
    }

    public function setIbge($ibge)
    {
        $this->ibge = $ibge;
        return $this;
    }

    public function getFlag()
    {
        $this->flag = $this->extension . '.png';
        return $this->flag;
    }

    public function getFlagHeaderPNG()
    {
        $im = imagecreatefrompng(dirname(__FILE__)."/flags/".$this->getFlag());

        header('Content-Type: image/png');

        imagepng($im);
        imagedestroy($im);
    }

}

//["extension","country","locale_","locale","acronym2","acronym3","ibge"];