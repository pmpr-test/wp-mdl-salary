<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b7508a143             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x62\141\x6e\x6b\55\x61\143\143\x6f\x75\156\x74"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\147\145\x74\x2d\154\151\x73\164", [Constants::wwgusigoaksqmwsm => [$this, "\x63\x69\x75\x67\x77\157\x6f\x61\163\141\161\143\171\x77\141\x73"]]); $this->register("\x2f\x67\145\164\x2d\x66\151\x65\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\x65\143\x63\x67\x77\141\141\x61\x69\x67\x69\171"]]); $this->register("\57\163\x61\x76\x65", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\141\x76\145"]]); $this->register("\x2f\x64\145\154\x65\x74\x65", [Constants::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, Constants::wwgusigoaksqmwsm => [$this, "\x64\x65\154\x65\164\x65"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ascagqcquwgmygkm)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if ($eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw)) { if (!$gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\x6e\x6b\40\x61\x63\x63\157\x75\156\164\x20\162\145\155\157\x76\x65\x64\40\163\x75\143\143\145\163\163\146\165\x6c\154\x79", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\x65\x74\x68\151\x6e\x67\40\167\162\x6f\156\x67\x20\157\x6e\40\x72\x65\155\x6f\x76\145\40\x70\x72\157\x63\145\163\x73\54\x20\160\154\x65\x61\x73\145\x20\164\x72\x79\x20\141\x67\x61\x69\156", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\165\x72\x20\x72\145\161\x75\145\163\164\x65\x64\x20\x61\143\x63\157\x75\x6e\164\40\x66\x6f\162\x20\x72\x65\x6d\x6f\x76\x65\40\151\x73\40\x6c\157\x63\153\145\x64", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\x6e\x20\x6e\157\164\x20\146\x69\x6e\144\40\x72\x65\161\x75\145\x73\164\x65\144\x20\x61\x63\x63\x6f\x75\x6e\x74", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x61\143\143\157\x75\x6e\x74\x20\x70\141\x72\141\155\x65\x74\x65\162\40\151\163\40\155\x69\x73\163\x69\156\147", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, Constants::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[Constants::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\154\x6f\x63\153\x65\x64" : "\x65\x64\151\164\141\142\x6c\145"; $sogksuscggsicmac[Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace] = $eqgoocgaqwqcimie ? __("\114\x6f\x63\153\145\x64", PR__MDL__SALARY) : __("\105\144\151\164\141\x62\154\145", PR__MDL__SALARY); break; case Constants::squoamkioomemiyi: $meqocwsecsywiiqs = __("\124\171\x70\145", PR__MDL__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; break; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\102\x61\156\153", PR__MDL__SALARY); $sogksuscggsicmac[Constants::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; break; case Constants::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\117\167\x6e\145\x72\40\x6f\146\40\45\x73", PR__MDL__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; break; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::skyceaacaaaamiii: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\116\x75\x6d\142\x65\162\x20\x6f\146\40\45\163", PR__MDL__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; break; case Constants::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; break; } if ($uescmseksquycukc) { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } if ($meqocwsecsywiiqs) { $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } } $sogksuscggsicmac[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $sogksuscggsicmac[Constants::uiwqcumqkgikqyue] = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, Constants::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($uusmaiomayssaecw) { $eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\x75\40\x72\145\x71\165\145\163\x74\x65\144\x20\141\143\x63\x6f\x75\156\x74\40\x66\x6f\x72\x20\145\144\151\x74\40\164\150\x61\164\40\156\157\164\40\145\170\151\163\x74", PR__MDL__SALARY), 400); } else { $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[Constants::ascagqcquwgmygkm] = $uusmaiomayssaecw; } } $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = $gkyciwoiiisgywcs->find($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if ($ksiyqouuaoymsycg) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\165\40\x61\154\162\145\x61\144\171\x20\141\x64\144\x65\144\40\x74\150\x69\x73\x20\x61\x63\143\157\165\x6e\x74\40\x6e\x75\x6d\x62\145\162", PR__MDL__SALARY), 400); } if (!is_wp_error($keccaugmemegoimu)) { $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\x61\x6e\153\x20\141\x63\143\x6f\165\156\x74\x20\163\141\x76\145\x64\40\x73\165\x63\x63\145\x73\163\x66\165\154\x6c\171", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf("\x25\x73\74\142\162\76\45\x73", __("\123\x6f\155\x65\x74\150\151\x6e\x67\40\167\162\x6f\x6e\x67\x20\x6f\156\x20\x73\x61\x76\x69\x6e\147\40\160\x72\157\x63\145\x73\x73\x2c\x20\160\154\x65\141\163\x65\40\x74\162\x79\40\141\147\x61\151\x6e", PR__MDL__SALARY), __("\115\x61\171\x62\145\x20\171\x6f\165\x20\143\x68\x61\156\x67\x65\x20\156\157\164\x68\x69\x6e\147\x2e", PR__MDL__SALARY))); } } } else { $keccaugmemegoimu = $gmcgeogogyqsgawk; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x59\157\165\162\x20\142\141\x6e\153\40\x69\163\x20\156\157\x74\40\163\x75\160\x70\x6f\162\164\x20\157\162\40\x79\157\165\162\x20\145\156\164\x65\x72\x65\x64\40\45\x73\40\x69\163\40\156\x6f\x74\x20\x76\x61\154\x69\x64", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\126\x61\x6c\165\145\40\x6f\146\x20\x25\x73\x20\151\x73\40\162\145\x71\x75\151\162\145", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\151\163\163\151\156\147\x20\x73\x6f\155\145\x20\162\x65\x71\165\x69\162\145\x20\146\151\145\154\x64\163", PR__MDL__SALARY), 400); } } return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::iockmgiyoygcswog)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\x63\x63\157\x75\156\164\x20\x4f\x77\x6e\145\x72\40\116\x61\155\145", PR__MDL__SALARY)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\143\x63\157\x75\x6e\164\x20\x54\171\160\x65", PR__MDL__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\111\102\x41\116", PR__MDL__SALARY))->kesomeowemmyygey(User::skyceaacaaaamiii, __("\104\x65\142\151\164\x20\x43\x61\162\x64", PR__MDL__SALARY))->qyucewwiggkyeaso(User::wyqmcowecikgawuu, User::wyqmcowecikgawuu)->qyucewwiggkyeaso(User::skyceaacaaaamiii, User::skyceaacaaaamiii)->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(User::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\111\x42\101\116", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(User::skyceaacaaaamiii)->gswweykyogmsyawy(__("\104\x65\x62\151\164\x20\103\x61\162\x64", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
