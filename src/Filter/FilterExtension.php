<?php

namespace Petry\IpCountry\Filter;

/**
 * Filtra pela extensão do País, um exemplo ".br"    
 * 
 * Classe: FilterExtension
 * 
 * @filesource FilterExtension.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:33:04
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterExtension extends Filter
{
    
    public function getColumn()
    {
        return 'extension';
    }

}
