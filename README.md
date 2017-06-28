# País pelo IP

```PHP
require_once './vendor/autoload.php';

use \Petry\IpCountry\CountryShow;

// Informando o IP
$country = CountryShow::getCountryByIp('200.147.67.142');

// Detectando o IP
$country = CountryShow::getCountryByIp();

// Metodos
$country->getLocale();
$country->getLocale_();
$country->getExtension();
$country->getCountry();
$country->getAcronym2();
$country->getAcronym3();
$country->getIbge();
$country->getFlag();

// RESULTADO:
/*
object(Petry\IpCountry\Country)[1]
  private 'locale' => string 'pt-BR' (length=5)
  private 'locale_' => string 'pt_BR' (length=5)
  private 'extension' => string '.br' (length=3)
  private 'country' => string 'Brasil' (length=6)
  private 'acronym2' => string 'BR' (length=2)
  private 'acronym3' => string 'BRA' (length=3)
  private 'ibge' => int 76
  private 'flag' => null
*/
```