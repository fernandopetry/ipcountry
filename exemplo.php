<?php
session_start();
require_once './vendor/autoload.php';

use \Petry\IpCountry\CountryShow;

$start = microtime(true);
var_dump(CountryShow::getCountryByIp('138.128.168.72'));
var_dump(CountryShow::getCountryByIp('200.147.67.142'));
var_dump(CountryShow::getCountryByIp('54.207.73.189'));
var_dump(CountryShow::getCountryByIp());
$end = microtime(true);

var_dump(($end - $start));

echo '<img src="flag.php" alt="Bandeira" />';

