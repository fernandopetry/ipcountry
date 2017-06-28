<?php

namespace Petry\IpCountry\Filter;

/**
 * Filtra pelo código do IBGE    
 * 
 * Classe: FilterIdIBGE
 * 
 * @filesource FilterIdIBGE.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:43:45
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterIdIBGE extends Filter
{
    
    public function getColumn()
    {
        return 'ibge';
    }

}
