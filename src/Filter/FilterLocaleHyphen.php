<?php

namespace Petry\IpCountry\Filter;

/**
 *     
 * 
 * Classe: FilterLocaleHyphen
 * 
 * @filesource FilterLocaleHyphen.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:32:01
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterLocaleHyphen extends Filter
{
    
    public function getColumn()
    {
        return 'locale';
    }

}
