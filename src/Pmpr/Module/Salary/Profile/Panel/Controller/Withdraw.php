<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c9278ae3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\141\x67\162\x65\x65\x6d\x65\x6e\x74\163"; public function __construct() { $this->rest_base = "\x77\151\x74\x68\x64\x72\x61\x77"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\x65\164\x2d\x6c\x69\x73\x74\55\x62\x79\55\x75\163\145\x72", [Constants::wwgusigoaksqmwsm => [$this, "\x63\x75\x61\x6b\x69\x65\153\x73\x73\147\153\x65\x79\163\x77\x61"]]); $this->register("\x2f\147\x65\x74\x2d\146\x69\x65\154\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\155\143\x65\x63\143\x67\167\141\x61\141\x69\147\151\171"]]); $this->register("\57\x73\165\142\155\151\164", ["\155\145\x74\x68\157\x64\x73" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x61\x65\141\161\x67\x79\163\147\141\145\157\x77\x61\147\165\x67"]]); $this->register("\x2f\143\x61\x6c\143\165\154\141\x74\x65", ["\x6d\x65\x74\x68\x6f\144\163" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x77\163\x6f\145\x75\x65\x6b\x61\x6d\x65\x65\x69\x63\x61\x73\x63"]]); $this->register("\57\147\x65\164\55\x77\151\164\150\x64\x72\141\x77", [Constants::wwgusigoaksqmwsm => [$this, "\163\143\x73\x69\x65\143\147\171\141\155\147\x79\151\151\141\141"]]); $this->register("\x2f\147\145\164\55\x69\156\143\157\155\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\171\x65\143\x63\x6f\171\x61\x73\x73\147\x6f\145\167\151\167"]]); $this->register("\x2f\x67\145\164\x2d\x70\x61\x79\155\x65\x6e\x74\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6b\x73\167\151\145\x6f\x63\x73\155\x61\141\147\x77\x6d\x6b\161"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $saqgcoqwmimycgim = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\151\x74\x68\144\x72\141\x77"); if ($euakemkgmcigqycw) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [Constants::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\x65\x20\162\145\x71\x75\151\x72\145\40\160\141\162\x61\155\x65\x74\x65\x72\163\40\151\x73\40\155\x69\163\163\151\156\x67\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\150\x64\x72\x61\167"); if ($euakemkgmcigqycw) { $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\x65\x20\162\145\161\x75\151\162\145\40\x70\x61\x72\141\155\145\x74\x65\x72\x73\x20\x69\163\40\155\151\163\163\x69\x6e\147\x2e", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\151\x74\150\x64\x72\x61\167"); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm && $ycoeoaakqyskgykq) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk->kumuygiiqswoyasy(), $aokagokqyuysuksm)]); if ($euakemkgmcigqycw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::owmueawayysqcsqo => '', Constants::ciywsqoeiymemsys => '', Constants::aioqyewkwawaqgqe => '', Constants::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::owmueawayysqcsqo: if ($eqgoocgaqwqcimie) { $meqocwsecsywiiqs = __("\102\141\156\x6b\x20\101\143\x63\x6f\x75\156\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\x25\x73\40\50\x25\x73\51", $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::iockmgiyoygcswog)); } break; case Constants::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\x53\164\141\164\x75\x73", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uywgggmcoacosiqa; break; case Constants::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\101\x6d\x6f\165\x6e\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::eckamoaqmuuqkugg; break; case Constants::CREATED_AT: $meqocwsecsywiiqs = __("\x44\141\x74\x65", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uoouwyaycseeiysk; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } $keccaugmemegoimu = $gkyciwoiiisgywcs->set($euakemkgmcigqycw, [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\x75\145\163\x74\145\x64\x20\167\151\164\150\144\x72\141\167\40\x6e\157\x74\x20\x66\157\165\156\x64\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x6d\x65\40\x72\x65\161\x75\151\162\145\40\x70\141\x72\x61\155\145\164\x65\162\163\40\151\x73\x20\155\151\163\x73\151\156\x67\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wagwccqcqwgsoyoi, $ogekyekymoyuywog::youiiwsayswmyuum, $ogekyekymoyuywog::gweieugwqicugemk]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $miowmmgaiagcuyoo), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $xssuewsokckmigqk)]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->gimqoiwysgoimciu()->asykgyemqgqyguei($iueymcwwscwqkiyq)->ykyiuaaycumywcqo($ogekyekymoyuywog::eiiuyoyiygsickwe, $iueymcwwscwqkiyq)->gwmaucmkaoasqgug($ogekyekymoyuywog::aioqyewkwawaqgqe); } $wcsgguaigguiiwcy = $ogekyekymoyuywog->iekyeyicoyyawomk()->cieaqygkucwoqwke($uoomaookgsyciacm); if ($wcsgguaigguiiwcy) { $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[Constants::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; } } $keccaugmemegoimu = [Constants::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; } else { $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; } } } $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\124\157\x74\x61\154\x20\157\x66\x20\171\157\x75\x72\40\151\x6e\x63\x6f\155\x65\x73\40\x66\157\x72\x20\163\x65\x6c\145\x63\164\x65\x64\40\141\x67\162\x65\145\x6d\x65\156\164\163", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\x54\157\164\x61\x6c", PR__MDL__SALARY); $qoiwmokisgikggia = "\x64\x61\162\153\55\x35\x30"; $sqqewmoeaekuyyas = 5; break; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->iowygaiuiqkqimio($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wagwccqcqwgsoyoi: case $ogekyekymoyuywog::gweieugwqicugemk: if ($eqgoocgaqwqcimie) { $qoiwmokisgikggia = Constants::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw === $ogekyekymoyuywog::wagwccqcqwgsoyoi) { $ukwokcuqauuosmoo = __("\111\x6d\160\157\163\x73\x69\x62\154\x65\x20\164\157\x20\167\151\164\150\144\x72\x61\167\40\142\x65\x63\141\165\163\x65\x20\157\x66\40\163\157\155\x65\40\155\x61\x6e\x61\147\x65\x72\x69\141\x6c\x20\162\x65\141\163\x6f\x6e\x73", PR__MDL__SALARY); } else { $ukwokcuqauuosmoo = __("\x49\x6d\x70\157\x73\x73\x69\x62\154\145\x20\164\157\40\167\151\x74\150\x64\162\141\167\x20\142\145\143\x61\165\163\145\x20\157\x66\x20\x69\x6e\x73\x75\x66\146\151\143\151\x65\x6e\x74\x20\x73\141\x6c\x65\x73\40\166\x6f\x6c\x75\155\145", PR__MDL__SALARY); } $uaesckuogcakkmaw = true; } else { $meqocwsecsywiiqs = ''; } break; case $ogekyekymoyuywog::youiiwsayswmyuum: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if ($eqgoocgaqwqcimie < $ygeuioagqoqumwuw) { $eqgoocgaqwqcimie = 0; } $qoiwmokisgikggia = Constants::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\x59\x6f\x75\162\40\164\x6f\x74\141\x6c\x20\x69\x6e\143\157\x6d\145\x20\164\x68\x61\164\40\151\x73\40\x68\x69\147\150\145\x72\40\x74\150\x61\x6e\40\x25\163", PR__MDL__SALARY), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($ygeuioagqoqumwuw))); break; } } if ($meqocwsecsywiiqs) { $keccaugmemegoimu[$uusmaiomayssaecw] = [Constants::ciyoccqkiamemcmm => $cgceoyqmmwumqyqa->aumscagymwyyicag($eqgoocgaqwqcimie), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::igssuqwuicwawgam => $qoiwmokisgikggia, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas, Constants::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if ($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\x72\x65\155\141\151\156"])) { $keccaugmemegoimu["\x72\x65\x6d\141\151\156"] = [Constants::ciyoccqkiamemcmm => $cgceoyqmmwumqyqa->aumscagymwyyicag($bsgyawiqyuquqmyy), Constants::qescuiwgsyuikume => __("\x52\x65\x6d\x61\x69\x6e", PR__MDL__SALARY), Constants::igssuqwuicwawgam => "\x64\141\x72\153\55\65\x30", Constants::iuqumwggccmcuyem => 50, Constants::eqkeooqcsscoggia => __("\x54\157\164\141\x6c\x20\171\157\165\x72\40\x72\145\143\x65\151\166\141\142\154\145\163", PR__MDL__SALARY)]; } } else { $gkyciwoiiisgywcs->unset($keccaugmemegoimu, $uusmaiomayssaecw); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($keccaugmemegoimu); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\145\x20\162\145\161\165\151\162\145\40\160\x61\162\x61\155\x65\x74\x65\162\x73\x20\151\x73\40\x6d\151\x73\163\151\156\147", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, Constants::eoskkkieowogacws); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\145\x20\162\x65\x71\x75\151\162\x65\x20\x70\x61\x72\x61\155\145\x74\x65\x72\163\x20\x69\163\x20\155\x69\163\163\x69\x6e\147", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $saqgcoqwmimycgim = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [Constants::iockmgiyoygcswog => $saqgcoqwmimycgim]); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($mkucggyaiaukqoce) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = User::symcgieuakksimmu()->uwoesmooocquykum($mkucggyaiaukqoce, Constants::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { $ygikoqaokckisawo = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ Constants::gouqcwikiiygyasc => $uusmaiomayssaecw, Constants::qgqyauaqwqmqseim => $gkyciwoiiisgywcs->get($ykiyyumywksqcisg, $uusmaiomayssaecw), Constants::uissasisiuymwsmu => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($pkyyagewkiyckmwy), "\x69\x63\157\x6e\137\x63\x6c\141\x73\x73" => "\x73\x76\147\x2d\x6e\x6f\x2d\x63\157\x6c\157\x72", ]; } $qiouiwasaauyaaue = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->coyaqyocmqmmgeew($mkucggyaiaukqoce); if ($ywqqikcsamcaycgm) { foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $qiouiwasaauyaaue[$mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk)] = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); } $sskgoaykaawmsuik = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $sogksuscggsicmac = [$sskgoaykaawmsuik->mccagaqeagiikkec(self::muwsgygqegywogka)->gswweykyogmsyawy(__("\101\147\162\145\145\x6d\x65\156\164", PR__MDL__SALARY))->gucwmccyimoagwcm(__("\103\x68\x6f\157\163\145\40\164\150\145\x20\141\x67\162\x65\x65\155\145\156\x74\163\x20\x74\150\x61\164\x20\x79\x6f\165\x20\x77\141\x6e\x74\40\x74\x6f\x20\142\x65\x20\143\162\x65\144\x69\164\145\x64\40\x77\x69\x74\x68", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->eumecwmqmukqgyea()->oikgogcweiiaocka()->ioayksieaoewquom(), $sskgoaykaawmsuik->mccagaqeagiikkec(Constants::mgsccwumkcawaqcy)->gswweykyogmsyawy(__("\x42\141\156\153\40\101\143\x63\x6f\x75\156\164", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)->eumecwmqmukqgyea()]; } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\163\x61\154\x61\x72\x79\57\x61\160\160\154\x79", __("\x53\x74\x61\x72\164\x20\x45\141\x72\156\40\115\157\156\145\171", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\x6f\x75\40\x61\162\x65\40\156\x6f\164\x20\x6d\x65\x6d\142\x65\x72\x20\x6f\146\x20\x61\x6e\171\40\141\x67\x72\x65\x65\x6d\x65\156\x74\x20\171\x65\164\54\40\x79\x6f\x75\40\x63\141\x6e\40\146\151\156\144\40\141\x70\160\154\151\x61\142\x6c\x65\40\x61\x67\x72\145\x65\155\145\156\164\x73\40\x69\156\x20\45\x73\40\x74\x6f\x20\x61\x70\160\154\171\40\164\x68\x65\x6d\145\x2e", PR__MDL__SALARY), $iwywmkygwewiamwm)); } } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\x75\x73\x65\x72\x2f\160\162\157\x66\151\x6c\x65\x2f\x62\141\156\153\55\141\x63\143\157\x75\156\164\163", __("\x55\x73\x65\162\40\x50\162\157\146\x69\154\145", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\x75\40\163\x68\157\165\x6c\144\x20\x66\x69\x72\163\x74\x2c\x20\146\x69\154\x6c\x20\151\156\x20\171\x6f\x75\x72\40\142\x61\156\153\x20\x61\x63\x63\157\x75\x6e\164\x20\151\x6e\x66\157\162\155\141\x74\x69\157\x6e\40\x69\x6e\x73\151\144\x65\40\x79\157\165\162\x20\x25\x73\54\40\164\157\40\x73\165\x62\x6d\151\x74\40\x61\x20\x77\151\164\150\144\x72\x61\167", PR__MDL__SALARY), $iwywmkygwewiamwm)); } return $sogksuscggsicmac; } }
