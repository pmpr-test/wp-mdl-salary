<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801066aede2f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; class Payment extends Common { const gkiqougcwigqqcos = 'deduct'; const wogsoiqickwekywu = 'payout'; const owskgkyceomsskgm = 'creator'; const qyeimiaoamokwygy = 'withdraw_id'; const aeikseqkgeyemmis = 'origin_desc'; const kmgieuiymcguqmka = 'reference_id'; const sgsawoooocqwouiy = 'tracking_code'; const qcqyuwsagkuqymwq = 'trans_datetime'; const kimkegwygaiggcmo = 'origin_account'; const kiwayowcwgkswqiw = 'destination_desc'; const umegccguweookqyu = 'atm'; const mouesqeemeaaukyu = 'api'; const keagmesmwegcscka = 'paya'; const oiyyoggwuogoeywy = 'satna'; const mqmqsemegeeckcoi = 'mobile_bank'; public function register() { $this->saemoowcasogykak(IconInterface::iksiysagwmuuokgs)->guiaswksukmgageq(__('Payment', PR__MDL__SALARY))->muuwuqssqkaieqge(__('Payments', PR__MDL__SALARY)); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::wogsoiqickwekywu)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__('Payout', PR__MDL__SALARY))->iwwmociiuayuwssq([$this, 'cymieikuqwyswcca']))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::ckcawaoawwioqecq, __('Success', PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::uasuowkaguiwoouw, __('Failed', PR__MDL__SALARY))->gswweykyogmsyawy(__('Status', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->gascwoasakiqyumc($eqgoocgaqwqcimie)); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::owskgkyceomsskgm)->gswweykyogmsyawy(__('Creator', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::gcegwkuowcquosok)->kesomeowemmyygey(1, self::mqmqsemegeeckcoi, __('Mobile Bank', PR__MDL__SALARY))->kesomeowemmyygey(2, self::keagmesmwegcscka, __('PAYA', PR__MDL__SALARY))->kesomeowemmyygey(3, self::oiyyoggwuogoeywy, __('SATNA', PR__MDL__SALARY))->kesomeowemmyygey(4, self::umegccguweookqyu, __('ATM', PR__MDL__SALARY))->kesomeowemmyygey(5, self::mouesqeemeaaukyu, __('API', PR__MDL__SALARY))->gswweykyogmsyawy(__('Terminal', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->mecqycesgysyasiu(self::qcqyuwsagkuqymwq)->gswweykyogmsyawy(__('Transaction Datetime', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::gkiqougcwigqqcos)->acceqyqygswoecwe(20)->gswweykyogmsyawy(__('Deducts', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->iwwmociiuayuwssq([$this, 'cymieikuqwyswcca']))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::kmgieuiymcguqmka)->acceqyqygswoecwe(10)->gswweykyogmsyawy(__('Reference ID', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::sgsawoooocqwouiy)->acceqyqygswoecwe(11)->gswweykyogmsyawy(__('Tracking Code', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::kimkegwygaiggcmo)->gswweykyogmsyawy(__('Origin Account', PR__MDL__SALARY))->acceqyqygswoecwe(8)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eiwicgsqoiaeawkk = Setting::symcgieuakksimmu()->wcwwuuouickuocsa($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $eiwicgsqoiaeawkk[Setting::gskosgoeymsumieq] ?? ''; } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::kiwayowcwgkswqiw)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Destination Description', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::aeikseqkgeyemmis)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__('Origin Description', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__('Withdraw', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::UPDATED_AT)->gswweykyogmsyawy(__('Updated At', PR__MDL__SALARY))); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::gcegwkuowcquosok)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::qcqyuwsagkuqymwq)->iccqusgqmsqaiqow())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::gkiqougcwigqqcos)->mouwuossggyiwems())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kmgieuiymcguqmka)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::sgsawoooocqwouiy)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wogsoiqickwekywu)->mouwuossggyiwems())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::kimkegwygaiggcmo)->acauweqyyugwisqc(Setting::symcgieuakksimmu()->wcwwuuouickuocsa(null, Constants::emgcgiseaoouacge)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(self::owskgkyceomsskgm))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::aeikseqkgeyemmis)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::kiwayowcwgkswqiw)->gsomueooycksswcy()->qsecygiycssgacqs(3)); } public function cymieikuqwyswcca($eqgoocgaqwqcimie) { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } public function gcmweiksuqcyskmi($mksyucucyswaukig) { $zomswssgcqowmuoy = Salary::symcgieuakksimmu()->kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); if ($zomswssgcqowmuoy) { $sqeykgyoooqysmca = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($zomswssgcqowmuoy, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($zomswssgcqowmuoy, Setting::oyyoccawmkogkcyy); $smowyuyseuwiaiei = 0; if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { $gkimsiseuqckqkso = $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); } else { if ($sqeykgyoooqysmca === Setting::ogkkygkwcccggasw) { $smowyuyseuwiaiei = $eqgoocgaqwqcimie; } } if ($smowyuyseuwiaiei > 0) { } } } public function yeuyyckseoiokmmm($icwicymcioeyeyek) { $eiuuauwyukskgois = $icwicymcioeyeyek[Constants::owskgkyceomsskgm]; if (!$eiuuauwyukskgois) { $icwicymcioeyeyek[self::owskgkyceomsskgm] = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); } return $icwicymcioeyeyek; } public function gascwoasakiqyumc($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } }
