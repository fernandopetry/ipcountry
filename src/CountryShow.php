<?php

namespace Petry\IpCountry;

use Petry\IpCountry\Country;
use Petry\IpCountry\Filter\FilterExtension;
use Petry\IpCountry\Data;

/**
 *     
 * 
 * Classe: CountryShow
 * 
 * @filesource CountryShow.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 15:48:13
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class CountryShow
{

    public static function getCountryByIp($ip=false)
    {
        $ip = ($ip) ? $ip : filter_input(INPUT_SERVER, 'REMOTE_ADDR');

        if (isset($_SERVER['REMOTE_ADDR'])) {
            $hostname  = gethostbyaddr($ip);
            $extension = substr($hostname, -3);
            $country = Data::getCounty(new FilterExtension($extension));
            return $country;
        } else {
            return false;
        }
    }

}
