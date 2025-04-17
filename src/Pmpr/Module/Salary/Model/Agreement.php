<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbc837863             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Traits\CallbackTrait; class Agreement extends Common { use CallbackTrait; const kmqmeaywmyiqqkqw = 'products'; const sseuikaiuuscgcge = 'income_id'; const cmiegiycgiucucgs = 'request_id'; const guksqgkoswygwycw = 'product_cats'; const siwsmgcqgcqmaeui = 'method_value'; const qioisiumsmwawmog = 'withdraw_method'; const cegqowuiwykuwuqk = 'withdraw_period'; const osuookueqksgeiok = 'has_an_internship'; const yykcmqogieykgkus = 'order_threshold_max'; const acyoqckgwoqymkwo = 'consider_before_min'; const weumemyqgykuwqok = 'order_threshold_min'; const qmussyiyukyyuciw = 'withdraw_min_balance'; const seeqqyqyyaiqcowg = 'order_threshold_type'; const aociysagacimyqgu = 'viewing_roles'; const mmisekagkomcsowm = 'viewing_users'; const iimaoeeqksicsawa = 'assigned_role'; const sqymqqcecuamwium = 'variable'; const aqkaquswquuyqkum = 'constant'; const qoqweioygeccqsek = 'manual'; const mmyumcecqsowacqk = 'automatic'; const wokicqaaogeeegsc = 'none'; const aucwwygcuwkokics = 'monetary'; const qmssqcoweqskggsc = 'numerical'; const quqkiyescimoqiqq = 'per_week'; const gosgaemswkmoscae = 'per_month'; const agysssmgkkkqukmo = 'each_three_month'; const iusuqewsekquykou = 'each_six_month'; const yoyiwacqmcayuiua = 'per_year'; const giskgsemukeyqsws = 'request_selector'; const ymmcwqwisimwywom = 'product_selector'; const qqgawquwsemqiqkc = self::ymmcwqwisimwywom . Constants::uaskkmuwccgisemo; const caumkgusgwiuegku = self::giskgsemukeyqsws . Constants::iesoyqkoyeskgeqa; const ukcwoygosqaeykki = self::ymmcwqwisimwywom . Constants::iesoyqkoyeskgeqa; const uiwumioqeeggcwwq = 'request_method'; const xoaoskywwwqwgqkk = 'request_method_product'; public function register() { $this->guiaswksukmgageq(__('Agreement', PR__MDL__SALARY))->muuwuqssqkaieqge(__('Agreements', PR__MDL__SALARY))->saemoowcasogykak(IconInterface::ucgguskkqggeiwaa); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::qescuiwgsyuikume)->acceqyqygswoecwe(200)->gswweykyogmsyawy(__('Title', PR__MDL__SALARY))->jyumyyugiwwiqomk(0))->cquokmemekqqywgi($eqwoegegiamegqsm->omkueasmegecueyk(self::osuookueqksgeiok)->gswweykyogmsyawy(__('Has an Internship', PR__MDL__SALARY))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::miswkosqicsksgok, __('Open', PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::cemyyceucooociss, __('Closed', PR__MDL__SALARY))->kesomeowemmyygey(3, Constants::aqugcqsyeisayuog, __('Private', PR__MDL__SALARY))->gswweykyogmsyawy(__('Status', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::aociysagacimyqgu)->gswweykyogmsyawy(__('Viewing Roles', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::mmisekagkomcsowm)->gswweykyogmsyawy(__('Viewing Users', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::iimaoeeqksicsawa)->gswweykyogmsyawy(__('Assigned Role', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($eqgoocgaqwqcimie); }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::caumkgusgwiuegku)->gswweykyogmsyawy(__('User(Request) Selector Callback', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->ekkwaykokcgqkmoi($eqgoocgaqwqcimie); }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::qqgawquwsemqiqkc)->gswweykyogmsyawy(__('Product Selector Method', PR__MDL__SALARY))->kesomeowemmyygey(1, Constants::wwgusigoaksqmwsm, __('By Callback', PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::iqiqoyeisqsagowm, __('Direct', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::ukcwoygosqaeykki)->gswweykyogmsyawy(__('Product Selector Callback', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->ekkwaykokcgqkmoi($eqgoocgaqwqcimie, self::ymmcwqwisimwywom); }))->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::kmqmeaywmyiqqkqw)->gswweykyogmsyawy(__('Products', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::guksqgkoswygwycw)->gswweykyogmsyawy(__('Product Categories', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::kkeogqiyysoyuemk)->gswweykyogmsyawy(__('Agreement Method', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, self::aqkaquswquuyqkum, __('Constant Rate', PR__MDL__SALARY))->kesomeowemmyygey(2, self::sqymqqcecuamwium, __('Variable Rate', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::siwsmgcqgcqmaeui)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__('Agreement Method Value', PR__MDL__SALARY))->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { $qgciuiagkkguykgs = $this->ogegcqqcukiaqscy(Constants::kkeogqiyysoyuemk, $mksyucucyswaukig); if ($qgciuiagkkguykgs === self::aqkaquswquuyqkum) { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$eqgoocgaqwqcimie}%"); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::seeqqyqyyaiqcowg)->gswweykyogmsyawy(__('Order Threshold Type', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, self::wokicqaaogeeegsc, __('Without Threshold', PR__MDL__SALARY))->kesomeowemmyygey(2, self::qmssqcoweqskggsc, __('Numerical', PR__MDL__SALARY))->kesomeowemmyygey(3, self::aucwwygcuwkokics, __('Monetary', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->omkueasmegecueyk(self::acyoqckgwoqymkwo)->gswweykyogmsyawy(__('Consider Before Minimum Threshold', PR__MDL__SALARY))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::yykcmqogieykgkus)->gswweykyogmsyawy(__('Maximum Order Threshold', PR__MDL__SALARY))->acceqyqygswoecwe(50)->acokiqqgsmoqaeyu()->iwwmociiuayuwssq([$this, 'sgsaaecmumaqckis']))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::weumemyqgykuwqok)->gswweykyogmsyawy(__('Minimum Order Threshold', PR__MDL__SALARY))->acceqyqygswoecwe(50)->acokiqqgsmoqaeyu()->iwwmociiuayuwssq([$this, 'sgsaaecmumaqckis']))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::qioisiumsmwawmog)->kesomeowemmyygey(1, self::qoqweioygeccqsek, __('Manual', PR__MDL__SALARY))->kesomeowemmyygey(2, self::mmyumcecqsowacqk, __('Automatic', PR__MDL__SALARY))->gswweykyogmsyawy(__('Withdraw Method', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::cegqowuiwykuwuqk)->gswweykyogmsyawy(__('Withdraw Period', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, self::quqkiyescimoqiqq, __('Per Week', PR__MDL__SALARY))->kesomeowemmyygey(2, self::gosgaemswkmoscae, __('Per Month', PR__MDL__SALARY))->kesomeowemmyygey(3, self::agysssmgkkkqukmo, __('Each Three Month', PR__MDL__SALARY))->kesomeowemmyygey(4, self::iusuqewsekquykou, __('Each Six Month', PR__MDL__SALARY))->kesomeowemmyygey(5, self::yoyiwacqmcayuiua, __('Per Year', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(self::uiwumioqeeggcwwq)->gswweykyogmsyawy(__('Request Method', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->kesomeowemmyygey(1, Constants::uomuwqaqggoekwwg, __('Free', PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::cgkgowiusqeaagwg, __('Costly', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::xoaoskywwwqwgqkk)->gswweykyogmsyawy(__('Request Method\'s Product', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->acceqyqygswoecwe(10))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Description', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->uqceekiqqwygomou($eqgoocgaqwqcimie); }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::ucoiewcoucauqwko)->gswweykyogmsyawy(__('Terms', PR__MDL__SALARY))->acokiqqgsmoqaeyu()->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->uqceekiqqwygomou($eqgoocgaqwqcimie); }))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__('Requests', PR__MDL__SALARY)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__SALARY))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::UPDATED_AT)->gswweykyogmsyawy(__('Updated At', PR__MDL__SALARY))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $uagwmwoawiwkycao = $this->caokeucsksukesyo()->issssuygyewuaswa()->yagwwwqikmkuyicq(true); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::osuookueqksgeiok))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo()->qyucewwiggkyeaso([Constants::miswkosqicsksgok, Constants::cemyyceucooociss], Constants::ucoiewcoucauqwko))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::aociysagacimyqgu)->acauweqyyugwisqc($uagwmwoawiwkycao)->qyucewwiggkyeaso('', self::mmisekagkomcsowm)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::mmisekagkomcsowm)->umokgsqqogccoouo()->qyucewwiggkyeaso('', self::aociysagacimyqgu)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::iimaoeeqksicsawa)->acauweqyyugwisqc($uagwmwoawiwkycao))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::kkeogqiyysoyuemk)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::siwsmgcqgcqmaeui)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::qioisiumsmwawmog)->mkmssscwmeekwgqo()->qyucewwiggkyeaso(self::mmyumcecqsowacqk, self::cegqowuiwykuwuqk))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::cegqowuiwykuwuqk)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::seeqqyqyyaiqcowg)->mkmssscwmeekwgqo()->qyucewwiggkyeaso([self::aucwwygcuwkokics, self::qmssqcoweqskggsc], [self::weumemyqgykuwqok, self::yykcmqogieykgkus, self::acyoqckgwoqymkwo]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::weumemyqgykuwqok)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::yykcmqogieykgkus)->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::acyoqckgwoqymkwo))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::caumkgusgwiuegku)->eumecwmqmukqgyea()->acauweqyyugwisqc($this->uiiyaqiemcccwewi(self::giskgsemukeyqsws)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::qqgawquwsemqiqkc)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->qyucewwiggkyeaso(Constants::wwgusigoaksqmwsm, self::ukcwoygosqaeykki)->qyucewwiggkyeaso(Constants::iqiqoyeisqsagowm, [self::kmqmeaywmyiqqkqw, self::guksqgkoswygwycw]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::ukcwoygosqaeykki)->eumecwmqmukqgyea()->acauweqyyugwisqc($this->uiiyaqiemcccwewi(self::ymmcwqwisimwywom)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::kmqmeaywmyiqqkqw)->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::guksqgkoswygwycw)->ikimooaieasgmeak(Constants::cmckeoksigiaqykc))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::uiwumioqeeggcwwq)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->qyucewwiggkyeaso(Constants::cgkgowiusqeaagwg, self::xoaoskywwwqwgqkk))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::xoaoskywwwqwgqkk)->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->qsecygiycssgacqs(5))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->qsecygiycssgacqs(5)); } public function yqoumqeggyoecuom($eqgoocgaqwqcimie, &$mksyucucyswaukig) { $oksqskmgoqiqciis = $this->waecsyqmwascmqoa($mksyucucyswaukig, self::kmqmeaywmyiqqkqw, []); $eyscsimwcyaqakqg = $this->waecsyqmwascmqoa($mksyucucyswaukig, self::guksqgkoswygwycw, []); if (!$this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $wamcomkuwysqgwgk = '%s %s'; $oammesyieqmwuwyi = []; if ($oksqskmgoqiqciis) { $meqocwsecsywiiqs = __('Product', PR__MDL__SALARY); if (($gaeqamemwmwsyukm = count($oksqskmgoqiqciis)) > 1) { $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm), $meqocwsecsywiiqs); } else { $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $meqocwsecsywiiqs, $this->dekewcqgacukskeq($oksqskmgoqiqciis)); } } if ($eyscsimwcyaqakqg) { $meqocwsecsywiiqs = __('Category', PR__MDL__SALARY); if (($gaeqamemwmwsyukm = count($eyscsimwcyaqakqg)) > 1) { $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm), $meqocwsecsywiiqs); } else { $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $meqocwsecsywiiqs, $this->swwqouewemsmsyui($eyscsimwcyaqakqg)); } } $eqgoocgaqwqcimie = sprintf(__('Include %s', PR__MDL__SALARY), $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->skauuuoqcaiseuks($oammesyieqmwuwyi, __('&nbsp;and&nbsp;', PR__MDL__SALARY))); } else { if ($oksqskmgoqiqciis) { } } if ($eqgoocgaqwqcimie) { $mksyucucyswaukig = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($mksyucucyswaukig, [self::guksqgkoswygwycw => $eqgoocgaqwqcimie, self::kmqmeaywmyiqqkqw => $eqgoocgaqwqcimie]); } return $eqgoocgaqwqcimie; } public function sgsaaecmumaqckis($eqgoocgaqwqcimie, $mksyucucyswaukig) { if ($eqgoocgaqwqcimie) { $qgciuiagkkguykgs = $this->ogegcqqcukiaqscy(self::seeqqyqyyaiqcowg, $mksyucucyswaukig); if ($qgciuiagkkguykgs === self::aucwwygcuwkokics) { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = sprintf(__('%s Number', PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } } else { $eqgoocgaqwqcimie = __('No Threshold', PR__MDL__SALARY); } return $eqgoocgaqwqcimie; } public function coyaqyocmqmmgeew($mkucggyaiaukqoce) : array { $ywqqikcsamcaycgm = []; if ($mkucggyaiaukqoce) { $uoomaookgsyciacm = $this->sewmuymswawyuiki($mkucggyaiaukqoce); if ($uoomaookgsyciacm) { $ywqqikcsamcaycgm = $this->iekyeyicoyyawomk()->cieaqygkucwoqwke($uoomaookgsyciacm); } } return $ywqqikcsamcaycgm; } public function dekewcqgacukskeq($oksqskmgoqiqciis = []) : string { $suuagcecoyuweoqk = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $suuagcecoyuweoqk[] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($usmsssmiougymckk->qcgakseyaikigqco($product), $usmsssmiougymckk->ycqquoiyyuesegsy($product)); } } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->skauuuoqcaiseuks($suuagcecoyuweoqk); } public function swwqouewemsmsyui($eyscsimwcyaqakqg = []) : string { $suuagcecoyuweoqk = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas); if ($guwumyyyakswawas) { $suuagcecoyuweoqk[] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($guwumyyyakswawas)); } } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->skauuuoqcaiseuks($suuagcecoyuweoqk); } public function sewmuymswawyuiki($mkucggyaiaukqoce, $uoomaookgsyciacm = []) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); $uagwmwoawiwkycao = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wgkweqmuaamuosoo = $eqwoegegiamegqsm->ucugosowycikeecc(); $wgkweqmuaamuosoo->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::mmisekagkomcsowm, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce))->iygikqkegwkaaess()->gouskoeouiqwokqs()); if ($uagwmwoawiwkycao) { foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { $wgkweqmuaamuosoo->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::aociysagacimyqgu, $oeucsuyqysaciasy)->iygikqkegwkaaess()->gouskoeouiqwokqs()); } } $uoomaookgsyciacm[] = $wgkweqmuaamuosoo; return $uoomaookgsyciacm; } }
