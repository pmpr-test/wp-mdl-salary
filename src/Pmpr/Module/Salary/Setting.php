<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4e548da             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\BankAccount; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; class Setting extends BaseClass { use CallbackTrait; const gkysgacoiamwmggk = 'salary_fee_policies'; const oyyoccawmkogkcyy = 'policy_value'; const aewsykuggcssqeyo = 'account_type'; const iyqigkiieoieskgy = 'policy_type'; const gskosgoeymsumieq = 'bank_name'; const mikaaiimemmoegcm = 'variable_policy'; const ogkkygkwcccggasw = 'constant_policy'; const eieeagimaskkekew = 'apply_require_fields'; const wqeucwyckaoouggq = 'request_statuses_description'; const mooigagqgycyeiis = 'cooperation_status_description'; const wuwwmuweuscicwww = 'account_number'; const oqimuqsisgcqsouy = 'origin_accounts'; const iqkskgussyuogioe = 'min_withdraw_balance'; const occewewsakqoacca = 'show' . Constants::icmokuskwoskgace; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __('Salary Setting', PR__MDL__SALARY); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Setting', PR__MDL__SALARY)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('agreement')->gswweykyogmsyawy(__('Agreement', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::ucgguskkqggeiwaa)->gucwmccyimoagwcm(__('Agreement Configuration', PR__MDL__SALARY))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::eieeagimaskkekew)->gswweykyogmsyawy(__('User Fields', PR__MDL__SALARY))->oikgogcweiiaocka()->gucwmccyimoagwcm(__('Require fields for apply', PR__MDL__SALARY))->acauweqyyugwisqc((array) $this->ocksiywmkyaqseou('panel_user_get_fields', [], [Constants::aisguagukaewucii => Constants::emgcgiseaoouacge])))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::wqeucwyckaoouggq)->gswweykyogmsyawy(__('Request Statuses Description', PR__MDL__SALARY))->omsoosuoikgueyke()->gucwmccyimoagwcm(__('Show to user if user request is on that status.', PR__MDL__SALARY))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::ciywsqoeiymemsys)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Status', PR__MDL__SALARY))->acauweqyyugwisqc(Request::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::ciywsqoeiymemsys)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Description', PR__MDL__SALARY))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::mooigagqgycyeiis)->qsecygiycssgacqs(5)->gswweykyogmsyawy(__('Cooperation Status Description', PR__MDL__SALARY))->gucwmccyimoagwcm(__('Shows to user on the cooperation status section', PR__MDL__SALARY))->uokyeqicycwwikwi(Constants::wqekaoqqacecmuyg, __('Site title', PR__MDL__SALARY))->uokyeqicycwwikwi(Request::aycugmweyouqeiea, __('Agreement', PR__MDL__SALARY))->uokyeqicycwwikwi(Request::aqsqycycmoieksam, __('Accepted at', PR__MDL__SALARY)))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('transactions')->gswweykyogmsyawy(__('Transactions', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::gucgemsgiqmwqwgu)->gucwmccyimoagwcm(__('Transactions Configuration', PR__MDL__SALARY))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::iqkskgussyuogioe)->mouwuossggyiwems()->gswweykyogmsyawy(__('Min Withdraw Balance', PR__MDL__SALARY)))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::oqimuqsisgcqsouy)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Origin Accounts', PR__MDL__SALARY))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__SALARY)))->mkksewyosgeumwsa($this->mwucaoayqeaguayk(self::gskosgoeymsumieq))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wuwwmuweuscicwww)->gswweykyogmsyawy(__('Account Number', PR__MDL__SALARY))->escqqisecooswqgo())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('fee_policy')->saemoowcasogykak(IconInterface::oyycwgguwwuseiym)->gswweykyogmsyawy(__('Fee Policies', PR__MDL__SALARY))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::gkysgacoiamwmggk)->gswweykyogmsyawy(__('Fee Policies', PR__MDL__SALARY))->omsoosuoikgueyke()->ysgmmmoecswoigyq([self::gskosgoeymsumieq, self::aewsykuggcssqeyo])->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(Constants::iccwcygaeqmomooo)->gswweykyogmsyawy(__('Enable', PR__MDL__SALARY)))->mkksewyosgeumwsa($this->mwucaoayqeaguayk(self::gskosgoeymsumieq)->oikgogcweiiaocka())->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::aewsykuggcssqeyo)->oikgogcweiiaocka()->gswweykyogmsyawy(__('Account Information Type', PR__MDL__SALARY))->acauweqyyugwisqc(BankAccount::symcgieuakksimmu()->uqeoyqiwywwmsiew(Constants::squoamkioomemiyi)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::iyqigkiieoieskgy)->gswweykyogmsyawy(__('Policy Type', PR__MDL__SALARY))->acauweqyyugwisqc($this->ksiaywqocueukouw())->eyygsasuqmommkua(self::ogkkygkwcccggasw)->qyucewwiggkyeaso(self::mikaaiimemmoegcm, self::mikaaiimemmoegcm)->qyucewwiggkyeaso(self::ogkkygkwcccggasw, self::ogkkygkwcccggasw))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::ogkkygkwcccggasw)->gswweykyogmsyawy($this->ksiaywqocueukouw(self::ogkkygkwcccggasw))->mouwuossggyiwems())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::mikaaiimemmoegcm)->gswweykyogmsyawy($this->ksiaywqocueukouw(self::mikaaiimemmoegcm))->iaggyqeqiyqgmgoo())))); parent::ykwqaukkycogooii(); } public function wcwwuuouickuocsa($ksiyqouuaoymsycg = null, $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $sogksuscggsicmac = []; $ygikoqaokckisawo = $this->oycoyoggyswwygye(self::oqimuqsisgcqsouy, [Constants::wkweqssoakmmmguq => [self::gskosgoeymsumieq]]); if ($ygikoqaokckisawo) { $qmycwsskyqkumsco = BankAccount::symcgieuakksimmu()->skawqwmckecgauyc(); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $uusmaiomayssaecw = $eiwicgsqoiaeawkk[Constants::ascagqcquwgmygkm] ?? ''; $qmomekeesaiaoegu = $eiwicgsqoiaeawkk[self::gskosgoeymsumieq] ?? ''; if ($uusmaiomayssaecw && $qmomekeesaiaoegu) { $eiwicgsqoiaeawkk[Constants::qgqyauaqwqmqseim] = $qmycwsskyqkumsco[$qmomekeesaiaoegu][Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy; $eiwicgsqoiaeawkk[self::gskosgoeymsumieq] = $qmycwsskyqkumsco[$qmomekeesaiaoegu][Constants::qescuiwgsyuikume] ?? ''; if ($ksiyqouuaoymsycg) { if ($ksiyqouuaoymsycg === $uusmaiomayssaecw) { $sogksuscggsicmac = $eiwicgsqoiaeawkk; break; } } else { if ($aqykuigiuwmmcieu !== Constants::ckmqoekmugkggeym) { $meqocwsecsywiiqs = $eiwicgsqoiaeawkk[Constants::qescuiwgsyuikume] ?? ''; $eusockqasqqmoess = $eiwicgsqoiaeawkk[self::wuwwmuweuscicwww] ?? ''; $eiwicgsqoiaeawkk = sprintf('%s (%s)', $meqocwsecsywiiqs, $eusockqasqqmoess); } $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; } } } } return $sogksuscggsicmac; } public function ksiaywqocueukouw($qqqskcogoyswqaum = '') { $aacykmqwasyaykgu = [self::ogkkygkwcccggasw => __('Constant Rate', PR__MDL__SALARY), self::mikaaiimemmoegcm => __('Variable Rate', PR__MDL__SALARY)]; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aacykmqwasyaykgu, $qqqskcogoyswqaum, $aacykmqwasyaykgu); } public function mwucaoayqeaguayk(string $aokagokqyuysuksm) : Select { $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; foreach (BankAccount::symcgieuakksimmu()->skawqwmckecgauyc() as $iooykwoeyiscymcw => $cymcyywycwkawmsi) { $ykiyyumywksqcisg[$iooykwoeyiscymcw] = $cymcyywycwkawmsi[Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy; $iwkyyocymeukcceu[$iooykwoeyiscymcw] = $cymcyywycwkawmsi[Constants::qescuiwgsyuikume] ?? ''; } return $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec($aokagokqyuysuksm)->gswweykyogmsyawy(__('Bank Name', PR__MDL__SALARY))->masciqikccuysaem($ykiyyumywksqcisg, $iwkyyocymeukcceu)->qigsyyqgewgskemg('bank-name'); } }
