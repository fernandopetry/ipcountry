<?php

namespace Petry\IpCountry\Filter;

/**
 *     
 * 
 * Classe: Filter
 * 
 * @filesource Filter.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:28:38
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
abstract class Filter
{

    private $value;
    private $sessionActive;

    /**
     * Método construtor
     * @param mixed $value Valor a ser localizado
     */
    public function __construct($value, $sessionActive = false)
    {
        $this->value       = $value;
        $this->sessionActive = $sessionActive;
    }

    /**
     * Valor a ser localizado
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function getSessionActive()
    {
        return $this->sessionActive;
    }

    public abstract function getColumn();
}
