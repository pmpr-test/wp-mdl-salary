<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff69626c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; use WP_User; class BankAccount extends Controller { public function __construct() { $this->rest_base = "\142\141\156\x6b\x2d\141\x63\143\x6f\x75\x6e\164"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\164\55\154\151\x73\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x63\x69\165\x67\x77\157\x6f\141\163\x61\161\x63\x79\x77\x61\x73"]]); $this->register("\x2f\x67\145\x74\x2d\x66\151\145\154\x64\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\x67\x6d\143\145\x63\143\x67\167\141\141\x61\151\147\x69\171"]]); $this->register("\x2f\163\141\166\x65", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\141\x76\x65"]]); $this->register("\x2f\x64\145\154\145\x74\x65", [Constants::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, Constants::wwgusigoaksqmwsm => [$this, "\x64\145\154\145\x74\x65"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $yygmoeguaqyumuui = [Constants::squoamkioomemiyi, BankAccountModel::oogeqgcgkamuoaoe, BankAccountModel::dsuiycscsceeqmga, Constants::ciyoccqkiamemcmm]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $gkioossaaiumqqsq = $kekwscouisqosqio->iekyeyicoyyawomk(); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $keccaugmemegoimu = $gkioossaaiumqqsq->aeggeuqycwawueqy($gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu))]), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $eaoumsseceiowgsk = (array) $igqsaukqcqscimok; $scsyuucsumiwkqqc = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $igqsaukqcqscimok = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $qwkooaaqwoeeuccc = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqeykgyoooqysmca = $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $eaoumsseceiowgsk[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $eaoumsseceiowgsk[$sqeykgyoooqysmca] = $eaoumsseceiowgsk[Constants::ciyoccqkiamemcmm]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $meqocwsecsywiiqs = $eqgoocgaqwqcimie = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::squoamkioomemiyi: $meqocwsecsywiiqs = __("\x54\171\x70\x65", PR__MDL__SALARY); $eqgoocgaqwqcimie = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqqewmoeaekuyyas = 2; break; case BankAccountModel::oogeqgcgkamuoaoe: $meqocwsecsywiiqs = __("\x42\x61\156\153", PR__MDL__SALARY); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[$uusmaiomayssaecw] ?? ''; $sqqewmoeaekuyyas = 1; break; case BankAccountModel::dsuiycscsceeqmga: $meqocwsecsywiiqs = sprintf(__("\117\167\156\145\162\x20\x6f\146\x20\x25\x73", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[BankAccountModel::dsuiycscsceeqmga]; break; case Constants::ciyoccqkiamemcmm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($scsyuucsumiwkqqc[Constants::ciyoccqkiamemcmm]); $meqocwsecsywiiqs = sprintf(__("\x4e\x75\x6d\142\145\x72\x20\157\146\x20\x25\x73", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $sqqewmoeaekuyyas = 99; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($igqsaukqcqscimok, [Constants::ygeqsmugcaeeeuwu => $eaoumsseceiowgsk, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc)) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $kooascmqqwmaskmi = $kekwscouisqosqio->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($kooascmqqwmaskmi) { if (Constants::wagwccqcqwgsoyoi !== $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $kooascmqqwmaskmi)) { $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\x61\x6e\x6b\x20\141\143\143\x6f\x75\156\164\40\x72\x65\x6d\157\x76\x65\x64\x20\x73\165\x63\x63\x65\x73\x73\146\165\154\154\171", PR__MDL__SALARY)); } else { if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\155\145\164\150\x69\156\147\40\167\162\157\x6e\x67\40\157\x6e\40\162\145\x6d\x6f\166\145\x20\160\162\157\143\x65\163\163\x2c\40\x70\154\x65\141\x73\145\x20\164\162\171\x20\141\x67\141\x69\x6e", PR__MDL__SALARY)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\x72\40\x72\145\x71\x75\x65\163\164\145\x64\x20\141\x63\x63\x6f\x75\156\164\x20\146\157\x72\40\162\145\x6d\157\166\145\40\151\x73\40\x6c\157\x63\153\145\x64", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\x61\x6e\40\156\157\x74\x20\x66\x69\156\x64\x20\162\x65\161\165\x65\x73\x74\145\144\x20\x61\x63\x63\157\165\x6e\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc, 0)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $aokagokqyuysuksm = 0) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); $ecoqwakkesyewqwg = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, BankAccountModel::dsuiycscsceeqmga); if ($ecoqwakkesyewqwg && $sqeykgyoooqysmca) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $icwicymcioeyeyek = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ciyoccqkiamemcmm => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca), Constants::yauicucwkgqyygas => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), BankAccountModel::dsuiycscsceeqmga => $ecoqwakkesyewqwg]; if ($aokagokqyuysuksm) { $icwicymcioeyeyek[$kekwscouisqosqio->kumuygiiqswoyasy()] = $aokagokqyuysuksm; } $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\x6e\153\x20\x61\x63\143\x6f\165\156\164\x20\x73\141\166\x65\144\40\x73\x75\x63\143\x65\163\x73\146\165\154\x6c\171", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\151\x73\163\151\156\147\40\163\x6f\x6d\145\x20\x72\145\x71\x75\x69\x72\x65\40\146\151\145\x6c\x64\x73", PR__MDL__SALARY), 400); } } return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::dsuiycscsceeqmga)->gswweykyogmsyawy(__("\x41\143\143\157\x75\156\x74\40\x4f\x77\x6e\x65\x72\x20\116\141\155\145", PR__MDL__SALARY))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\x63\x63\157\165\x6e\x74\40\x54\171\x70\x65", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::wyqmcowecikgawuu, __("\x49\102\x41\x4e", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::skyceaacaaaamiii, __("\104\x65\x62\151\164\x20\103\141\x72\144", PR__MDL__SALARY))->qyucewwiggkyeaso(BankAccountModel::wyqmcowecikgawuu, BankAccountModel::wyqmcowecikgawuu)->qyucewwiggkyeaso(BankAccountModel::skyceaacaaaamiii, BankAccountModel::skyceaacaaaamiii)->eumecwmqmukqgyea()->mkmssscwmeekwgqo(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\x49\102\x41\x4e", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::skyceaacaaaamiii)->gswweykyogmsyawy(__("\104\x65\x62\151\x74\40\103\x61\x72\144", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
