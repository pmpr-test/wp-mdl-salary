<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793d9693674f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\141\147\x72\x65\145\x6d\145\x6e\164\x73"; public function __construct() { $this->rest_base = "\x77\x69\x74\x68\x64\x72\141\x77"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\x74\55\154\151\x73\164\55\x62\x79\x2d\165\163\145\x72", [Constants::wwgusigoaksqmwsm => [$this, "\x63\x75\x61\x6b\x69\145\x6b\x73\x73\147\x6b\x65\171\x73\167\x61"]]); $this->register("\x2f\147\x65\x74\55\x66\x69\x65\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\155\x63\x65\143\143\147\x77\x61\x61\141\x69\x67\x69\171"]]); $this->register("\57\163\165\x62\155\151\x74", ["\155\145\164\150\157\x64\x73" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\145\x61\161\x67\x79\x73\x67\x61\145\157\167\x61\147\x75\x67"]]); $this->register("\57\x63\141\154\x63\165\x6c\x61\x74\145", ["\x6d\x65\164\x68\x6f\x64\163" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\167\163\157\x65\165\x65\x6b\x61\x6d\x65\x65\151\x63\141\x73\143"]]); $this->register("\x2f\x67\145\x74\55\167\x69\164\150\x64\x72\141\x77", [Constants::wwgusigoaksqmwsm => [$this, "\x73\143\163\x69\145\x63\147\171\141\155\x67\171\x69\x69\141\141"]]); $this->register("\57\147\145\x74\x2d\x69\x6e\x63\157\x6d\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\x79\145\x63\x63\x6f\x79\x61\163\163\x67\157\x65\x77\x69\x77"]]); $this->register("\x2f\x67\145\164\55\x70\x61\x79\155\x65\156\x74\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6b\x73\167\151\145\x6f\143\x73\x6d\141\x61\x67\167\155\x6b\x71"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $saqgcoqwmimycgim = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\151\x74\x68\x64\x72\x61\x77"); if ($euakemkgmcigqycw) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [Constants::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\x65\x20\162\145\x71\x75\x69\x72\x65\x20\x70\x61\162\x61\x6d\x65\164\x65\x72\163\40\x69\x73\x20\x6d\151\x73\x73\151\x6e\147\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\151\164\150\144\x72\x61\167"); if ($euakemkgmcigqycw) { $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\x65\x20\162\x65\161\165\151\162\x65\x20\160\x61\162\141\x6d\x65\x74\145\162\163\x20\151\163\x20\x6d\x69\x73\163\151\x6e\x67\x2e", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\x68\x64\x72\x61\167"); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm && $ycoeoaakqyskgykq) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk->kumuygiiqswoyasy(), $aokagokqyuysuksm)]); if ($euakemkgmcigqycw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::wecooowsgcqkcoce => '', Constants::ciywsqoeiymemsys => '', Constants::aioqyewkwawaqgqe => '', Constants::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::wecooowsgcqkcoce: if ($eqgoocgaqwqcimie) { $meqocwsecsywiiqs = __("\102\x61\x6e\153\x20\101\143\x63\x6f\x75\x6e\x74", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\x25\163\x20\50\x25\x73\x29", $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::iockmgiyoygcswog)); } break; case Constants::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\x53\164\x61\164\x75\163", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uywgggmcoacosiqa; break; case Constants::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\101\155\157\165\x6e\x74", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::eckamoaqmuuqkugg; break; case Constants::CREATED_AT: $meqocwsecsywiiqs = __("\104\141\x74\145", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uoouwyaycseeiysk; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } $keccaugmemegoimu = $gkyciwoiiisgywcs->set($euakemkgmcigqycw, [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\x71\x75\x65\x73\x74\145\144\x20\x77\x69\164\x68\144\x72\x61\167\x20\156\157\x74\40\146\157\165\156\x64\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\145\x20\162\x65\x71\x75\x69\162\145\x20\160\x61\x72\141\155\x65\x74\x65\162\163\40\151\163\x20\x6d\x69\x73\163\x69\156\147\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wagwccqcqwgsoyoi, $ogekyekymoyuywog::youiiwsayswmyuum, $ogekyekymoyuywog::gweieugwqicugemk]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $miowmmgaiagcuyoo), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $xssuewsokckmigqk)]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->gimqoiwysgoimciu()->asykgyemqgqyguei($iueymcwwscwqkiyq)->ykyiuaaycumywcqo($ogekyekymoyuywog::eiiuyoyiygsickwe, $iueymcwwscwqkiyq)->gwmaucmkaoasqgug($ogekyekymoyuywog::aioqyewkwawaqgqe); } $wcsgguaigguiiwcy = $ogekyekymoyuywog->iekyeyicoyyawomk()->cieaqygkucwoqwke($uoomaookgsyciacm); if ($wcsgguaigguiiwcy) { $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[Constants::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; } } $keccaugmemegoimu = [Constants::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; } else { $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; } } } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\x54\157\x74\141\154\x20\x6f\146\x20\171\x6f\165\162\40\x69\156\x63\157\155\x65\163\40\146\157\162\40\x73\x65\154\x65\x63\164\x65\144\x20\x61\x67\x72\145\145\155\x65\x6e\164\x73", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\124\x6f\164\x61\x6c", PR__MDL__SALARY); $qoiwmokisgikggia = "\144\x61\x72\x6b\55\65\x30"; $sqqewmoeaekuyyas = 5; break; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->iowygaiuiqkqimio($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wagwccqcqwgsoyoi: case $ogekyekymoyuywog::gweieugwqicugemk: if ($eqgoocgaqwqcimie) { $qoiwmokisgikggia = Constants::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw === $ogekyekymoyuywog::wagwccqcqwgsoyoi) { $ukwokcuqauuosmoo = __("\111\155\x70\x6f\x73\163\151\x62\154\145\x20\164\x6f\x20\167\x69\x74\x68\x64\162\x61\x77\x20\142\x65\143\x61\165\163\145\x20\157\146\40\163\157\155\145\x20\155\141\156\141\x67\145\162\151\141\x6c\40\162\x65\x61\163\157\156\x73", PR__MDL__SALARY); } else { $ukwokcuqauuosmoo = __("\x49\x6d\x70\157\163\x73\151\x62\x6c\145\x20\x74\157\x20\x77\151\x74\150\x64\162\141\x77\x20\142\x65\143\x61\165\163\145\40\157\146\40\x69\156\x73\165\x66\146\x69\x63\151\145\156\x74\x20\163\x61\154\x65\163\x20\166\157\154\165\x6d\x65", PR__MDL__SALARY); } $uaesckuogcakkmaw = true; } else { $meqocwsecsywiiqs = ''; } break; case $ogekyekymoyuywog::youiiwsayswmyuum: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if ($eqgoocgaqwqcimie < $ygeuioagqoqumwuw) { $eqgoocgaqwqcimie = 0; } $qoiwmokisgikggia = Constants::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\131\x6f\x75\162\x20\164\157\164\x61\x6c\x20\151\x6e\143\x6f\155\x65\x20\164\x68\141\164\x20\151\163\x20\150\151\x67\150\145\162\40\164\150\141\156\40\45\x73", PR__MDL__SALARY), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($ekymkycgewkiouqe->uqowqskaykgqokso($ygeuioagqoqumwuw))); break; } } if ($meqocwsecsywiiqs) { $keccaugmemegoimu[$uusmaiomayssaecw] = [Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($eqgoocgaqwqcimie), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::igssuqwuicwawgam => $qoiwmokisgikggia, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas, Constants::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if ($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\x72\145\155\x61\151\156"])) { $keccaugmemegoimu["\162\145\x6d\x61\x69\156"] = [Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($bsgyawiqyuquqmyy), Constants::qescuiwgsyuikume => __("\122\145\155\x61\151\156", PR__MDL__SALARY), Constants::igssuqwuicwawgam => "\144\141\x72\x6b\55\x35\x30", Constants::iuqumwggccmcuyem => 50, Constants::eqkeooqcsscoggia => __("\124\x6f\164\x61\x6c\x20\x79\157\x75\x72\x20\x72\x65\143\145\x69\166\x61\142\x6c\x65\163", PR__MDL__SALARY)]; } } else { $gkyciwoiiisgywcs->unset($keccaugmemegoimu, $uusmaiomayssaecw); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($keccaugmemegoimu); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\x65\40\x72\145\161\165\x69\162\x65\x20\160\141\x72\x61\x6d\145\164\145\162\163\40\151\163\40\x6d\151\x73\x73\x69\x6e\x67", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, Constants::eoskkkieowogacws); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\x65\40\x72\145\161\x75\x69\x72\145\x20\160\x61\162\x61\x6d\x65\164\145\x72\x73\x20\x69\x73\x20\155\151\163\x73\151\x6e\147", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $saqgcoqwmimycgim = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [Constants::iockmgiyoygcswog => $saqgcoqwmimycgim]); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($ycoeoaakqyskgykq) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = BankAccountModel::symcgieuakksimmu()->sswoemewoyqeqoya($ycoeoaakqyskgykq, Constants::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { $ygikoqaokckisawo = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($iwkyyocymeukcceu as $aokagokqyuysuksm => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::qgqyauaqwqmqseim => $gkyciwoiiisgywcs->get($ykiyyumywksqcisg, $aokagokqyuysuksm), Constants::uissasisiuymwsmu => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($pkyyagewkiyckmwy), "\151\143\157\156\137\x63\x6c\x61\163\163" => "\151\x63\157\156\x2d\156\157\x2d\143\x6f\x6c\x6f\x72", ]; } $qiouiwasaauyaaue = []; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $okycmmskgswewacc = $kueeocmceokoouqa->iekyeyicoyyawomk()->cieaqygkucwoqwke($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq, Constants::ciywsqoeiymemsys => Constants::cwiummueqsucqayc])); if ($okycmmskgswewacc) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $gikyaoiioawywyeu = $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, $kueeocmceokoouqa::woagckamiequeoyu, 0); if ($gikyaoiioawywyeu) { $qiouiwasaauyaaue[$gikyaoiioawywyeu] = $mssuumukiiaqmcka->uikgwcuascgeissw($gikyaoiioawywyeu); } } $sskgoaykaawmsuik = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $sogksuscggsicmac = [$sskgoaykaawmsuik->mccagaqeagiikkec(self::muwsgygqegywogka)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\x41\x67\162\145\x65\155\x65\156\x74", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->gucwmccyimoagwcm(__("\x43\x68\x6f\157\163\x65\40\x74\x68\x65\x20\141\147\162\145\x65\x6d\145\156\x74\163\40\164\x68\x61\164\40\x79\x6f\x75\x20\167\x61\156\164\40\x74\x6f\40\142\145\x20\143\x72\x65\144\151\164\145\144\40\x77\151\164\x68", PR__MDL__SALARY)), $sskgoaykaawmsuik->mccagaqeagiikkec(Constants::mgsccwumkcawaqcy)->gswweykyogmsyawy(__("\102\141\156\x6b\x20\101\143\143\x6f\165\156\164", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)]; } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\163\x61\x6c\141\x72\171\57\141\x70\160\x6c\x79", __("\123\164\141\162\164\40\105\141\x72\156\x20\x4d\157\156\145\171", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\x75\x20\141\162\x65\40\156\x6f\164\x20\155\x65\155\x62\145\x72\40\157\x66\x20\141\156\x79\40\x61\147\162\x65\x65\x6d\145\156\164\40\171\145\x74\54\40\171\x6f\x75\x20\x63\x61\x6e\40\x66\151\156\144\x20\x61\x70\160\x6c\x69\x61\142\x6c\x65\40\141\147\x72\145\145\x6d\x65\x6e\x74\x73\x20\151\156\x20\45\163\40\x74\x6f\x20\x61\160\x70\x6c\171\x20\x74\150\145\155\x65\56", PR__MDL__SALARY), $iwywmkygwewiamwm)); } } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\x75\163\145\162\57\x70\162\x6f\146\x69\x6c\x65\57\142\x61\x6e\x6b\55\x61\143\x63\x6f\165\x6e\x74\163", __("\125\x73\145\x72\40\120\162\157\x66\151\x6c\x65", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\x75\40\163\x68\157\165\154\144\x20\x66\x69\162\163\164\x2c\40\x66\151\x6c\154\40\x69\156\40\171\157\165\162\40\142\141\156\x6b\40\x61\143\x63\x6f\165\x6e\164\x20\151\x6e\x66\x6f\x72\155\x61\x74\x69\x6f\156\x20\151\156\x73\x69\144\x65\40\171\157\x75\x72\x20\x25\x73\54\40\164\157\40\163\x75\142\x6d\x69\x74\x20\141\40\167\x69\x74\x68\x64\x72\141\167", PR__MDL__SALARY), $iwywmkygwewiamwm)); } return $sogksuscggsicmac; } }
