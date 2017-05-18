<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx->addPackage('startpage', MODX_CORE_PATH . 'components/startpage/model/');
            $cities = '{"2":{"city":"\u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433","city_en":"Saint Petersburg"},"4":{"city":"\u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434","city_en":"Belgorod"},"5":{"city":"\u0418\u0432\u0430\u043d\u043e\u0432\u043e","city_en":"Ivanovo"},"6":{"city":"\u041a\u0430\u043b\u0443\u0433\u0430","city_en":"Kaluga"},"7":{"city":"\u041a\u043e\u0441\u0442\u0440\u043e\u043c\u0430","city_en":"Kostroma"},"8":{"city":"\u041a\u0443\u0440\u0441\u043a","city_en":"Kursk"},"9":{"city":"\u041b\u0438\u043f\u0435\u0446\u043a","city_en":"Lipetsk"},"10":{"city":"\u041e\u0440\u0435\u043b","city_en":"Orel"},"11":{"city":"\u0420\u044f\u0437\u0430\u043d\u044c","city_en":"Ryazan"},"12":{"city":"\u0421\u043c\u043e\u043b\u0435\u043d\u0441\u043a","city_en":"Smolensk"},"13":{"city":"\u0422\u0430\u043c\u0431\u043e\u0432","city_en":"Tambov"},"14":{"city":"\u0422\u0432\u0435\u0440\u044c","city_en":"Tver"},"15":{"city":"\u0422\u0443\u043b\u0430","city_en":"Tula"},"16":{"city":"\u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","city_en":"Yaroslavl"},"18":{"city":"\u041f\u0435\u0442\u0440\u043e\u0437\u0430\u0432\u043e\u0434\u0441\u043a","city_en":"Petrozavodsk"},"19":{"city":"\u0421\u044b\u043a\u0442\u044b\u0432\u043a\u0430\u0440","city_en":"Syktyvkar"},"20":{"city":"\u0410\u0440\u0445\u0430\u043d\u0433\u0435\u043b\u044c\u0441\u043a","city_en":"Arhangelsk"},"21":{"city":"\u0412\u043e\u043b\u043e\u0433\u0434\u0430","city_en":"Vologda"},"22":{"city":"\u041a\u0430\u043b\u0438\u043d\u0438\u043d\u0433\u0440\u0430\u0434","city_en":"Kaliningrad"},"23":{"city":"\u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a","city_en":"Murmansk"},"24":{"city":"\u0412\u0435\u043b\u0438\u043a\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","city_en":"Veliky Novgorod"},"25":{"city":"\u041f\u0441\u043a\u043e\u0432","city_en":"Pskov"},"28":{"city":"\u041c\u0430\u0445\u0430\u0447\u043a\u0430\u043b\u0430","city_en":"Makhachkala"},"30":{"city":"\u041d\u0430\u043b\u044c\u0447\u0438\u043a","city_en":"Nalchik"},"33":{"city":"\u0412\u043b\u0430\u0434\u0438\u043a\u0430\u0432\u043a\u0430\u0437","city_en":"Vladikavkaz"},"35":{"city":"\u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440","city_en":"Krasnodar"},"36":{"city":"\u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c","city_en":"Stavropol"},"37":{"city":"\u0410\u0441\u0442\u0440\u0430\u0445\u0430\u043d\u044c","city_en":"Astrahan"},"38":{"city":"\u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434","city_en":"Volgograd"},"39":{"city":"\u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443","city_en":"Rostov-na-Donu"},"41":{"city":"\u0419\u043e\u0448\u043a\u0430\u0440-\u041e\u043b\u0430","city_en":"Yoshkar-Ola"},"42":{"city":"\u0421\u0430\u0440\u0430\u043d\u0441\u043a","city_en":"Saransk"},"43":{"city":"\u041a\u0430\u0437\u0430\u043d\u044c","city_en":"Kazan"},"44":{"city":"\u0418\u0436\u0435\u0432\u0441\u043a","city_en":"Izhevsk"},"45":{"city":"\u0427\u0435\u0431\u043e\u043a\u0441\u0430\u0440\u044b","city_en":"Cheboksary"},"46":{"city":"\u041a\u0438\u0440\u043e\u0432","city_en":"Kirov"},"47":{"city":"\u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","city_en":"Nizhny Novgorod"},"48":{"city":"\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433","city_en":"Orenburg"},"49":{"city":"\u041f\u0435\u043d\u0437\u0430","city_en":"Penza"},"50":{"city":"\u041f\u0435\u0440\u043c\u044c","city_en":"Perm"},"51":{"city":"\u0421\u0430\u043c\u0430\u0440\u0430","city_en":"Samara"},"53":{"city":"\u041a\u0443\u0440\u0433\u0430\u043d","city_en":"Kurgan"},"54":{"city":"\u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433","city_en":"Yekaterinburg"},"55":{"city":"\u0422\u044e\u043c\u0435\u043d\u044c","city_en":"Tyumen"},"56":{"city":"\u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a","city_en":"Chelyabinsk"},"57":{"city":"\u0425\u0430\u043d\u0442\u044b-\u041c\u0430\u043d\u0441\u0438\u0439\u0441\u043a","city_en":"Khanty-Mansiysk"},"58":{"city":"\u0421\u0430\u043b\u0435\u0445\u0430\u0440\u0434","city_en":"Salekhard"},"62":{"city":"\u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a","city_en":"Krasnoyarsk"},"63":{"city":"\u0418\u0440\u043a\u0443\u0442\u0441\u043a","city_en":"Irkutsk"},"64":{"city":"\u041a\u0435\u043c\u0435\u0440\u043e\u0432\u043e","city_en":"Kemerovo"},"65":{"city":"\u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a","city_en":"Novosibirsk"},"66":{"city":"\u041e\u043c\u0441\u043a","city_en":"Omsk"},"67":{"city":"\u0422\u043e\u043c\u0441\u043a","city_en":"Tomsk"},"68":{"city":"\u0427\u0438\u0442\u0430","city_en":"Chita"},"73":{"city":"\u0414\u0430\u043b\u044c\u043d\u0438\u0439 \u0412\u043e\u0441\u0442\u043e\u043a","city_en":""},"74":{"city":"\u042f\u043a\u0443\u0442\u0441\u043a","city_en":"Yakutsk"},"75":{"city":"\u0412\u043b\u0430\u0434\u0438\u0432\u043e\u0441\u0442\u043e\u043a","city_en":"Vladivostok"},"76":{"city":"\u0425\u0430\u0431\u0430\u0440\u043e\u0432\u0441\u043a","city_en":"Khabarovsk"},"77":{"city":"\u0411\u043b\u0430\u0433\u043e\u0432\u0435\u0449\u0435\u043d\u0441\u043a","city_en":"Blagoveshchensk"},"79":{"city":"\u041c\u0430\u0433\u0430\u0434\u0430\u043d","city_en":"Magadan"},"80":{"city":"\u042e\u0436\u043d\u043e-\u0421\u0430\u0445\u0430\u043b\u0438\u043d\u0441\u043a","city_en":"Sakhalinsk"},"86":{"city":"\u0410\u0442\u043b\u0430\u043d\u0442\u0430","city_en":"Atlanta"},"87":{"city":"\u0412\u0430\u0448\u0438\u043d\u0433\u0442\u043e\u043d","city_en":"Washington"},"89":{"city":"\u0414\u0435\u0442\u0440\u043e\u0439\u0442","city_en":"Detroit"},"90":{"city":"\u0421\u0430\u043d-\u0424\u0440\u0430\u043d\u0446\u0438\u0441\u043a\u043e","city_en":"San Francisco"},"91":{"city":"\u0421\u0438\u044d\u0442\u043b","city_en":"Seattle"},"97":{"city":"\u0413\u0435\u0439\u0434\u0435\u043b\u044c\u0431\u0435\u0440\u0433","city_en":"Heidelberg"},"98":{"city":"\u041a\u0435\u043b\u044c\u043d","city_en":"Cologne"},"99":{"city":"\u041c\u044e\u043d\u0445\u0435\u043d","city_en":"Munich"},"100":{"city":"\u0424\u0440\u0430\u043d\u043a\u0444\u0443\u0440\u0442-\u043d\u0430-\u041c\u0430\u0439\u043d\u0435","city_en":"Frankfurt am Main"},"101":{"city":"\u0428\u0442\u0443\u0442\u0433\u0430\u0440\u0442","city_en":"Stuttgart"},"129":{"city":"\u0411\u0435\u044d\u0440-\u0428\u0435\u0432\u0430","city_en":"Beer-Sheva"},"130":{"city":"\u0418\u0435\u0440\u0443\u0441\u0430\u043b\u0438\u043c","city_en":"Jerusalem"},"131":{"city":"\u0422\u0435\u043b\u044c-\u0410\u0432\u0438\u0432","city_en":"Tel Aviv"},"132":{"city":"\u0425\u0430\u0439\u0444\u0430","city_en":"Haifa"},"141":{"city":"\u0414\u043d\u0435\u043f\u0440","city_en":"Dnipro"},"142":{"city":"\u0414\u043e\u043d\u0435\u0446\u043a","city_en":"Donetsk"},"143":{"city":"\u041a\u0438\u0435\u0432","city_en":"Kyiv"},"144":{"city":"\u041b\u044c\u0432\u043e\u0432","city_en":"Lviv"},"145":{"city":"\u041e\u0434\u0435\u0441\u0441\u0430","city_en":"Odesa"},"146":{"city":"\u0421\u0438\u043c\u0444\u0435\u0440\u043e\u043f\u043e\u043b\u044c","city_en":"Simferopol"},"147":{"city":"\u0425\u0430\u0440\u044c\u043a\u043e\u0432","city_en":"Kharkiv"},"148":{"city":"\u041d\u0438\u043a\u043e\u043b\u0430\u0435\u0432","city_en":"Mykolaiv"},"153":{"city":"\u0411\u0440\u0435\u0441\u0442","city_en":"Brest"},"154":{"city":"\u0412\u0438\u0442\u0435\u0431\u0441\u043a","city_en":"Vitebsk"},"155":{"city":"\u0413\u043e\u043c\u0435\u043b\u044c","city_en":"Gomel"},"157":{"city":"\u041c\u0438\u043d\u0441\u043a","city_en":"Minsk"},"158":{"city":"\u041c\u043e\u0433\u0438\u043b\u0435\u0432","city_en":"Mogilev"},"162":{"city":"\u0410\u043b\u043c\u0430\u0442\u044b","city_en":"Almaty"},"163":{"city":"\u0410\u0441\u0442\u0430\u043d\u0430","city_en":"Astana"},"164":{"city":"\u041a\u0430\u0440\u0430\u0433\u0430\u043d\u0434\u0430","city_en":"Karaganda"},"165":{"city":"\u0421\u0435\u043c\u0435\u0439","city_en":"Semey"},"172":{"city":"\u0423\u0444\u0430","city_en":"Ufa"},"177":{"city":"\u0411\u0435\u0440\u043b\u0438\u043d","city_en":"Berlin"},"178":{"city":"\u0413\u0430\u043c\u0431\u0443\u0440\u0433","city_en":"Hamburg"},"190":{"city":"\u041f\u0430\u0432\u043b\u043e\u0434\u0430\u0440","city_en":"Pavlodar"},"191":{"city":"\u0411\u0440\u044f\u043d\u0441\u043a","city_en":"Bryansk"},"192":{"city":"\u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440","city_en":"Vladimir"},"193":{"city":"\u0412\u043e\u0440\u043e\u043d\u0435\u0436","city_en":"Voronezh"},"194":{"city":"\u0421\u0430\u0440\u0430\u0442\u043e\u0432","city_en":"Saratov"},"195":{"city":"\u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a","city_en":"Ulyanovsk"},"197":{"city":"\u0411\u0430\u0440\u043d\u0430\u0443\u043b","city_en":"Barnaul"},"198":{"city":"\u0423\u043b\u0430\u043d-\u0423\u0434\u044d","city_en":"Ulan-Ude"},"200":{"city":"\u041b\u043e\u0441-\u0410\u043d\u0434\u0436\u0435\u043b\u0435\u0441","city_en":"Los Angeles"},"202":{"city":"\u041d\u044c\u044e-\u0419\u043e\u0440\u043a","city_en":"New York"},"213":{"city":"\u041c\u043e\u0441\u043a\u0432\u0430","city_en":"Moscow"},"214":{"city":"\u0414\u043e\u043b\u0433\u043e\u043f\u0440\u0443\u0434\u043d\u044b\u0439","city_en":"Dolgoprudniy"},"215":{"city":"\u0414\u0443\u0431\u043d\u0430","city_en":"Dubna"},"217":{"city":"\u041f\u0443\u0449\u0438\u043d\u043e","city_en":"Pushino"},"219":{"city":"\u0427\u0435\u0440\u043d\u043e\u0433\u043e\u043b\u043e\u0432\u043a\u0430","city_en":"Chernogolovka"},"221":{"city":"\u0427\u0438\u043c\u043a\u0435\u043d\u0442","city_en":"Chimkent"},"222":{"city":"\u041b\u0443\u0433\u0430\u043d\u0441\u043a","city_en":"Luhansk"},"223":{"city":"\u0411\u043e\u0441\u0442\u043e\u043d","city_en":"Boston"},"235":{"city":"\u041c\u0430\u0433\u043d\u0438\u0442\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Magnitogorsk"},"236":{"city":"\u041d\u0430\u0431\u0435\u0440\u0435\u0436\u043d\u044b\u0435 \u0427\u0435\u043b\u043d\u044b","city_en":"Naberezhnie Chelny"},"237":{"city":"\u041d\u043e\u0432\u043e\u043a\u0443\u0437\u043d\u0435\u0446\u043a","city_en":"Novokuznetsk"},"238":{"city":"\u041d\u043e\u0432\u043e\u0447\u0435\u0440\u043a\u0430\u0441\u0441\u043a","city_en":"Novocherkassk"},"239":{"city":"\u0421\u043e\u0447\u0438","city_en":"Sochi"},"240":{"city":"\u0422\u043e\u043b\u044c\u044f\u0442\u0442\u0438","city_en":"Tolyatti"},"959":{"city":"\u0421\u0435\u0432\u0430\u0441\u0442\u043e\u043f\u043e\u043b\u044c","city_en":"Sevastopol"},"960":{"city":"\u0417\u0430\u043f\u043e\u0440\u043e\u0436\u044c\u0435","city_en":"Zaporizhia"},"961":{"city":"\u0425\u043c\u0435\u043b\u044c\u043d\u0438\u0446\u043a\u0438\u0439","city_en":"Khmelnytskyi"},"962":{"city":"\u0425\u0435\u0440\u0441\u043e\u043d","city_en":"Kherson"},"963":{"city":"\u0412\u0438\u043d\u043d\u0438\u0446\u0430","city_en":"Vinnytsia"},"964":{"city":"\u041f\u043e\u043b\u0442\u0430\u0432\u0430","city_en":"Poltava"},"965":{"city":"\u0421\u0443\u043c\u044b","city_en":"Sumy"},"966":{"city":"\u0427\u0435\u0440\u043d\u0438\u0433\u043e\u0432","city_en":"Chernihiv"},"967":{"city":"\u041e\u0431\u043d\u0438\u043d\u0441\u043a","city_en":"Obninsk"},"968":{"city":"\u0427\u0435\u0440\u0435\u043f\u043e\u0432\u0435\u0446","city_en":"Cherepovets"},"969":{"city":"\u0412\u044b\u0431\u043e\u0440\u0433","city_en":"Vyborg"},"970":{"city":"\u041d\u043e\u0432\u043e\u0440\u043e\u0441\u0441\u0438\u0439\u0441\u043a","city_en":"Novorossiysk"},"971":{"city":"\u0422\u0430\u0433\u0430\u043d\u0440\u043e\u0433","city_en":"Taganrog"},"972":{"city":"\u0414\u0437\u0435\u0440\u0436\u0438\u043d\u0441\u043a","city_en":"Dzerzhinsk"},"973":{"city":"\u0421\u0443\u0440\u0433\u0443\u0442","city_en":"Surgut"},"974":{"city":"\u041d\u0430\u0445\u043e\u0434\u043a\u0430","city_en":"Nahodka"},"975":{"city":"\u0411\u0438\u0439\u0441\u043a","city_en":"Biysk"},"976":{"city":"\u0411\u0440\u0430\u0442\u0441\u043a","city_en":"Bratsk"},"1058":{"city":"\u0422\u0443\u0430\u043f\u0441\u0435","city_en":"Tuapse"},"1091":{"city":"\u041d\u0438\u0436\u043d\u0435\u0432\u0430\u0440\u0442\u043e\u0432\u0441\u043a","city_en":"Nizhnevartovsk"},"1092":{"city":"\u041d\u0430\u0437\u0440\u0430\u043d\u044c","city_en":"Nazran"},"1093":{"city":"\u041c\u0430\u0439\u043a\u043e\u043f","city_en":"Maykop"},"1094":{"city":"\u042d\u043b\u0438\u0441\u0442\u0430","city_en":"Elista"},"1095":{"city":"\u0410\u0431\u0430\u043a\u0430\u043d","city_en":"Abakan"},"1104":{"city":"\u0427\u0435\u0440\u043a\u0435\u0441\u0441\u043a","city_en":"Cherkessk"},"1106":{"city":"\u0413\u0440\u043e\u0437\u043d\u044b\u0439","city_en":"Grozniy"},"1107":{"city":"\u0410\u043d\u0430\u043f\u0430","city_en":"Anapa"},"10274":{"city":"\u0413\u0440\u043e\u0434\u043d\u043e","city_en":"Grodno"},"10303":{"city":"\u0422\u0430\u043b\u0434\u044b\u043a\u043e\u0440\u0433\u0430\u043d","city_en":"Taldikorgan"},"10306":{"city":"\u0423\u0441\u0442\u044c-\u041a\u0430\u043c\u0435\u043d\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Ust-Kamenogorsk"},"10313":{"city":"\u041a\u0438\u0448\u0438\u043d\u0435\u0432","city_en":"Kishinev"},"10314":{"city":"\u0411\u0435\u043b\u044c\u0446\u044b","city_en":"Beltsi"},"10315":{"city":"\u0411\u0435\u043d\u0434\u0435\u0440\u044b","city_en":"Bender"},"10317":{"city":"\u0422\u0438\u0440\u0430\u0441\u043f\u043e\u043b\u044c","city_en":"Tiraspol"},"10343":{"city":"\u0416\u0438\u0442\u043e\u043c\u0438\u0440","city_en":"Zhytomyr"},"10345":{"city":"\u0418\u0432\u0430\u043d\u043e-\u0424\u0440\u0430\u043d\u043a\u043e\u0432\u0441\u043a","city_en":"Ivano-Frankivsk"},"10347":{"city":"\u041a\u0440\u0438\u0432\u043e\u0439 \u0420\u043e\u0433","city_en":"Kryvyi Rih"},"10355":{"city":"\u0420\u043e\u0432\u043d\u043e","city_en":"Rivne"},"10357":{"city":"\u0422\u0435\u0440\u043d\u043e\u043f\u043e\u043b\u044c","city_en":"Ternopil"},"10358":{"city":"\u0423\u0436\u0433\u043e\u0440\u043e\u0434","city_en":"Uzhhorod"},"10363":{"city":"\u0427\u0435\u0440\u043a\u0430\u0441\u0441\u044b","city_en":"Cherkasy"},"10365":{"city":"\u0427\u0435\u0440\u043d\u043e\u0432\u0446\u044b","city_en":"Chernivtsi"},"10366":{"city":"\u041c\u0430\u0440\u0438\u0443\u043f\u043e\u043b\u044c","city_en":"Mariupol"},"10367":{"city":"\u041c\u0435\u043b\u0438\u0442\u043e\u043f\u043e\u043b\u044c","city_en":"Melitopol"},"10369":{"city":"\u0411\u0435\u043b\u0430\u044f \u0426\u0435\u0440\u043a\u043e\u0432\u044c","city_en":"Bila Tserkva"},"10649":{"city":"\u0421\u0442\u0430\u0440\u044b\u0439 \u041e\u0441\u043a\u043e\u043b","city_en":"Stariy Oskol"},"10656":{"city":"\u0410\u043b\u0435\u043a\u0441\u0430\u043d\u0434\u0440\u043e\u0432","city_en":"Aleksandrov"},"10661":{"city":"\u0413\u0443\u0441\u044c-\u0425\u0440\u0443\u0441\u0442\u0430\u043b\u044c\u043d\u044b\u0439","city_en":"Gus-Chrustalniy"},"10664":{"city":"\u041a\u043e\u0432\u0440\u043e\u0432","city_en":"Kovrov"},"10668":{"city":"\u041c\u0443\u0440\u043e\u043c","city_en":"Murom"},"10671":{"city":"\u0421\u0443\u0437\u0434\u0430\u043b\u044c","city_en":"Suzdal"},"10716":{"city":"\u0411\u0430\u043b\u0430\u0448\u0438\u0445\u0430","city_en":"Balashiha"},"10719":{"city":"\u0412\u0438\u0434\u043d\u043e\u0435","city_en":"Vidnoe"},"10723":{"city":"\u0414\u043c\u0438\u0442\u0440\u043e\u0432","city_en":"Dmitrov"},"10725":{"city":"\u0414\u043e\u043c\u043e\u0434\u0435\u0434\u043e\u0432\u043e","city_en":"Domodedovo"},"10733":{"city":"\u041a\u043b\u0438\u043d","city_en":"Klin"},"10734":{"city":"\u041a\u043e\u043b\u043e\u043c\u043d\u0430","city_en":"Kolomna"},"10735":{"city":"\u041a\u0440\u0430\u0441\u043d\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Krasnogorsk"},"10738":{"city":"\u041b\u044e\u0431\u0435\u0440\u0446\u044b","city_en":"Lubercy"},"10740":{"city":"\u041c\u044b\u0442\u0438\u0449\u0438","city_en":"Mytischi"},"10742":{"city":"\u041d\u043e\u0433\u0438\u043d\u0441\u043a","city_en":"Noginsk"},"10743":{"city":"\u041e\u0434\u0438\u043d\u0446\u043e\u0432\u043e","city_en":"Odincovo"},"10745":{"city":"\u041e\u0440\u0435\u0445\u043e\u0432\u043e-\u0417\u0443\u0435\u0432\u043e","city_en":"Orehovo-Zuevo"},"10746":{"city":"\u041f\u0430\u0432\u043b\u043e\u0432\u0441\u043a\u0438\u0439 \u041f\u043e\u0441\u0430\u0434","city_en":"Pavlovskiy Posad"},"10747":{"city":"\u041f\u043e\u0434\u043e\u043b\u044c\u0441\u043a","city_en":"Podolsk"},"10748":{"city":"\u041f\u0443\u0448\u043a\u0438\u043d\u043e","city_en":"Pushkino"},"10750":{"city":"\u0420\u0430\u043c\u0435\u043d\u0441\u043a\u043e\u0435","city_en":"Ramenskoe"},"10752":{"city":"\u0421\u0435\u0440\u0433\u0438\u0435\u0432 \u041f\u043e\u0441\u0430\u0434","city_en":"Sergiev Posad"},"10754":{"city":"\u0421\u0435\u0440\u043f\u0443\u0445\u043e\u0432","city_en":"Serpuhov"},"10755":{"city":"\u0421\u043e\u043b\u043d\u0435\u0447\u043d\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Solnechnogorsk"},"10756":{"city":"\u0421\u0442\u0443\u043f\u0438\u043d\u043e","city_en":"Stupino"},"10758":{"city":"\u0425\u0438\u043c\u043a\u0438","city_en":"Himki"},"10761":{"city":"\u0427\u0435\u0445\u043e\u0432","city_en":"Chehov"},"10765":{"city":"\u0429\u0435\u043b\u043a\u043e\u0432\u043e","city_en":"Shelkovo"},"10820":{"city":"\u0420\u0436\u0435\u0432","city_en":"Rzhev"},"10830":{"city":"\u041d\u043e\u0432\u043e\u043c\u043e\u0441\u043a\u043e\u0432\u0441\u043a","city_en":"Novomoskovsk"},"10837":{"city":"\u041f\u0435\u0440\u0435\u0441\u043b\u0430\u0432\u043b\u044c","city_en":"Pereslavl-Zalesskiy"},"10838":{"city":"\u0420\u043e\u0441\u0442\u043e\u0432","city_en":"Rostov"},"10839":{"city":"\u0420\u044b\u0431\u0438\u043d\u0441\u043a","city_en":"Rybinsk"},"10840":{"city":"\u0423\u0433\u043b\u0438\u0447","city_en":"Uglich"},"10849":{"city":"\u0421\u0435\u0432\u0435\u0440\u043e\u0434\u0432\u0438\u043d\u0441\u043a","city_en":"Severodvinsk"},"10867":{"city":"\u0413\u0430\u0442\u0447\u0438\u043d\u0430","city_en":"Gatchina"},"10894":{"city":"\u0410\u043f\u0430\u0442\u0438\u0442\u044b","city_en":"Apatity"},"10928":{"city":"\u0412\u0435\u043b\u0438\u043a\u0438\u0435 \u041b\u0443\u043a\u0438","city_en":"Velikie Luky"},"10937":{"city":"\u0421\u043e\u0440\u0442\u0430\u0432\u0430\u043b\u0430","city_en":"Sortavala"},"10945":{"city":"\u0423\u0445\u0442\u0430","city_en":"Uhta"},"10951":{"city":"\u0412\u043e\u043b\u0436\u0441\u043a\u0438\u0439","city_en":"Volzhskiy"},"10987":{"city":"\u0410\u0440\u043c\u0430\u0432\u0438\u0440","city_en":"Armavir"},"10990":{"city":"\u0413\u0435\u043b\u0435\u043d\u0434\u0436\u0438\u043a","city_en":"Gelendzhik"},"10993":{"city":"\u0415\u0439\u0441\u043a","city_en":"Yesk"},"11036":{"city":"\u0412\u043e\u043b\u0433\u043e\u0434\u043e\u043d\u0441\u043a","city_en":"Volgodonsk"},"11043":{"city":"\u041a\u0430\u043c\u0435\u043d\u0441\u043a-\u0428\u0430\u0445\u0442\u0438\u043d\u0441\u043a\u0438\u0439","city_en":"Kamensk-Shakhtinsky"},"11053":{"city":"\u0428\u0430\u0445\u0442\u044b","city_en":"Shakhty"},"11057":{"city":"\u0415\u0441\u0441\u0435\u043d\u0442\u0443\u043a\u0438","city_en":"Essentuky"},"11062":{"city":"\u041a\u0438\u0441\u043b\u043e\u0432\u043e\u0434\u0441\u043a","city_en":"Kislovodsk"},"11063":{"city":"\u041c\u0438\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0435 \u0412\u043e\u0434\u044b","city_en":"Mineralniye Vodi"},"11064":{"city":"\u041d\u0435\u0432\u0438\u043d\u043d\u043e\u043c\u044b\u0441\u0441\u043a","city_en":"Nevinnomissk"},"11067":{"city":"\u041f\u044f\u0442\u0438\u0433\u043e\u0440\u0441\u043a","city_en":"Pyatigorsk"},"11071":{"city":"\u041a\u0438\u0440\u043e\u0432\u043e-\u0427\u0435\u043f\u0435\u0446\u043a","city_en":"Kirovo-Chepetsk"},"11080":{"city":"\u0410\u0440\u0437\u0430\u043c\u0430\u0441","city_en":"Arzamas"},"11083":{"city":"\u0421\u0430\u0440\u043e\u0432","city_en":"Sarov"},"11091":{"city":"\u041e\u0440\u0441\u043a","city_en":"Orsk"},"11110":{"city":"\u0421\u043e\u043b\u0438\u043a\u0430\u043c\u0441\u043a","city_en":"Solikamsk"},"11114":{"city":"\u041d\u0435\u0444\u0442\u0435\u043a\u0430\u043c\u0441\u043a","city_en":"Nephtekamsk"},"11115":{"city":"\u0421\u0430\u043b\u0430\u0432\u0430\u0442","city_en":"Salavat"},"11116":{"city":"\u0421\u0442\u0435\u0440\u043b\u0438\u0442\u0430\u043c\u0430\u043a","city_en":"Sterlitamak"},"11121":{"city":"\u0410\u043b\u044c\u043c\u0435\u0442\u044c\u0435\u0432\u0441\u043a","city_en":"Almetyevsk"},"11122":{"city":"\u0411\u0443\u0433\u0443\u043b\u044c\u043c\u0430","city_en":"Bugulma"},"11123":{"city":"\u0415\u043b\u0430\u0431\u0443\u0433\u0430","city_en":"Elabuga"},"11125":{"city":"\u0417\u0435\u043b\u0435\u043d\u043e\u0434\u043e\u043b\u044c\u0441\u043a","city_en":"Zelenodolsk"},"11127":{"city":"\u041d\u0438\u0436\u043d\u0435\u043a\u0430\u043c\u0441\u043a","city_en":"Nizhnekamsk"},"11129":{"city":"\u0427\u0438\u0441\u0442\u043e\u043f\u043e\u043b\u044c","city_en":"Chistopol"},"11132":{"city":"\u0416\u0438\u0433\u0443\u043b\u0435\u0432\u0441\u043a","city_en":"Zhiguliovsk"},"11139":{"city":"\u0421\u044b\u0437\u0440\u0430\u043d\u044c","city_en":"Sizran"},"11143":{"city":"\u0411\u0430\u043b\u0430\u043a\u043e\u0432\u043e","city_en":"Balakovo"},"11147":{"city":"\u042d\u043d\u0433\u0435\u043b\u044c\u0441","city_en":"Engels"},"11150":{"city":"\u0413\u043b\u0430\u0437\u043e\u0432","city_en":"Glazov"},"11152":{"city":"\u0421\u0430\u0440\u0430\u043f\u0443\u043b","city_en":"Sarapul"},"11155":{"city":"\u0414\u0438\u043c\u0438\u0442\u0440\u043e\u0432\u0433\u0440\u0430\u0434","city_en":"Dimitrovgrad"},"11168":{"city":"\u041d\u0438\u0436\u043d\u0438\u0439 \u0422\u0430\u0433\u0438\u043b","city_en":"Nizhniy Tagil"},"11170":{"city":"\u041d\u043e\u0432\u043e\u0443\u0440\u0430\u043b\u044c\u0441\u043a","city_en":"Novouralsk"},"11171":{"city":"\u041f\u0435\u0440\u0432\u043e\u0443\u0440\u0430\u043b\u044c\u0441\u043a","city_en":"Pervouralsk"},"11173":{"city":"\u0418\u0448\u0438\u043c","city_en":"Ishim"},"11175":{"city":"\u0422\u043e\u0431\u043e\u043b\u044c\u0441\u043a","city_en":"Tobolsk"},"11202":{"city":"\u0417\u043b\u0430\u0442\u043e\u0443\u0441\u0442","city_en":"Zlatoust"},"11212":{"city":"\u041c\u0438\u0430\u0441\u0441","city_en":"Miass"},"11214":{"city":"\u041e\u0437\u0435\u0440\u0441\u043a","city_en":"Ozersk"},"11217":{"city":"\u0421\u0430\u0442\u043a\u0430","city_en":"Satka"},"11218":{"city":"\u0421\u043d\u0435\u0436\u0438\u043d\u0441\u043a","city_en":"Sneginsk"},"11251":{"city":"\u0420\u0443\u0431\u0446\u043e\u0432\u0441\u043a","city_en":"Rubtsovsk"},"11256":{"city":"\u0410\u043d\u0433\u0430\u0440\u0441\u043a","city_en":"Angarsk"},"11287":{"city":"\u041c\u0435\u0436\u0434\u0443\u0440\u0435\u0447\u0435\u043d\u0441\u043a","city_en":"Mezgdurechensk"},"11291":{"city":"\u041f\u0440\u043e\u043a\u043e\u043f\u044c\u0435\u0432\u0441\u043a","city_en":"Prokopevsk"},"11302":{"city":"\u0410\u0447\u0438\u043d\u0441\u043a","city_en":"Achinsk"},"11306":{"city":"\u041a\u0430\u0439\u0435\u0440\u043a\u0430\u043d","city_en":"Norilsk"},"11311":{"city":"\u041d\u043e\u0440\u0438\u043b\u044c\u0441\u043a","city_en":"Norilsk"},"11314":{"city":"\u0411\u0435\u0440\u0434\u0441\u043a","city_en":"Berdsk"},"11319":{"city":"\u0413\u043e\u0440\u043d\u043e-\u0410\u043b\u0442\u0430\u0439\u0441\u043a","city_en":"Gorno-Altaysk"},"11333":{"city":"\u041a\u044b\u0437\u044b\u043b","city_en":"Kyzyl"},"11341":{"city":"\u0421\u0430\u044f\u043d\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Sayanogorsk"},"11351":{"city":"\u0421\u0435\u0432\u0435\u0440\u0441\u043a","city_en":"Seversk"},"11374":{"city":"\u0411\u0435\u043b\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Belogorsk"},"11391":{"city":"\u0422\u044b\u043d\u0434\u0430","city_en":"Tynda"},"11393":{"city":"\u0411\u0438\u0440\u043e\u0431\u0438\u0434\u0436\u0430\u043d","city_en":"Birobidgan"},"11426":{"city":"\u0423\u0441\u0441\u0443\u0440\u0438\u0439\u0441\u043a","city_en":"Ussuriysk"},"11458":{"city":"\u0410\u043d\u0430\u0434\u044b\u0440\u044c","city_en":"Anadyr"},"11463":{"city":"\u0415\u0432\u043f\u0430\u0442\u043e\u0440\u0438\u044f","city_en":"Evpatoria"},"11464":{"city":"\u041a\u0435\u0440\u0447\u044c","city_en":"Kerch"},"11469":{"city":"\u0424\u0435\u043e\u0434\u043e\u0441\u0438\u044f","city_en":"Feodosia"},"11470":{"city":"\u042f\u043b\u0442\u0430","city_en":"Yalta"},"11471":{"city":"\u0410\u043b\u0443\u0448\u0442\u0430","city_en":"Alushta"},"20040":{"city":"\u0412\u044b\u043a\u0441\u0430","city_en":"Vyksa"},"20044":{"city":"\u041a\u0441\u0442\u043e\u0432\u043e","city_en":"Kstovo"},"20086":{"city":"\u0416\u0435\u043b\u0435\u0437\u043d\u043e\u0433\u043e\u0440\u0441\u043a","city_en":"Zheleznogorsk"},"20221":{"city":"\u041a\u0440\u043e\u043f\u0438\u0432\u043d\u0438\u0446\u043a\u0438\u0439","city_en":"Kropyvnytskyi"},"20222":{"city":"\u041b\u0443\u0446\u043a","city_en":"Lutsk"},"20258":{"city":"\u0421\u0430\u0442\u0438\u0441","city_en":"Satis"},"20273":{"city":"\u0410\u043a\u0442\u043e\u0431\u0435","city_en":"Aktobe"},"20523":{"city":"\u042d\u043b\u0435\u043a\u0442\u0440\u043e\u0441\u0442\u0430\u043b\u044c","city_en":"Elektrostal"},"20554":{"city":"\u041a\u0440\u0430\u043c\u0430\u0442\u043e\u0440\u0441\u043a","city_en":"Kramatorsk"},"20571":{"city":"\u0416\u0443\u043a\u043e\u0432\u0441\u043a\u0438\u0439","city_en":"Zhukovskiy"},"20728":{"city":"\u041a\u043e\u0440\u043e\u043b\u0451\u0432","city_en":"Korolev"},"20809":{"city":"\u041a\u043e\u043a\u0448\u0435\u0442\u0430\u0443","city_en":"Kokshetau"},"21609":{"city":"\u041a\u0440\u0435\u043c\u0435\u043d\u0447\u0443\u0433","city_en":"Kremenchuk"},"21621":{"city":"\u0420\u0435\u0443\u0442\u043e\u0432","city_en":"Reutov"},"21622":{"city":"\u0416\u0435\u043b\u0435\u0437\u043d\u043e\u0434\u043e\u0440\u043e\u0436\u043d\u044b\u0439","city_en":"Zheleznodorozhny"},"24876":{"city":"\u041c\u0430\u043a\u0435\u0435\u0432\u043a\u0430","city_en":"Makiivka"},"26034":{"city":"\u0416\u043e\u0434\u0438\u043d\u043e","city_en":"Zhodzina"},"33883":{"city":"\u041a\u043e\u043c\u0440\u0430\u0442","city_en":"Comrat"},"10393":{"city":"\u041b\u043e\u043d\u0434\u043e\u043d","city_en":"London"}}';

            $cities = json_decode($cities, true);
            foreach ($cities as $id => $values) {
                /** @var spCity $city */
                if (!$city = $modx->getObject('spCity', ['id' => $id])) {
                    $city = $modx->newObject('spCity');
                    $city->set('id', $id);
                }
                $city->fromArray([
                    'city' => $values['city'],
                    'city_en' => $values['city_en'],
                    'active' => true,
                ]);
                $city->save();
            }
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;
