<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e029ac             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; use WP_User; class BankAccount extends Controller { public function __construct() { $this->rest_base = "\x62\141\156\153\x2d\x61\x63\143\157\165\156\164"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\x74\55\x6c\x69\x73\164", [Constants::wwgusigoaksqmwsm => [$this, "\x63\x69\165\147\167\157\x6f\141\163\141\161\x63\171\167\x61\x73"]]); $this->register("\x2f\147\145\x74\x2d\x66\151\x65\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\165\147\x6d\x63\x65\143\143\147\167\x61\141\141\x69\x67\151\x79"]]); $this->register("\57\x73\x61\166\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\163\141\166\x65"]]); $this->register("\x2f\144\x65\x6c\145\164\145", [Constants::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, Constants::wwgusigoaksqmwsm => [$this, "\144\145\x6c\145\164\145"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $yygmoeguaqyumuui = [Constants::squoamkioomemiyi, BankAccountModel::oogeqgcgkamuoaoe, BankAccountModel::dsuiycscsceeqmga, Constants::ciyoccqkiamemcmm]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $gkioossaaiumqqsq = $kekwscouisqosqio->iekyeyicoyyawomk(); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $keccaugmemegoimu = $gkioossaaiumqqsq->aeggeuqycwawueqy($gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu))]), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $eaoumsseceiowgsk = (array) $igqsaukqcqscimok; $scsyuucsumiwkqqc = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $igqsaukqcqscimok = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $qwkooaaqwoeeuccc = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqeykgyoooqysmca = $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $eaoumsseceiowgsk[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $eaoumsseceiowgsk[$sqeykgyoooqysmca] = $eaoumsseceiowgsk[Constants::ciyoccqkiamemcmm]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $meqocwsecsywiiqs = $eqgoocgaqwqcimie = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::squoamkioomemiyi: $meqocwsecsywiiqs = __("\x54\x79\x70\145", PR__MDL__SALARY); $eqgoocgaqwqcimie = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqqewmoeaekuyyas = 2; break; case BankAccountModel::oogeqgcgkamuoaoe: $meqocwsecsywiiqs = __("\x42\x61\156\153", PR__MDL__SALARY); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[$uusmaiomayssaecw] ?? ''; $sqqewmoeaekuyyas = 1; break; case BankAccountModel::dsuiycscsceeqmga: $meqocwsecsywiiqs = sprintf(__("\x4f\x77\x6e\x65\162\40\157\146\x20\45\x73", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[BankAccountModel::dsuiycscsceeqmga]; break; case Constants::ciyoccqkiamemcmm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($scsyuucsumiwkqqc[Constants::ciyoccqkiamemcmm]); $meqocwsecsywiiqs = sprintf(__("\116\165\155\142\x65\x72\40\x6f\x66\x20\x25\163", PR__MDL__SALARY), $qwkooaaqwoeeuccc); $sqqewmoeaekuyyas = 99; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($igqsaukqcqscimok, [Constants::ygeqsmugcaeeeuwu => $eaoumsseceiowgsk, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc)) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $kooascmqqwmaskmi = $kekwscouisqosqio->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($kooascmqqwmaskmi) { if (Constants::wagwccqcqwgsoyoi !== $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $kooascmqqwmaskmi)) { $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\x6e\x6b\40\141\143\x63\157\x75\156\x74\x20\162\145\x6d\x6f\x76\145\x64\40\x73\165\x63\143\145\x73\163\x66\165\154\x6c\x79", PR__MDL__SALARY)); } else { if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\155\x65\164\150\151\156\147\x20\167\162\157\156\147\x20\157\x6e\40\162\x65\x6d\x6f\166\x65\x20\160\162\157\143\145\163\163\54\x20\160\x6c\x65\x61\x73\145\x20\164\162\171\40\141\x67\141\x69\156", PR__MDL__SALARY)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\157\x75\162\x20\162\145\x71\165\145\163\164\145\x64\x20\141\143\x63\157\x75\156\x74\x20\x66\157\162\x20\x72\145\x6d\157\166\x65\x20\151\163\x20\x6c\x6f\143\x6b\145\x64", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\x6e\40\x6e\157\x74\x20\146\151\156\x64\40\x72\145\161\x75\x65\163\164\x65\x64\40\141\x63\143\x6f\165\156\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc, 0)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $aokagokqyuysuksm = 0) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); $ecoqwakkesyewqwg = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, BankAccountModel::dsuiycscsceeqmga); if ($ecoqwakkesyewqwg && $sqeykgyoooqysmca) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $icwicymcioeyeyek = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ciyoccqkiamemcmm => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca), Constants::yauicucwkgqyygas => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), BankAccountModel::dsuiycscsceeqmga => $ecoqwakkesyewqwg]; if ($aokagokqyuysuksm) { $icwicymcioeyeyek[$kekwscouisqosqio->kumuygiiqswoyasy()] = $aokagokqyuysuksm; } $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\x6e\153\40\x61\143\x63\x6f\x75\156\164\x20\163\141\x76\x65\144\40\x73\x75\143\143\x65\163\163\146\165\x6c\x6c\171", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\151\x73\163\151\x6e\x67\40\x73\157\155\x65\x20\162\x65\x71\165\151\x72\x65\40\x66\x69\x65\x6c\144\x73", PR__MDL__SALARY), 400); } } return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::dsuiycscsceeqmga)->gswweykyogmsyawy(__("\x41\143\143\157\165\156\x74\x20\x4f\x77\x6e\x65\162\40\x4e\141\x6d\x65", PR__MDL__SALARY))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\x63\x63\157\165\156\164\40\x54\171\x70\145", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::wyqmcowecikgawuu, __("\111\102\101\x4e", PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::skyceaacaaaamiii, __("\104\145\142\x69\x74\x20\x43\x61\x72\x64", PR__MDL__SALARY))->qyucewwiggkyeaso(BankAccountModel::wyqmcowecikgawuu, BankAccountModel::wyqmcowecikgawuu)->qyucewwiggkyeaso(BankAccountModel::skyceaacaaaamiii, BankAccountModel::skyceaacaaaamiii)->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\111\x42\101\x4e", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::skyceaacaaaamiii)->gswweykyogmsyawy(__("\104\145\142\x69\164\40\103\141\x72\x64", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
