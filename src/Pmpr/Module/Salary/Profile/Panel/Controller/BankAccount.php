<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67915362e4723             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; use WP_User; class BankAccount extends Controller { public function __construct() { $this->rest_base = "\142\x61\156\153\55\141\x63\143\x6f\165\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\154\151\163\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x63\151\165\147\x77\157\157\x61\163\x61\x71\143\171\167\141\x73"]]); $this->register("\x2f\x67\x65\164\x2d\x66\151\145\154\144\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\145\x63\143\x67\167\x61\x61\141\x69\x67\151\x79"]]); $this->register("\x2f\163\x61\166\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\141\x76\145"]]); $this->register("\57\x64\145\154\145\x74\145", [Constants::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, Constants::wwgusigoaksqmwsm => [$this, "\144\x65\154\145\164\x65"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $yygmoeguaqyumuui = [Constants::squoamkioomemiyi, BankAccountModel::oogeqgcgkamuoaoe, BankAccountModel::dsuiycscsceeqmga, Constants::ciyoccqkiamemcmm]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $gkioossaaiumqqsq = $kekwscouisqosqio->iekyeyicoyyawomk(); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $keccaugmemegoimu = $gkioossaaiumqqsq->aeggeuqycwawueqy($gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu))]), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $eaoumsseceiowgsk = (array) $igqsaukqcqscimok; $scsyuucsumiwkqqc = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $igqsaukqcqscimok = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $qwkooaaqwoeeuccc = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqeykgyoooqysmca = $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $eaoumsseceiowgsk[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $eaoumsseceiowgsk[$sqeykgyoooqysmca] = $eaoumsseceiowgsk[Constants::ciyoccqkiamemcmm]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $meqocwsecsywiiqs = $eqgoocgaqwqcimie = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::squoamkioomemiyi: $meqocwsecsywiiqs = __("\124\171\x70\145", PR__MDL__SALARY); $eqgoocgaqwqcimie = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqqewmoeaekuyyas = 2; break; case BankAccountModel::oogeqgcgkamuoaoe: $meqocwsecsywiiqs = __("\x42\141\156\153", PR__MDL__SALARY); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[$uusmaiomayssaecw] ?? ''; $sqqewmoeaekuyyas = 1; break; case BankAccountModel::dsuiycscsceeqmga: $meqocwsecsywiiqs = sprintf(__("\x4f\x77\156\145\x72\40\157\146\40\45\x73", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[BankAccountModel::dsuiycscsceeqmga]; break; case Constants::ciyoccqkiamemcmm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($scsyuucsumiwkqqc[Constants::ciyoccqkiamemcmm]); $meqocwsecsywiiqs = sprintf(__("\116\x75\155\142\145\162\x20\157\146\x20\x25\x73", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $sqqewmoeaekuyyas = 99; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($igqsaukqcqscimok, [Constants::ygeqsmugcaeeeuwu => $eaoumsseceiowgsk, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc)) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $kooascmqqwmaskmi = $kekwscouisqosqio->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($kooascmqqwmaskmi) { if (Constants::wagwccqcqwgsoyoi !== $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $kooascmqqwmaskmi)) { $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\x61\x6e\153\40\x61\143\x63\x6f\x75\156\164\40\162\145\x6d\x6f\166\145\x64\40\x73\165\143\143\x65\x73\x73\x66\x75\154\x6c\x79", PR__MDL__SALARY)); } else { if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\x65\x74\x68\151\x6e\147\x20\x77\x72\157\x6e\147\40\x6f\x6e\x20\x72\145\x6d\157\x76\145\x20\160\x72\157\143\145\x73\163\x2c\x20\160\154\x65\141\x73\145\x20\x74\x72\171\x20\141\147\141\x69\156", PR__MDL__SALARY)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\x75\x72\x20\x72\145\161\x75\x65\x73\x74\145\x64\x20\x61\x63\143\157\x75\156\x74\x20\146\x6f\x72\40\x72\145\155\x6f\166\x65\40\151\163\40\x6c\157\143\x6b\x65\144", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\x61\x6e\x20\156\x6f\x74\40\x66\x69\156\x64\40\x72\x65\161\165\145\163\164\145\144\x20\141\143\x63\x6f\165\x6e\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc, 0)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $aokagokqyuysuksm = 0) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); $ecoqwakkesyewqwg = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, BankAccountModel::dsuiycscsceeqmga); if ($ecoqwakkesyewqwg && $sqeykgyoooqysmca) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $icwicymcioeyeyek = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ciyoccqkiamemcmm => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca), Constants::yauicucwkgqyygas => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), BankAccountModel::dsuiycscsceeqmga => $ecoqwakkesyewqwg]; if ($aokagokqyuysuksm) { $icwicymcioeyeyek[$kekwscouisqosqio->kumuygiiqswoyasy()] = $aokagokqyuysuksm; } $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\x61\x6e\153\40\x61\143\x63\157\165\x6e\x74\40\163\141\x76\x65\x64\x20\x73\165\143\x63\145\x73\x73\x66\x75\x6c\x6c\x79", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\115\151\x73\x73\x69\x6e\x67\40\163\x6f\x6d\x65\x20\x72\145\x71\x75\151\162\145\40\146\151\x65\x6c\x64\x73", PR__MDL__SALARY), 400); } } return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::dsuiycscsceeqmga)->gswweykyogmsyawy(__("\x41\x63\x63\157\x75\x6e\164\x20\x4f\x77\156\x65\x72\40\116\x61\155\x65", PR__MDL__SALARY))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\x63\143\157\x75\x6e\164\x20\124\171\160\x65", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::wyqmcowecikgawuu, __("\111\x42\101\116", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::skyceaacaaaamiii, __("\x44\x65\142\151\x74\40\x43\141\162\144", PR__MDL__SALARY))->qyucewwiggkyeaso(BankAccountModel::wyqmcowecikgawuu, BankAccountModel::wyqmcowecikgawuu)->qyucewwiggkyeaso(BankAccountModel::skyceaacaaaamiii, BankAccountModel::skyceaacaaaamiii)->eumecwmqmukqgyea()->mkmssscwmeekwgqo(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\111\102\101\116", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::skyceaacaaaamiii)->gswweykyogmsyawy(__("\x44\145\142\x69\x74\40\x43\141\x72\144", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
