<?php

require_once './vendor/autoload.php';

use \Petry\IpCountry\CountryShow;

$country = CountryShow::getCountryByIp('200.147.67.142');
$country->getFlagHeaderPNG();
