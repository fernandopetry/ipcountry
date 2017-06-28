<?php

namespace Petry\IpCountry\Filter;

/**
 * Filtra pelo nome do País    
 * 
 * Classe: FilterCountry
 * 
 * @filesource FilterCountry.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:34:38
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterCountry extends Filter
{
    
    public function getColumn()
    {
        return 'country';
    }

}
