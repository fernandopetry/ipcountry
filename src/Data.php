<?php

namespace Petry\IpCountry;

use Petry\IpCountry\Filter\Filter;

/**
 *     
 * 
 * Classe: Data
 * 
 * @filesource Data.php
 * @package ipcountry
 * @subpackage 
 * @category
 * @version v1.0
 * @since 28/06/2017 10:05:11
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Data
{

    private static $sessionName = 'petryipcountry';

    //["extension","country","locale_","locale","acronym2","acronym3","ibge");
    // $key = array_search('100', array_column($userdb, 'uid'));
    // 
    // FilterLocaleUnderline
    // FilterLocaleHyphen
    // FilterExtension
    // FilterCountry
    // FilterAcronym2.
    // FilterAcronym3.
    // FilterIdIBGE

    /**
     * 
     * @param Filter $filter
     * @return boolean
     * @param Filter $filter
     * @return boolean
     */
    public static function getCounty(Filter $filter)
    {

        if ($filter->getSessionActive()) {
            $sessionID = session_id();
            if (!empty($sessionID) && isset($_SESSION[self::$sessionName])) {
                return unserialize($_SESSION[self::$sessionName]);
            }
        }

        $data[] = array("extension" => ".ae", "country" => "Emirados Árabes Unidos", "locale_" => "ar_AE", "locale" => "ar-AE", "acronym2" => "AE", "acronym3" => "ARE", "ibge" => 784);
        $data[] = array("extension" => ".bh", "country" => "Bahrein", "locale_" => "ar_BH", "locale" => "ar-BH", "acronym2" => "BH", "acronym3" => "BHR", "ibge" => 48);
        $data[] = array("extension" => ".dz", "country" => "Argélia", "locale_" => "ar_DZ", "locale" => "ar-DZ", "acronym2" => "DZ", "acronym3" => "DZA", "ibge" => 12);
        $data[] = array("extension" => ".eg", "country" => "Egito", "locale_" => "ar_EG", "locale" => "ar-EG", "acronym2" => "EG", "acronym3" => "EGY", "ibge" => 818);
        $data[] = array("extension" => ".il", "country" => "Israel", "locale_" => "ar_IL", "locale" => "ar-IL", "acronym2" => "IL", "acronym3" => "ISR", "ibge" => 376);
        $data[] = array("extension" => ".iq", "country" => "Iraque", "locale_" => "ar_IQ", "locale" => "ar-IQ", "acronym2" => "IQ", "acronym3" => "IRQ", "ibge" => 368);
        $data[] = array("extension" => ".jo", "country" => "Jordânia", "locale_" => "ar_JO", "locale" => "ar-JO", "acronym2" => "JO", "acronym3" => "JOR", "ibge" => 400);
        $data[] = array("extension" => ".kw", "country" => "Kuwait", "locale_" => "ar_KW", "locale" => "ar-KW", "acronym2" => "KW", "acronym3" => "KWT", "ibge" => 414);
        $data[] = array("extension" => ".lb", "country" => "Líbano", "locale_" => "ar_LB", "locale" => "ar-LB", "acronym2" => "LB", "acronym3" => "LBN", "ibge" => 422);
        $data[] = array("extension" => ".ly", "country" => "Líbia", "locale_" => "ar_LY", "locale" => "ar-LY", "acronym2" => "LY", "acronym3" => "LBY", "ibge" => 434);
        $data[] = array("extension" => ".ma", "country" => "Marrocos", "locale_" => "ar_MA", "locale" => "ar-MA", "acronym2" => "MA", "acronym3" => "MAR", "ibge" => 504);
        $data[] = array("extension" => ".mr", "country" => "Mauritânia", "locale_" => "ar_MR", "locale" => "ar-MR", "acronym2" => "MR", "acronym3" => "MRT", "ibge" => 478);
        $data[] = array("extension" => ".om", "country" => "Omã", "locale_" => "ar_OM", "locale" => "ar-OM", "acronym2" => "OM", "acronym3" => "OMN", "ibge" => 512);
        $data[] = array("extension" => ".ps", "country" => "Palestina", "locale_" => "ar_PS", "locale" => "ar-PS", "acronym2" => "PS", "acronym3" => "PSE", "ibge" => 275);
        $data[] = array("extension" => ".qa", "country" => "Catar", "locale_" => "ar_QA", "locale" => "ar-QA", "acronym2" => "QA", "acronym3" => "QAT", "ibge" => 634);
        $data[] = array("extension" => ".sa", "country" => "Arábia Saudita", "locale_" => "ar_SA", "locale" => "ar-SA", "acronym2" => "SA", "acronym3" => "SAU", "ibge" => 682);
        $data[] = array("extension" => ".sd", "country" => "Sudão", "locale_" => "ar_SD", "locale" => "ar-SD", "acronym2" => "SD", "acronym3" => "SDN", "ibge" => 736);
        $data[] = array("extension" => ".so", "country" => "Somália", "locale_" => "ar_SO", "locale" => "ar-SO", "acronym2" => "SO", "acronym3" => "SOM", "ibge" => 706);
        $data[] = array("extension" => ".sy", "country" => "Síria", "locale_" => "ar_SY", "locale" => "ar-SY", "acronym2" => "SY", "acronym3" => "SYR", "ibge" => 760);
        $data[] = array("extension" => ".td", "country" => "Chade", "locale_" => "ar_TD", "locale" => "ar-TD", "acronym2" => "TD", "acronym3" => "TCD", "ibge" => 148);
        $data[] = array("extension" => ".tn", "country" => "Tunísia", "locale_" => "ar_TN", "locale" => "ar-TN", "acronym2" => "TN", "acronym3" => "TUN", "ibge" => 788);
        $data[] = array("extension" => ".ye", "country" => "Iêmen", "locale_" => "ar_YE", "locale" => "ar-YE", "acronym2" => "YE", "acronym3" => "YEM", "ibge" => 887);
        $data[] = array("extension" => ".bd", "country" => "Bangladesh", "locale_" => "bn_BD", "locale" => "bn-BD", "acronym2" => "BD", "acronym3" => "BGD", "ibge" => 50);
        $data[] = array("extension" => ".in", "country" => "Índia", "locale_" => "bn_IN", "locale" => "bn-IN", "acronym2" => "IN", "acronym3" => "IND", "ibge" => 356);
        $data[] = array("extension" => ".sg", "country" => "Singapura", "locale_" => "bn_SG", "locale" => "bn-SG", "acronym2" => "SG", "acronym3" => "SGP", "ibge" => 702);
        $data[] = array("extension" => ".gu", "country" => "Guam", "locale_" => "ch_GU", "locale" => "ch-GU", "acronym2" => "GU", "acronym3" => "GUM", "ibge" => 316);
        $data[] = array("extension" => ".mp", "country" => "Marianas Setentrionais", "locale_" => "ch_MP", "locale" => "ch-MP", "acronym2" => "MP", "acronym3" => "MNP", "ibge" => 580);
        $data[] = array("extension" => ".cn", "country" => "China", "locale_" => "zh_CN", "locale" => "zh-CN", "acronym2" => "CN", "acronym3" => "CHN", "ibge" => 156);
        $data[] = array("extension" => ".hk", "country" => "Hong Kong", "locale_" => "zh_HK", "locale" => "zh-HK", "acronym2" => "HK", "acronym3" => "HKG", "ibge" => 344);
        $data[] = array("extension" => ".mo", "country" => "Macau", "locale_" => "zh_MO", "locale" => "zh-MO", "acronym2" => "MO", "acronym3" => "MAC", "ibge" => 446);
        $data[] = array("extension" => ".sg", "country" => "Singapura", "locale_" => "zh_SG", "locale" => "zh-SG", "acronym2" => "SG", "acronym3" => "SGP", "ibge" => 702);
        $data[] = array("extension" => ".tw", "country" => "Taiwan", "locale_" => "zh_TW", "locale" => "zh-TW", "acronym2" => "TW", "acronym3" => "TWN", "ibge" => 158);
        $data[] = array("extension" => ".kp", "country" => "Coreia do Norte", "locale_" => "ko_KP", "locale" => "ko-KP", "acronym2" => "KP", "acronym3" => "PRK", "ibge" => 408);
        $data[] = array("extension" => ".kr", "country" => "Coreia do Sul", "locale_" => "ko_KR", "locale" => "ko-KR", "acronym2" => "KR", "acronym3" => "KOR", "ibge" => 410);
        $data[] = array("extension" => ".ba", "country" => "Bósnia e Herzegovina", "locale_" => "hr_BA", "locale" => "hr-BA", "acronym2" => "BA", "acronym3" => "BIH", "ibge" => 70);
        $data[] = array("extension" => ".hr", "country" => "Croácia", "locale_" => "hr_HR", "locale" => "hr-HR", "acronym2" => "HR", "acronym3" => "HRV", "ibge" => 191);
        $data[] = array("extension" => ".dk", "country" => "Dinamarca", "locale_" => "da_DK", "locale" => "da-DK", "acronym2" => "DK", "acronym3" => "DNK", "ibge" => 208);
        $data[] = array("extension" => ".gl", "country" => "Gronelândia", "locale_" => "da_GL", "locale" => "da-GL", "acronym2" => "GL", "acronym3" => "GRL", "ibge" => 304);
        $data[] = array("extension" => ".ad", "country" => "Andorra", "locale_" => "fr_AD", "locale" => "fr-AD", "acronym2" => "AD", "acronym3" => "AND", "ibge" => 20);
        $data[] = array("extension" => ".be", "country" => "Bélgica", "locale_" => "fr_BE", "locale" => "fr-BE", "acronym2" => "BE", "acronym3" => "BEL", "ibge" => 56);
        $data[] = array("extension" => ".bf", "country" => "Burkina Faso", "locale_" => "fr_BF", "locale" => "fr-BF", "acronym2" => "BF", "acronym3" => "BFA", "ibge" => 854);
        $data[] = array("extension" => ".bi", "country" => "Burundi", "locale_" => "fr_BI", "locale" => "fr-BI", "acronym2" => "BI", "acronym3" => "BDI", "ibge" => 108);
        $data[] = array("extension" => ".bj", "country" => "Benim", "locale_" => "fr_BJ", "locale" => "fr-BJ", "acronym2" => "BJ", "acronym3" => "BEN", "ibge" => 204);
        $data[] = array("extension" => ".ca", "country" => "Canadá", "locale_" => "fr_CA", "locale" => "fr-CA", "acronym2" => "CA", "acronym3" => "CAN", "ibge" => 124);
        $data[] = array("extension" => ".cd", "country" => "República Democrática do Congo", "locale_" => "fr_CD", "locale" => "fr-CD", "acronym2" => "CD", "acronym3" => "COD", "ibge" => 180);
        $data[] = array("extension" => ".cf", "country" => "República Centro-Africana", "locale_" => "fr_CF", "locale" => "fr-CF", "acronym2" => "CF", "acronym3" => "CAF", "ibge" => 140);
        $data[] = array("extension" => ".cg", "country" => "República do Congo", "locale_" => "fr_CG", "locale" => "fr-CG", "acronym2" => "CG", "acronym3" => "COG", "ibge" => 178);
        $data[] = array("extension" => ".ch", "country" => "Suíça", "locale_" => "fr_CH", "locale" => "fr-CH", "acronym2" => "CH", "acronym3" => "CHE", "ibge" => 756);
        $data[] = array("extension" => ".ci", "country" => "Costa do Marfim", "locale_" => "fr_CI", "locale" => "fr-CI", "acronym2" => "CI", "acronym3" => "CIV", "ibge" => 384);
        $data[] = array("extension" => ".cm", "country" => "Camarões", "locale_" => "fr_CM", "locale" => "fr-CM", "acronym2" => "CM", "acronym3" => "CMR", "ibge" => 120);
        $data[] = array("extension" => ".dj", "country" => "Djibouti", "locale_" => "fr_DJ", "locale" => "fr-DJ", "acronym2" => "DJ", "acronym3" => "DJI", "ibge" => 262);
        $data[] = array("extension" => ".fr", "country" => "França", "locale_" => "fr_FR", "locale" => "fr-FR", "acronym2" => "FR", "acronym3" => "FRA", "ibge" => 250);
        $data[] = array("extension" => ".ga", "country" => "Gabão", "locale_" => "fr_GA", "locale" => "fr-GA", "acronym2" => "GA", "acronym3" => "GAB", "ibge" => 266);
        $data[] = array("extension" => ".gb", "country" => "Reino Unido", "locale_" => "fr_GB", "locale" => "fr-GB", "acronym2" => "GB", "acronym3" => "GBR", "ibge" => 826);
        $data[] = array("extension" => ".gf", "country" => "Guiana Francesa", "locale_" => "fr_GF", "locale" => "fr-GF", "acronym2" => "GF", "acronym3" => "GUF", "ibge" => 254);
        $data[] = array("extension" => ".gn", "country" => "Papua-Nova Guiné", "locale_" => "fr_GN", "locale" => "fr-GN", "acronym2" => "GN", "acronym3" => "GIN", "ibge" => 324);
        $data[] = array("extension" => ".gp", "country" => "Guadalupe", "locale_" => "fr_GP", "locale" => "fr-GP", "acronym2" => "GP", "acronym3" => "GLP", "ibge" => 312);
        $data[] = array("extension" => ".ht", "country" => "Haiti", "locale_" => "fr_HT", "locale" => "fr-HT", "acronym2" => "HT", "acronym3" => "HTI", "ibge" => 332);
        $data[] = array("extension" => ".it", "country" => "Itália", "locale_" => "fr_IT", "locale" => "fr-IT", "acronym2" => "IT", "acronym3" => "ITA", "ibge" => 380);
        $data[] = array("extension" => ".km", "country" => "Comores", "locale_" => "fr_KM", "locale" => "fr-KM", "acronym2" => "KM", "acronym3" => "COM", "ibge" => 174);
        $data[] = array("extension" => ".lb", "country" => "Líbano", "locale_" => "fr_LB", "locale" => "fr-LB", "acronym2" => "LB", "acronym3" => "LBN", "ibge" => 422);
        $data[] = array("extension" => ".lu", "country" => "Luxemburgo", "locale_" => "fr_LU", "locale" => "fr-LU", "acronym2" => "LU", "acronym3" => "LUX", "ibge" => 442);
        $data[] = array("extension" => ".mc", "country" => "Mónaco", "locale_" => "fr_MC", "locale" => "fr-MC", "acronym2" => "MC", "acronym3" => "MCO", "ibge" => 492);
        $data[] = array("extension" => ".mg", "country" => "Madagáscar", "locale_" => "fr_MG", "locale" => "fr-MG", "acronym2" => "MG", "acronym3" => "MDG", "ibge" => 450);
        $data[] = array("extension" => ".ml", "country" => "Mali", "locale_" => "fr_ML", "locale" => "fr-ML", "acronym2" => "ML", "acronym3" => "MLI", "ibge" => 466);
        $data[] = array("extension" => ".mq", "country" => "Martinica", "locale_" => "fr_MQ", "locale" => "fr-MQ", "acronym2" => "MQ", "acronym3" => "MTQ", "ibge" => 474);
        $data[] = array("extension" => ".nc", "country" => "Nova Caledônia", "locale_" => "fr_NC", "locale" => "fr-NC", "acronym2" => "NC", "acronym3" => "NCL", "ibge" => 540);
        $data[] = array("extension" => ".pf", "country" => "Polinésia Francesa", "locale_" => "fr_PF", "locale" => "fr-PF", "acronym2" => "PF", "acronym3" => "PYF", "ibge" => 258);
        $data[] = array("extension" => ".pm", "country" => "Saint-Pierre e Miquelon", "locale_" => "fr_PM", "locale" => "fr-PM", "acronym2" => "PM", "acronym3" => "SPM", "ibge" => 666);
        $data[] = array("extension" => ".re", "country" => "Reunião", "locale_" => "fr_RE", "locale" => "fr-RE", "acronym2" => "RE", "acronym3" => "REU", "ibge" => 638);
        $data[] = array("extension" => ".rw", "country" => "Ruanda", "locale_" => "fr_RW", "locale" => "fr-RW", "acronym2" => "RW", "acronym3" => "RWA", "ibge" => 646);
        $data[] = array("extension" => ".sc", "country" => "Seicheles", "locale_" => "fr_SC", "locale" => "fr-SC", "acronym2" => "SC", "acronym3" => "SYC", "ibge" => 690);
        $data[] = array("extension" => ".td", "country" => "Chade", "locale_" => "fr_TD", "locale" => "fr-TD", "acronym2" => "TD", "acronym3" => "TCD", "ibge" => 148);
        $data[] = array("extension" => ".tg", "country" => "Togo", "locale_" => "fr_TG", "locale" => "fr-TG", "acronym2" => "TG", "acronym3" => "TGO", "ibge" => 768);
        $data[] = array("extension" => ".vu", "country" => "Vanuatu", "locale_" => "fr_VU", "locale" => "fr-VU", "acronym2" => "VU", "acronym3" => "VUT", "ibge" => 548);
        $data[] = array("extension" => ".wf", "country" => "Wallis e Futuna", "locale_" => "fr_WF", "locale" => "fr-WF", "acronym2" => "WF", "acronym3" => "WLF", "ibge" => 876);
        $data[] = array("extension" => ".yt", "country" => "Mayotte", "locale_" => "fr_YT", "locale" => "fr-YT", "acronym2" => "YT", "acronym3" => "MYT", "ibge" => 175);
        $data[] = array("extension" => ".cy", "country" => "Chipre", "locale_" => "el_CY", "locale" => "el-CY", "acronym2" => "CY", "acronym3" => "CYP", "ibge" => 196);
        $data[] = array("extension" => ".gr", "country" => "Grécia", "locale_" => "el_GR", "locale" => "el-GR", "acronym2" => "GR", "acronym3" => "GRC", "ibge" => 300);
        $data[] = array("extension" => ".an", "country" => "Antilhas Holandesas", "locale_" => "en_AN", "locale" => "en-AN", "acronym2" => "AN", "acronym3" => "ANT", "ibge" => 530);
        $data[] = array("extension" => ".ai", "country" => "Anguilla", "locale_" => "en_AI", "locale" => "en-AI", "acronym2" => "AI", "acronym3" => "AIA", "ibge" => 660);
        $data[] = array("extension" => ".as", "country" => "Samoa Americana", "locale_" => "en_AS", "locale" => "en-AS", "acronym2" => "AS", "acronym3" => "ASM", "ibge" => 16);
        $data[] = array("extension" => ".au", "country" => "Austrália", "locale_" => "en_AU", "locale" => "en-AU", "acronym2" => "AU", "acronym3" => "AUS", "ibge" => 36);
        $data[] = array("extension" => ".bb", "country" => "Barbados", "locale_" => "en_BB", "locale" => "en-BB", "acronym2" => "BB", "acronym3" => "BRB", "ibge" => 52);
        $data[] = array("extension" => ".bm", "country" => "Bermudas", "locale_" => "en_BM", "locale" => "en-BM", "acronym2" => "BM", "acronym3" => "BMU", "ibge" => 60);
        $data[] = array("extension" => ".bn", "country" => "Brunei", "locale_" => "en_BN", "locale" => "en-BN", "acronym2" => "BN", "acronym3" => "BRN", "ibge" => 96);
        $data[] = array("extension" => ".bs", "country" => "Bahamas", "locale_" => "en_BS", "locale" => "en-BS", "acronym2" => "BS", "acronym3" => "BHS", "ibge" => 44);
        $data[] = array("extension" => ".bw", "country" => "Botswana", "locale_" => "en_BW", "locale" => "en-BW", "acronym2" => "BW", "acronym3" => "BWA", "ibge" => 72);
        $data[] = array("extension" => ".bz", "country" => "Belize", "locale_" => "en_BZ", "locale" => "en-BZ", "acronym2" => "BZ", "acronym3" => "BLZ", "ibge" => 84);
        $data[] = array("extension" => ".ca", "country" => "Canadá", "locale_" => "en_CA", "locale" => "en-CA", "acronym2" => "CA", "acronym3" => "CAN", "ibge" => 124);
        $data[] = array("extension" => ".ck", "country" => "Ilhas Cook", "locale_" => "en_CK", "locale" => "en-CK", "acronym2" => "CK", "acronym3" => "COK", "ibge" => 184);
        $data[] = array("extension" => ".cm", "country" => "Camarões", "locale_" => "en_CM", "locale" => "en-CM", "acronym2" => "CM", "acronym3" => "CMR", "ibge" => 120);
        $data[] = array("extension" => ".dm", "country" => "República Dominicana", "locale_" => "en_DM", "locale" => "en-DM", "acronym2" => "DM", "acronym3" => "DMA", "ibge" => 212);
        $data[] = array("extension" => ".er", "country" => "Eritreia", "locale_" => "en_ER", "locale" => "en-ER", "acronym2" => "ER", "acronym3" => "ERI", "ibge" => 232);
        $data[] = array("extension" => ".et", "country" => "Etiópia", "locale_" => "en_ET", "locale" => "en-ET", "acronym2" => "ET", "acronym3" => "ETH", "ibge" => 231);
        $data[] = array("extension" => ".fj", "country" => "Fiji", "locale_" => "en_FJ", "locale" => "en-FJ", "acronym2" => "FJ", "acronym3" => "FJI", "ibge" => 242);
        $data[] = array("extension" => ".fk", "country" => "Ilhas Malvinas", "locale_" => "en_FK", "locale" => "en-FK", "acronym2" => "FK", "acronym3" => "FLK", "ibge" => 238);
        $data[] = array("extension" => ".fm", "country" => "Estados Federados da Micronésia", "locale_" => "en_FM", "locale" => "en-FM", "acronym2" => "FM", "acronym3" => "FSM", "ibge" => 583);
        $data[] = array("extension" => ".gb", "country" => "Reino Unido", "locale_" => "en_GB", "locale" => "en-GB", "acronym2" => "GB", "acronym3" => "GBR", "ibge" => 826);
        $data[] = array("extension" => ".gd", "country" => "Granada", "locale_" => "en_GD", "locale" => "en-GD", "acronym2" => "GD", "acronym3" => "GRD", "ibge" => 308);
        $data[] = array("extension" => ".gh", "country" => "Gana", "locale_" => "en_GH", "locale" => "en-GH", "acronym2" => "GH", "acronym3" => "GHA", "ibge" => 288);
        $data[] = array("extension" => ".gi", "country" => "Gibraltar", "locale_" => "en_GI", "locale" => "en-GI", "acronym2" => "GI", "acronym3" => "GIB", "ibge" => 292);
        $data[] = array("extension" => ".gm", "country" => "Gâmbia", "locale_" => "en_GM", "locale" => "en-GM", "acronym2" => "GM", "acronym3" => "GMB", "ibge" => 270);
        $data[] = array("extension" => ".gu", "country" => "Guam", "locale_" => "en_GU", "locale" => "en-GU", "acronym2" => "GU", "acronym3" => "GUM", "ibge" => 316);
        $data[] = array("extension" => ".gy", "country" => "Guiana", "locale_" => "en_GY", "locale" => "en-GY", "acronym2" => "GY", "acronym3" => "GUY", "ibge" => 328);
        $data[] = array("extension" => ".ie", "country" => "Irlanda", "locale_" => "en_IE", "locale" => "en-IE", "acronym2" => "IE", "acronym3" => "IRL", "ibge" => 372);
        $data[] = array("extension" => ".il", "country" => "Israel", "locale_" => "en_IL", "locale" => "en-IL", "acronym2" => "IL", "acronym3" => "ISR", "ibge" => 376);
        $data[] = array("extension" => ".io", "country" => "Território Britânico do Oceano Índico", "locale_" => "en_IO", "locale" => "en-IO", "acronym2" => "IO", "acronym3" => "IOT", "ibge" => 86);
        $data[] = array("extension" => ".jm", "country" => "Jamaica", "locale_" => "en_JM", "locale" => "en-JM", "acronym2" => "JM", "acronym3" => "JAM", "ibge" => 388);
        $data[] = array("extension" => ".ke", "country" => "Quênia", "locale_" => "en_KE", "locale" => "en-KE", "acronym2" => "KE", "acronym3" => "KEN", "ibge" => 404);
        $data[] = array("extension" => ".ki", "country" => "Kiribati", "locale_" => "en_KI", "locale" => "en-KI", "acronym2" => "KI", "acronym3" => "KIR", "ibge" => 296);
        $data[] = array("extension" => ".kn", "country" => "São Cristóvão e Nevis", "locale_" => "en_KN", "locale" => "en-KN", "acronym2" => "KN", "acronym3" => "KNA", "ibge" => 659);
        $data[] = array("extension" => ".ky", "country" => "Ilhas Cayman", "locale_" => "en_KY", "locale" => "en-KY", "acronym2" => "KY", "acronym3" => "CYM", "ibge" => 136);
        $data[] = array("extension" => ".lc", "country" => "Santa Lúcia", "locale_" => "en_LC", "locale" => "en-LC", "acronym2" => "LC", "acronym3" => "LCA", "ibge" => 662);
        $data[] = array("extension" => ".lr", "country" => "Libéria", "locale_" => "en_LR", "locale" => "en-LR", "acronym2" => "LR", "acronym3" => "LBR", "ibge" => 430);
        $data[] = array("extension" => ".ls", "country" => "Lesoto", "locale_" => "en_LS", "locale" => "en-LS", "acronym2" => "LS", "acronym3" => "LSO", "ibge" => 426);
        $data[] = array("extension" => ".mp", "country" => "Marianas Setentrionais", "locale_" => "en_MP", "locale" => "en-MP", "acronym2" => "MP", "acronym3" => "MNP", "ibge" => 580);
        $data[] = array("extension" => ".ms", "country" => "Montserrat", "locale_" => "en_MS", "locale" => "en-MS", "acronym2" => "MS", "acronym3" => "MSR", "ibge" => 500);
        $data[] = array("extension" => ".mt", "country" => "Malta", "locale_" => "en_MT", "locale" => "en-MT", "acronym2" => "MT", "acronym3" => "MLT", "ibge" => 470);
        $data[] = array("extension" => ".mu", "country" => "Maurícia", "locale_" => "en_MU", "locale" => "en-MU", "acronym2" => "MU", "acronym3" => "MUS", "ibge" => 480);
        $data[] = array("extension" => ".mw", "country" => "Malawi", "locale_" => "en_MW", "locale" => "en-MW", "acronym2" => "MW", "acronym3" => "MWI", "ibge" => 454);
        $data[] = array("extension" => ".na", "country" => "Namíbia", "locale_" => "en_NA", "locale" => "en-NA", "acronym2" => "NA", "acronym3" => "NAM", "ibge" => 516);
        $data[] = array("extension" => ".nf", "country" => "Ilha Norfolk", "locale_" => "en_NF", "locale" => "en-NF", "acronym2" => "NF", "acronym3" => "NFK", "ibge" => 574);
        $data[] = array("extension" => ".ng", "country" => "Nigéria", "locale_" => "en_NG", "locale" => "en-NG", "acronym2" => "NG", "acronym3" => "NGA", "ibge" => 566);
        $data[] = array("extension" => ".nr", "country" => "Nauru", "locale_" => "en_NR", "locale" => "en-NR", "acronym2" => "NR", "acronym3" => "NRU", "ibge" => 520);
        $data[] = array("extension" => ".nu", "country" => "Niue", "locale_" => "en_NU", "locale" => "en-NU", "acronym2" => "NU", "acronym3" => "NIU", "ibge" => 570);
        $data[] = array("extension" => ".nz", "country" => "Nova Zelândia", "locale_" => "en_NZ", "locale" => "en-NZ", "acronym2" => "NZ", "acronym3" => "NZL", "ibge" => 554);
        $data[] = array("extension" => ".pg", "country" => "Papua-Nova Guiné", "locale_" => "en_PG", "locale" => "en-PG", "acronym2" => "PG", "acronym3" => "PNG", "ibge" => 598);
        $data[] = array("extension" => ".ph", "country" => "Filipinas", "locale_" => "en_PH", "locale" => "en-PH", "acronym2" => "PH", "acronym3" => "PHL", "ibge" => 608);
        $data[] = array("extension" => ".pk", "country" => "Paquistão", "locale_" => "en_PK", "locale" => "en-PK", "acronym2" => "PK", "acronym3" => "PAK", "ibge" => 586);
        $data[] = array("extension" => ".pn", "country" => "Pitcairn", "locale_" => "en_PN", "locale" => "en-PN", "acronym2" => "PN", "acronym3" => "PCN", "ibge" => 612);
        $data[] = array("extension" => ".pr", "country" => "Porto Rico", "locale_" => "en_PR", "locale" => "en-PR", "acronym2" => "PR", "acronym3" => "PRI", "ibge" => 630);
        $data[] = array("extension" => ".pw", "country" => "Palestina", "locale_" => "en_PW", "locale" => "en-PW", "acronym2" => "PW", "acronym3" => "PLW", "ibge" => 585);
        $data[] = array("extension" => ".rw", "country" => "Ruanda", "locale_" => "en_RW", "locale" => "en-RW", "acronym2" => "RW", "acronym3" => "RWA", "ibge" => 646);
        $data[] = array("extension" => ".sb", "country" => "Ilhas Salomão", "locale_" => "en_SB", "locale" => "en-SB", "acronym2" => "SB", "acronym3" => "SLB", "ibge" => 90);
        $data[] = array("extension" => ".sc", "country" => "Seicheles", "locale_" => "en_SC", "locale" => "en-SC", "acronym2" => "SC", "acronym3" => "SYC", "ibge" => 690);
        $data[] = array("extension" => ".sg", "country" => "Singapura", "locale_" => "en_SG", "locale" => "en-SG", "acronym2" => "SG", "acronym3" => "SGP", "ibge" => 702);
        $data[] = array("extension" => ".sh", "country" => "Santa Helena, Ascensão e Tristão da Cunha", "locale_" => "en_SH", "locale" => "en-SH", "acronym2" => "SH", "acronym3" => "SHN", "ibge" => 654);
        $data[] = array("extension" => ".sl", "country" => "Serra Leoa", "locale_" => "en_SL", "locale" => "en-SL", "acronym2" => "SL", "acronym3" => "SLE", "ibge" => 694);
        $data[] = array("extension" => ".so", "country" => "Somália", "locale_" => "en_SO", "locale" => "en-SO", "acronym2" => "SO", "acronym3" => "SOM", "ibge" => 706);
        $data[] = array("extension" => ".sz", "country" => "Suazilândia", "locale_" => "en_SZ", "locale" => "en-SZ", "acronym2" => "SZ", "acronym3" => "SWZ", "ibge" => 748);
        $data[] = array("extension" => ".tc", "country" => "Turks e Caicos", "locale_" => "en_TC", "locale" => "en-TC", "acronym2" => "TC", "acronym3" => "TCA", "ibge" => 796);
        $data[] = array("extension" => ".tk", "country" => "Toquelau", "locale_" => "en_TK", "locale" => "en-TK", "acronym2" => "TK", "acronym3" => "TKL", "ibge" => 772);
        $data[] = array("extension" => ".to", "country" => "Tonga", "locale_" => "en_TO", "locale" => "en-TO", "acronym2" => "TO", "acronym3" => "TON", "ibge" => 776);
        $data[] = array("extension" => ".tt", "country" => "Trinidad e Tobago", "locale_" => "en_TT", "locale" => "en-TT", "acronym2" => "TT", "acronym3" => "TTO", "ibge" => 780);
        $data[] = array("extension" => ".ug", "country" => "Uganda", "locale_" => "en_UG", "locale" => "en-UG", "acronym2" => "UG", "acronym3" => "UGA", "ibge" => 800);
        $data[] = array("extension" => ".us", "country" => "Estados Unidos", "locale_" => "en_US", "locale" => "en-US", "acronym2" => "US", "acronym3" => "USA", "ibge" => 840);
        $data[] = array("extension" => "net", "country" => "Estados Unidos", "locale_" => "en_US", "locale" => "en-US", "acronym2" => "US", "acronym3" => "USA", "ibge" => 840);
        $data[] = array("extension" => "org", "country" => "Estados Unidos", "locale_" => "en_US", "locale" => "en-US", "acronym2" => "US", "acronym3" => "USA", "ibge" => 840);
        $data[] = array("extension" => "com", "country" => "Estados Unidos", "locale_" => "en_US", "locale" => "en-US", "acronym2" => "US", "acronym3" => "USA", "ibge" => 840);
        $data[] = array("extension" => ".vc", "country" => "São Vicente e Granadinas", "locale_" => "en_VC", "locale" => "en-VC", "acronym2" => "VC", "acronym3" => "VCT", "ibge" => 670);
        $data[] = array("extension" => ".vg", "country" => "Ilhas Virgens Britânicas", "locale_" => "en_VG", "locale" => "en-VG", "acronym2" => "VG", "acronym3" => "VGB", "ibge" => 92);
        $data[] = array("extension" => ".vi", "country" => "Ilhas Virgens Americanas", "locale_" => "en_VI", "locale" => "en-VI", "acronym2" => "VI", "acronym3" => "VIR", "ibge" => 850);
        $data[] = array("extension" => ".vu", "country" => "Vanuatu", "locale_" => "en_VU", "locale" => "en-VU", "acronym2" => "VU", "acronym3" => "VUT", "ibge" => 548);
        $data[] = array("extension" => ".ws", "country" => "Samoa", "locale_" => "en_WS", "locale" => "en-WS", "acronym2" => "WS", "acronym3" => "WSM", "ibge" => 882);
        $data[] = array("extension" => ".za", "country" => "África do Sul", "locale_" => "en_ZA", "locale" => "en-ZA", "acronym2" => "ZA", "acronym3" => "ZAF", "ibge" => 710);
        $data[] = array("extension" => ".zm", "country" => "Zâmbia", "locale_" => "en_ZM", "locale" => "en-ZM", "acronym2" => "ZM", "acronym3" => "ZMB", "ibge" => 894);
        $data[] = array("extension" => ".zw", "country" => "Zimbabwe", "locale_" => "en_ZW", "locale" => "en-ZW", "acronym2" => "ZW", "acronym3" => "ZWE", "ibge" => 716);
        $data[] = array("extension" => ".gb", "country" => "Reino Unido", "locale_" => "ga_GB", "locale" => "ga-GB", "acronym2" => "GB", "acronym3" => "GBR", "ibge" => 826);
        $data[] = array("extension" => ".ie", "country" => "Irlanda", "locale_" => "ga_IE", "locale" => "ga-IE", "acronym2" => "IE", "acronym3" => "IRL", "ibge" => 372);
        $data[] = array("extension" => ".ch", "country" => "Suíça", "locale_" => "it_CH", "locale" => "it-CH", "acronym2" => "CH", "acronym3" => "CHE", "ibge" => 756);
        $data[] = array("extension" => ".hr", "country" => "Croácia", "locale_" => "it_HR", "locale" => "it-HR", "acronym2" => "HR", "acronym3" => "HRV", "ibge" => 191);
        $data[] = array("extension" => ".it", "country" => "Itália", "locale_" => "it_IT", "locale" => "it-IT", "acronym2" => "IT", "acronym3" => "ITA", "ibge" => 380);
        $data[] = array("extension" => ".si", "country" => "Eslovênia", "locale_" => "it_SI", "locale" => "it-SI", "acronym2" => "SI", "acronym3" => "SVN", "ibge" => 705);
        $data[] = array("extension" => ".sm", "country" => "San Marino", "locale_" => "it_SM", "locale" => "it-SM", "acronym2" => "SM", "acronym3" => "SMR", "ibge" => 674);
        $data[] = array("extension" => ".cd", "country" => "República Democrática do Congo", "locale_" => "ln_CD", "locale" => "ln-CD", "acronym2" => "CD", "acronym3" => "COD", "ibge" => 180);
        $data[] = array("extension" => ".cg", "country" => "República do Congo", "locale_" => "ln_CG", "locale" => "ln-CG", "acronym2" => "CG", "acronym3" => "COG", "ibge" => 178);
        $data[] = array("extension" => ".bn", "country" => "Brunei", "locale_" => "ms_BN", "locale" => "ms-BN", "acronym2" => "BN", "acronym3" => "BRN", "ibge" => 96);
        $data[] = array("extension" => ".my", "country" => "Malásia", "locale_" => "ms_MY", "locale" => "ms-MY", "acronym2" => "MY", "acronym3" => "MYS", "ibge" => 458);
        $data[] = array("extension" => ".sg", "country" => "Singapura", "locale_" => "ms_SG", "locale" => "ms-SG", "acronym2" => "SG", "acronym3" => "SGP", "ibge" => 702);
        $data[] = array("extension" => ".an", "country" => "Antilhas Holandesas", "locale_" => "nl_AN", "locale" => "nl-AN", "acronym2" => "AN", "acronym3" => "ANT", "ibge" => 530);
        $data[] = array("extension" => ".aw", "country" => "Aruba", "locale_" => "nl_AW", "locale" => "nl-AW", "acronym2" => "AW", "acronym3" => "ABW", "ibge" => 533);
        $data[] = array("extension" => ".be", "country" => "Bélgica", "locale_" => "nl_BE", "locale" => "nl-BE", "acronym2" => "BE", "acronym3" => "BEL", "ibge" => 56);
        $data[] = array("extension" => ".nl", "country" => "Países Baixos", "locale_" => "nl_NL", "locale" => "nl-NL", "acronym2" => "NL", "acronym3" => "NLD", "ibge" => 528);
        $data[] = array("extension" => ".sr", "country" => "Suriname", "locale_" => "nl_SR", "locale" => "nl-SR", "acronym2" => "SR", "acronym3" => "SUR", "ibge" => 740);
        $data[] = array("extension" => ".in", "country" => "Índia", "locale_" => "ur_IN", "locale" => "ur-IN", "acronym2" => "IN", "acronym3" => "IND", "ibge" => 356);
        $data[] = array("extension" => ".pk", "country" => "Paquistão", "locale_" => "ur_PK", "locale" => "ur-PK", "acronym2" => "PK", "acronym3" => "PAK", "ibge" => 586);
        $data[] = array("extension" => ".hu", "country" => "Hungria", "locale_" => "hu_HU", "locale" => "hu-HU", "acronym2" => "HU", "acronym3" => "HUN", "ibge" => 348);
        $data[] = array("extension" => ".si", "country" => "Eslovênia", "locale_" => "hu_SI", "locale" => "hu-SI", "acronym2" => "SI", "acronym3" => "SVN", "ibge" => 705);
        $data[] = array("extension" => ".bg", "country" => "Bulgária", "locale_" => "tr_BG", "locale" => "tr-BG", "acronym2" => "BG", "acronym3" => "BGR", "ibge" => 100);
        $data[] = array("extension" => ".cy", "country" => "Chipre", "locale_" => "tr_CY", "locale" => "tr-CY", "acronym2" => "CY", "acronym3" => "CYP", "ibge" => 196);
        $data[] = array("extension" => ".tr", "country" => "Turquia", "locale_" => "tr_TR", "locale" => "tr-TR", "acronym2" => "TR", "acronym3" => "TUR", "ibge" => 792);
        $data[] = array("extension" => ".bw", "country" => "Botswana", "locale_" => "tn_BW", "locale" => "tn-BW", "acronym2" => "BW", "acronym3" => "BWA", "ibge" => 72);
        $data[] = array("extension" => ".za", "country" => "África do Sul", "locale_" => "tn_ZA", "locale" => "tn-ZA", "acronym2" => "ZA", "acronym3" => "ZAF", "ibge" => 710);
        $data[] = array("extension" => ".at", "country" => "Áustria", "locale_" => "de_AT", "locale" => "de-AT", "acronym2" => "AT", "acronym3" => "AUT", "ibge" => 40);
        $data[] = array("extension" => ".be", "country" => "Bélgica", "locale_" => "de_BE", "locale" => "de-BE", "acronym2" => "BE", "acronym3" => "BEL", "ibge" => 56);
        $data[] = array("extension" => ".ch", "country" => "Suíça", "locale_" => "de_CH", "locale" => "de-CH", "acronym2" => "CH", "acronym3" => "CHE", "ibge" => 756);
        $data[] = array("extension" => ".de", "country" => "Alemanha", "locale_" => "de_DE", "locale" => "de-DE", "acronym2" => "DE", "acronym3" => "DEU", "ibge" => 276);
        $data[] = array("extension" => ".dk", "country" => "Dinamarca", "locale_" => "de_DK", "locale" => "de-DK", "acronym2" => "DK", "acronym3" => "DNK", "ibge" => 208);
        $data[] = array("extension" => ".li", "country" => "Liechtenstein", "locale_" => "de_LI", "locale" => "de-LI", "acronym2" => "LI", "acronym3" => "LIE", "ibge" => 438);
        $data[] = array("extension" => ".lu", "country" => "Luxemburgo", "locale_" => "de_LU", "locale" => "de-LU", "acronym2" => "LU", "acronym3" => "LUX", "ibge" => 442);
        $data[] = array("extension" => ".in", "country" => "Índia", "locale_" => "ta_IN", "locale" => "ta-IN", "acronym2" => "IN", "acronym3" => "IND", "ibge" => 356);
        $data[] = array("extension" => ".lk", "country" => "Sri Lanka", "locale_" => "ta_LK", "locale" => "ta-LK", "acronym2" => "LK", "acronym3" => "LKA", "ibge" => 144);
        $data[] = array("extension" => ".sg", "country" => "Singapura", "locale_" => "ta_SG", "locale" => "ta-SG", "acronym2" => "SG", "acronym3" => "SGP", "ibge" => 702);
        $data[] = array("extension" => ".sz", "country" => "Suazilândia", "locale_" => "ss_SZ", "locale" => "ss-SZ", "acronym2" => "SZ", "acronym3" => "SWZ", "ibge" => 748);
        $data[] = array("extension" => ".za", "country" => "África do Sul", "locale_" => "ss_ZA", "locale" => "ss-ZA", "acronym2" => "ZA", "acronym3" => "ZAF", "ibge" => 710);
        $data[] = array("extension" => ".ke", "country" => "Quênia", "locale_" => "sw_KE", "locale" => "sw-KE", "acronym2" => "KE", "acronym3" => "KEN", "ibge" => 404);
        $data[] = array("extension" => ".tz", "country" => "Tanzânia", "locale_" => "sw_TZ", "locale" => "sw-TZ", "acronym2" => "TZ", "acronym3" => "TZA", "ibge" => 834);
        $data[] = array("extension" => ".fi", "country" => "Finlândia", "locale_" => "sv_FI", "locale" => "sv-FI", "acronym2" => "FI", "acronym3" => "FIN", "ibge" => 246);
        $data[] = array("extension" => ".se", "country" => "Suécia", "locale_" => "sv_SE", "locale" => "sv-SE", "acronym2" => "SE", "acronym3" => "SWE", "ibge" => 752);
        $data[] = array("extension" => ".ar", "country" => "Argentina", "locale_" => "es_AR", "locale" => "es-AR", "acronym2" => "AR", "acronym3" => "ARG", "ibge" => 32);
        $data[] = array("extension" => ".bo", "country" => "Bolívia", "locale_" => "es_BO", "locale" => "es-BO", "acronym2" => "BO", "acronym3" => "BOL", "ibge" => 68);
        $data[] = array("extension" => ".cl", "country" => "Chile", "locale_" => "es_CL", "locale" => "es-CL", "acronym2" => "CL", "acronym3" => "CHL", "ibge" => 152);
        $data[] = array("extension" => ".co", "country" => "Colômbia", "locale_" => "es_CO", "locale" => "es-CO", "acronym2" => "CO", "acronym3" => "COL", "ibge" => 170);
        $data[] = array("extension" => ".cr", "country" => "Costa Rica", "locale_" => "es_CR", "locale" => "es-CR", "acronym2" => "CR", "acronym3" => "CRI", "ibge" => 188);
        $data[] = array("extension" => ".cu", "country" => "Cuba", "locale_" => "es_CU", "locale" => "es-CU", "acronym2" => "CU", "acronym3" => "CUB", "ibge" => 192);
        $data[] = array("extension" => ".do", "country" => "República Dominicana", "locale_" => "es_DO", "locale" => "es-DO", "acronym2" => "DO", "acronym3" => "DOM", "ibge" => 214);
        $data[] = array("extension" => ".ec", "country" => "Equador", "locale_" => "es_EC", "locale" => "es-EC", "acronym2" => "EC", "acronym3" => "ECU", "ibge" => 218);
        $data[] = array("extension" => ".es", "country" => "Espanha", "locale_" => "es_ES", "locale" => "es-ES", "acronym2" => "ES", "acronym3" => "ESP", "ibge" => 724);
        $data[] = array("extension" => ".gq", "country" => "Guiné Equatorial", "locale_" => "es_GQ", "locale" => "es-GQ", "acronym2" => "GQ", "acronym3" => "GNQ", "ibge" => 226);
        $data[] = array("extension" => ".gt", "country" => "Guatemala", "locale_" => "es_GT", "locale" => "es-GT", "acronym2" => "GT", "acronym3" => "GTM", "ibge" => 320);
        $data[] = array("extension" => ".hn", "country" => "Honduras", "locale_" => "es_HN", "locale" => "es-HN", "acronym2" => "HN", "acronym3" => "HND", "ibge" => 340);
        $data[] = array("extension" => ".mx", "country" => "México", "locale_" => "es_MX", "locale" => "es-MX", "acronym2" => "MX", "acronym3" => "MEX", "ibge" => 484);
        $data[] = array("extension" => ".ni", "country" => "Nicarágua", "locale_" => "es_NI", "locale" => "es-NI", "acronym2" => "NI", "acronym3" => "NIC", "ibge" => 558);
        $data[] = array("extension" => ".pa", "country" => "Panamá", "locale_" => "es_PA", "locale" => "es-PA", "acronym2" => "PA", "acronym3" => "PAN", "ibge" => 591);
        $data[] = array("extension" => ".pe", "country" => "Peru", "locale_" => "es_PE", "locale" => "es-PE", "acronym2" => "PE", "acronym3" => "PER", "ibge" => 604);
        $data[] = array("extension" => ".pr", "country" => "Porto Rico", "locale_" => "es_PR", "locale" => "es-PR", "acronym2" => "PR", "acronym3" => "PRI", "ibge" => 630);
        $data[] = array("extension" => ".py", "country" => "Paraguai", "locale_" => "es_PY", "locale" => "es-PY", "acronym2" => "PY", "acronym3" => "PRY", "ibge" => 600);
        $data[] = array("extension" => ".sv", "country" => "El Salvador", "locale_" => "es_SV", "locale" => "es-SV", "acronym2" => "SV", "acronym3" => "SLV", "ibge" => 222);
        $data[] = array("extension" => ".us", "country" => "Estados Unidos", "locale_" => "es_US", "locale" => "es-US", "acronym2" => "US", "acronym3" => "USA", "ibge" => 840);
        $data[] = array("extension" => ".uy", "country" => "Uruguai", "locale_" => "es_UY", "locale" => "es-UY", "acronym2" => "UY", "acronym3" => "URY", "ibge" => 858);
        $data[] = array("extension" => ".ve", "country" => "Venezuela", "locale_" => "es_VE", "locale" => "es-VE", "acronym2" => "VE", "acronym3" => "VEN", "ibge" => 862);
        $data[] = array("extension" => ".in", "country" => "Índia", "locale_" => "hi_IN", "locale" => "hi-IN", "acronym2" => "IN", "acronym3" => "IND", "ibge" => 356);
        $data[] = array("extension" => ".pk", "country" => "Paquistão", "locale_" => "hi_PK", "locale" => "hi-PK", "acronym2" => "PK", "acronym3" => "PAK", "ibge" => 586);
        $data[] = array("extension" => ".ba", "country" => "Bósnia e Herzegovina", "locale_" => "sr_BA", "locale" => "sr-BA", "acronym2" => "BA", "acronym3" => "BIH", "ibge" => 70);
        $data[] = array("extension" => ".yu", "country" => "Sérvia e Montenegro", "locale_" => "sr_YU", "locale" => "sr-YU", "acronym2" => "YU", "acronym3" => "BIH", "ibge" => 70);
        $data[] = array("extension" => ".md", "country" => "Moldávia", "locale_" => "ro_MD", "locale" => "ro-MD", "acronym2" => "MD", "acronym3" => "MDA", "ibge" => 498);
        $data[] = array("extension" => ".ro", "country" => "Roménia", "locale_" => "ro_RO", "locale" => "ro-RO", "acronym2" => "RO", "acronym3" => "ROM", "ibge" => 642);
        $data[] = array("extension" => ".ao", "country" => "Angola", "locale_" => "pt_AO", "locale" => "pt-AO", "acronym2" => "AO", "acronym3" => "AGO", "ibge" => 24);
        $data[] = array("extension" => ".br", "country" => "Brasil", "locale_" => "pt_BR", "locale" => "pt-BR", "acronym2" => "BR", "acronym3" => "BRA", "ibge" => 76);
        $data[] = array("extension" => ".cv", "country" => "Cabo Verde Cabo Verde", "locale_" => "pt_CV", "locale" => "pt-CV", "acronym2" => "CV", "acronym3" => "CPV", "ibge" => 132);
        $data[] = array("extension" => ".gw", "country" => "Guiné-Bissau", "locale_" => "pt_GW", "locale" => "pt-GW", "acronym2" => "GW", "acronym3" => "GNB", "ibge" => 624);
        $data[] = array("extension" => ".mz", "country" => "Moçambique", "locale_" => "pt_MZ", "locale" => "pt-MZ", "acronym2" => "MZ", "acronym3" => "MOZ", "ibge" => 508);
        $data[] = array("extension" => ".pt", "country" => "Portugal", "locale_" => "pt_PT", "locale" => "pt-PT", "acronym2" => "PT", "acronym3" => "PRT", "ibge" => 620);
        $data[] = array("extension" => ".st", "country" => "São Tomé e Príncipe", "locale_" => "pt_ST", "locale" => "pt-ST", "acronym2" => "ST", "acronym3" => "STP", "ibge" => 678);
        $data[] = array("extension" => ".tl", "country" => "Timor-Leste", "locale_" => "pt_TL", "locale" => "pt-TL", "acronym2" => "TL", "acronym3" => "STP", "ibge" => 678);


        $key = array_search($filter->getValue(), array_column($data, $filter->getColumn()));

        if (!$key) {
            return false;
        }

        $country = new Country();
        $country->setAcronym2($data[$key]['acronym2']);
        $country->setAcronym3($data[$key]['acronym3']);
        $country->setCountry($data[$key]['country']);
        $country->setExtension($data[$key]['extension']);
        $country->setIbge($data[$key]['ibge']);
        $country->setLocale($data[$key]['locale']);
        $country->setLocale_($data[$key]['locale_']);

        if ($filter->getSessionActive()) {
            $_SESSION[self::$sessionName] = serialize($country);
        }
        return $country;
    }

}
