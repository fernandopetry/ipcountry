<?php

namespace Petry\IpCountry\Filter;

/**
 * Filtra pela sigla de 2 caracteres    
 * 
 * Classe: FilterAcronym2
 * 
 * @filesource FilterAcronym2.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:37:40
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterAcronym2 extends Filter
{
    
    public function getColumn()
    {
        return 'acronym2';
    }

}
