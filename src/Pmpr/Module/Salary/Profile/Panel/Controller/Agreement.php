<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9939cde6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\141\147\x72\x65\145\x6d\145\x6e\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\160\x75\142\x6c\x69\x63\163", [Constants::wwgusigoaksqmwsm => [$this, "\x65\x61\151\x79\x6b\x6f\x6d\x65\155\x6d\x69\x69\x77\155\153\151"]]); $this->register("\57\147\x65\164\x2d\141\x67\162\145\x65\x6d\145\x6e\164", [Constants::wwgusigoaksqmwsm => [$this, "\171\171\x63\x69\x6d\143\x61\x6b\165\151\x79\x6d\163\141\157\x71"]]); $this->register("\x2f\147\x65\164\55\160\162\157\x64\165\143\164\163", [Constants::wwgusigoaksqmwsm => [$this, "\141\147\x65\161\x73\x77\167\x6b\153\x71\x79\x77\x63\x6b\143\157"]]); $this->register("\57\x67\145\x74\x2d\143\x61\164\145\147\x6f\x72\x69\x65\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6d\145\163\x61\153\x6b\x79\143\x6f\x6d\x79\165\x75\x77\x77\155"]]); $this->register("\57\x67\145\164\55\141\x70\x70\x6c\171\55\162\145\161\165\x69\x72\145\x73", [Constants::wwgusigoaksqmwsm => [$this, "\157\x63\x75\145\147\167\163\x75\161\x77\x6b\161\155\x6f\x69\151"]]); $this->register("\x2f\x73\165\x62\155\151\x74\x2d\141\160\160\154\171", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\171\x67\x77\143\167\x63\165\141\x65\x77\151\x75\x69\153\143"]]); $this->register("\x2f\147\145\164\55\154\x69\163\x74\55\x62\171\55\x75\163\x65\162", [Constants::wwgusigoaksqmwsm => [$this, "\x77\143\143\153\x61\153\x6f\x77\145\x77\151\143\163\163\161\x67"]]); $this->register("\57\147\x65\164\55\151\x6e\143\x6f\x6d\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x79\x65\x63\143\x6f\x79\141\163\x73\147\x6f\145\167\x69\x77"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $jwsqucqyaoaasykk->iekyeyicoyyawomk(); $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::mmisekagkomcsowm, $ycoeoaakqyskgykq)->iygikqkegwkaaess()->gouskoeouiqwokqs())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::aociysagacimyqgu, $mqamowqmoasqycgc)->iygikqkegwkaaess()->gouskoeouiqwokqs())->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])->oikgyoimkwywogca())->iygikqkegwkaaess(), $eqwoegegiamegqsm->owackeyiuiikegqg()->ggmcoioqwgyccyus()->sokmmiiuyqiuoqia($jwsqucqyaoaasykk::cmiegiycgiucucgs)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)->oikgyoimkwywogca()->wegeyaguowmkqiac()), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\x65\161\165\145\163\164\137\x73\x74\x61\x74\165\x73"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); $wciwsoomyoeueocu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\156\162\145\161\x75\x65\x73\164\141\x62\x6c\145", PR__MDL__SALARY); } else { if (!$wciwsoomyoeueocu) { $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\x65\161\165\x65\x73\164\141\142\x6c\x65", PR__MDL__SALARY); } else { $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); } } $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->skckwsgymkimyuwo()->wgiecqcgakkauywu($gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw)), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $uusmaiomayssaecw); if ($eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq) { $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; } } } $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\165\x72\40\162\x65\x71\165\x65\x73\164\145\x64\x20\141\147\162\145\x65\x6d\x65\156\164\40\156\157\164\x20\146\x6f\x75\x6e\x64", PR__MDL__SALARY), 404); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $oksqskmgoqiqciis = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\x77\x6f\x65\171\153\167\x77\x69\x67\x6f\145\x61\x6f\161"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\x67\162\x65\145\x6d\x65\156\x74" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } else { if (!$keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\x72\x65\145\x6d\x65\156\x74\x20\x69\163\40\x72\x65\161\x75\151\162\x65", PR__MDL__SALARY), 404); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\x61\x77\147\x63\x67\x61\171\x79\x6f\x71\151\153\155\155\x71\157"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\147\162\145\x65\155\145\156\164" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } else { if (!$keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\147\x72\x65\145\x6d\x65\x6e\164\x20\x69\x73\40\162\145\161\165\151\162\x65", PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\x61\160\160\x6c\x69\x61\x62\x6c\x65"]) { if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\141\156\x5f\141\160\160\x6c\171", false)) { if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\145\x65\155\145\x6e\164")) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$kueeocmceokoouqa->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true)), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gimugccgakegomoq)])) { if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Constants::ciywsqoeiymemsys => Constants::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\x6f\165\40\162\145\161\x75\x65\163\x74\40\163\x75\x62\155\x69\x74\164\145\144\40\163\165\143\x63\x65\163\163\146\165\x6c\x6c\171", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\x65\164\150\151\x6e\147\40\167\x72\157\156\x67\40\x6f\156\x20\163\165\x62\x6d\x69\x74\x74\151\x6e\x67\40\x79\157\x75\x72\40\162\x65\x71\165\x65\163\x74\x2c\40\160\x6c\145\x61\x73\x65\x20\x74\162\x79\40\x61\x67\141\x69\156\40\141\146\164\x65\x72\40\146\x65\x77\x20\155\x69\156\x75\164\145\163", PR__MDL__SALARY), 400); } } else { if (!$keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\162\x65\x71\x75\145\163\164\x65\144\x20\141\x67\x72\145\x65\155\x65\x6e\164\x20\x69\163\x20\156\x6f\164\x20\166\141\154\x69\x64\40\157\162\40\x6e\x6f\x74\40\x65\170\151\x73\x74\54\40\x70\x6c\x65\x61\x73\x65\x20\162\145\x66\x72\x65\x73\150\40\x70\x61\147\145\40\x61\x6e\144\x20\x74\x72\x79\x20\141\147\141\151\156", PR__MDL__SALARY)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x79\157\x75\40\x61\154\162\x65\x61\144\x79\40\163\x75\x62\155\x69\164\40\x61\x20\x72\145\x71\165\145\x73\164\40\157\x6e\x20\164\150\151\163\x20\x61\147\162\145\x65\x6d\x65\156\x74", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\147\162\145\145\155\x65\156\x74\40\x69\144\x20\x69\163\40\141\40\x72\145\161\165\x69\x72\x65\40\x66\x69\x65\154\x64", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\x65\x61\163\x65\40\141\x63\143\x65\160\164\40\x74\x65\x72\155\163\40\x66\151\x72\163\x74\x20\x6f\x72\40\x6d\141\153\145\x20\163\165\162\145\40\x79\x6f\x75\x72\40\x76\145\x72\x69\146\171\x20\x72\145\x71\x75\x69\x72\x65\x20\x66\x69\x65\154\x64\x73\x20\x69\163\x20\x76\x65\162\x69\146\x69\x65\144", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\157\x75\162\40\166\x65\x72\x69\146\x69\x61\x62\154\145\x20\146\151\145\154\x64\x73\x20\151\x73\x20\x6e\x6f\x74\x20\166\x65\x72\151\x66\151\145\144\54\40\x63\x61\x6e\47\164\40\163\165\142\x6d\x69\x74\40\171\157\x75\162\40\162\x65\161\165\x65\x73\164", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $kueeocmceokoouqa->mwyqswsaeeewsosm($wqqmoakyckcwwkua))]); } else { if (!$keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\111\164\x27\x73\x20\163\x65\145\155\163\40\171\x6f\165\40\144\157\156\x74\x20\x73\x75\142\155\151\x74\x20\141\x6e\171\x20\x72\x65\161\165\x65\163\164\x20\x6f\156\40\x74\x68\x65\x20\x61\x67\x72\145\145\x6d\x65\156\x74", PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($kueeocmceokoouqa::woagckamiequeoyu)->ggmcoioqwgyccyus()]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], Constants::wosqwewmqmyweqea => false]); if ($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, [])) { $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($product) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\x61\156\x6b"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if (!$aumscagymwyyicag) { $aumscagymwyyicag = __("\127\151\x74\x68\157\x75\164\x20\x50\x72\x69\x63\145", PR__MDL__SALARY); } $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; } else { $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } } return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas)) { $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); } } $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\137\x62\154\141\156\x6b"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\160\154\x79", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ouwoukcecmicoeos = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::eieeagimaskkekew); if ($ouwoukcecmicoeos) { $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\141\x6e\x65\x6c\x5f\x75\163\x65\162\x5f\x67\145\164\137\146\151\145\154\144\163", [], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::ackcaikowcokggsc => $ouwoukcecmicoeos, Constants::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [Constants::sgoswgskyiiwkyuo => __("\120\145\156\x64\x69\156\147", PR__MDL__SALARY), Constants::koswkeacksqaocay => __("\126\x65\162\x69\x66\151\x65\x64", PR__MDL__SALARY), Constants::iiiimowywicukqke => __("\125\x6e\x63\x6f\x6d\160\154\145\164\x65\144", PR__MDL__SALARY)]; if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $iueymcwwscwqkiyq = Constants::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::sgoswgskyiiwkyuo; } } } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } } $kqwygogeauwwyoca = Constants::koswkeacksqaocay === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, Constants::qescuiwgsyuikume => $aiowsaccomcoikus->qcgakseyaikigqco(), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::koswkeacksqaocay => $kqwygogeauwwyoca, Constants::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (Constants::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $gkyciwoiiisgywcs->get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; } } } } return ["\141\x70\160\154\151\141\x62\x6c\145" => $wsoeeiiqguoauciy, Constants::ymckmcsiymwqucoq => $gkyciwoiiisgywcs->yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\162\145\145\155\145\156\164")) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); } else { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\162\x65\x65\155\x65\x6e\x74\40\151\x73\x20\162\x65\x71\165\151\162\145\144", PR__MDL__SALARY)); } return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gikyaoiioawywyeu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if ($qgciakuqggmiywuk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $qecuekqmeaiykeek), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $gikyaoiioawywyeu)]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->iekyeyicoyyawomk()->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->iekyeyicoyyawomk()->asskucacysemeoiu($uoomaookgsyciacm); } $sogksuscggsicmac["\x69\x6e\143\157\155\145\x73\x5f\x73\x75\x6d"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\x6e\x63\157\x6d\145\163\137\143\x6f\x75\156\164"] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\145\145\155\145\x6e\164")) { if ($xssuewsokckmigqk = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu)) { $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); if ($qgciakuqggmiywuk) { if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\162\x20\x61\x6c\162\x65\x61\x64\x79\x20\x73\165\x62\x6d\x69\164\x20\x61\x20\162\145\161\x75\x65\163\x74\40\157\156\x20\164\x68\151\163\x20\141\147\x72\145\x65\x6d\x65\156\164", PR__MDL__SALARY)); } else { if (Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::ecysamcwsaweumeu)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\x73\x65\x72\40\162\145\161\x75\145\x73\x74\40\x72\x65\152\145\x63\164\145\144\40\x62\171\x20\141\x64\x6d\151\x6e", PR__MDL__SALARY)); } } } if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\x65\x65\x6d\x65\156\164\x20\x69\163\x20\160\x72\x69\x76\x61\x74\145", PR__MDL__SALARY)); } else { if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { if (!in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\147\162\x65\145\155\x65\156\x74\40\x6e\x6f\x74\x20\146\x6f\x72\x20\164\150\145\x20\x75\163\x65\x72", PR__MDL__SALARY)); } } else { if ($guguqsiieswegsiy = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if ($yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { $askmkgcmgekiqwsg = true; } } if (!$askmkgcmgekiqwsg) { $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x67\162\x65\x65\x6d\x65\156\164\x20\x6e\157\x74\40\x66\x6f\162\40\164\x68\145\x20\165\163\145\x72", PR__MDL__SALARY)); } } } } if ($iswcokucwmiosiaq) { $xssuewsokckmigqk = null; } if ($xssuewsokckmigqk && $tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } } } return $xssuewsokckmigqk; } }
