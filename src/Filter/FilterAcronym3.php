<?php

namespace Petry\IpCountry\Filter;

/**
 * Filtra pela sigla de 2 caracteres    
 * 
 * Classe: FilterAcronym3
 * 
 * @filesource FilterAcronym3.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:38:19
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterAcronym3 extends Filter
{
    
    public function getColumn()
    {
        return 'acronym3';
    }

}
