<?php

namespace Petry\IpCountry\Filter;

/**
 *     
 * 
 * Classe: FilterLocaleUnderline
 * 
 * @filesource FilterLocaleUnderline.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 14:27:06
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class FilterLocaleUnderline extends Filter
{

    public function getColumn()
    {
        return 'locale_';
    }

}
