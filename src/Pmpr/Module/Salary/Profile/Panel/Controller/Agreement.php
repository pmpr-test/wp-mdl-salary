<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679775b44ea92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends AbstractAgreement { public function __construct() { $this->rest_base = "\141\x67\x72\145\145\155\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\164\x2d\x70\165\142\x6c\151\143\163", [Constants::wwgusigoaksqmwsm => [$this, "\x65\141\151\171\x6b\157\x6d\145\155\x6d\x69\x69\167\x6d\153\151"]])->register("\x2f\147\x65\164\x2d\141\147\x72\x65\x65\155\x65\x6e\164", [Constants::wwgusigoaksqmwsm => [$this, "\171\x79\143\x69\x6d\x63\141\x6b\165\x69\x79\155\x73\141\x6f\x71"]])->register("\x2f\x67\x65\x74\55\162\x65\161\165\x65\x73\x74", [Constants::wwgusigoaksqmwsm => [$this, "\171\171\161\147\x61\x6d\165\x77\x77\141\153\147\x63\x69\145\171"]])->register("\57\x67\x65\x74\x2d\x72\145\161\165\x65\163\164\55\141\x67\162\x65\145\155\x65\156\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x75\163\x75\x79\155\161\x69\x6b\145\147\163\167\x69\157\147\153"]])->register("\x2f\147\145\x74\x2d\160\162\x6f\144\165\143\x74\x73", [Constants::wwgusigoaksqmwsm => [$this, "\141\147\x65\161\x73\167\x77\x6b\x6b\161\x79\x77\143\x6b\143\157"]])->register("\x2f\x67\x65\x74\x2d\x63\x61\164\145\x67\x6f\162\x69\x65\163", [Constants::wwgusigoaksqmwsm => [$this, "\155\145\x73\x61\153\153\x79\143\157\x6d\x79\x75\x75\x77\x77\x6d"]])->register("\57\147\145\164\55\x6c\151\x73\164\55\142\x79\55\x75\163\x65\162", [Constants::wwgusigoaksqmwsm => [$this, "\x77\x63\143\153\x61\153\157\167\x65\167\151\143\163\163\x71\147"]])->register("\x2f\x67\145\164\x2d\x69\x6e\143\x6f\x6d\x65\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\x79\145\x63\x63\157\x79\x61\x73\x73\x67\x6f\x65\167\x69\x77"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $jwsqucqyaoaasykk->iekyeyicoyyawomk(); $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::mmisekagkomcsowm, $ycoeoaakqyskgykq)->iygikqkegwkaaess()->gouskoeouiqwokqs())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::aociysagacimyqgu, $mqamowqmoasqycgc)->iygikqkegwkaaess()->gouskoeouiqwokqs())->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])->oikgyoimkwywogca())->iygikqkegwkaaess(), $eqwoegegiamegqsm->owackeyiuiikegqg()->ggmcoioqwgyccyus()->sokmmiiuyqiuoqia($jwsqucqyaoaasykk::cmiegiycgiucucgs)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)->oikgyoimkwywogca()), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = "\162\145\x71\x75\145\163\164\137\x73\164\141\x74\x75\163"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); $wciwsoomyoeueocu = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask)); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\125\x6e\x72\x65\x71\x75\x65\x73\x74\x61\142\x6c\145", PR__MDL__SALARY); } else { if (!$wciwsoomyoeueocu) { $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\145\x71\165\145\163\164\x61\142\154\x65", PR__MDL__SALARY); } else { $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); } } $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->skckwsgymkimyuwo()->wgiecqcgakkauywu($gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw)), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yyqgamuwwakgciey(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\145\145\155\x65\x6e\x74"); if ($gikyaoiioawywyeu) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); if ($qgciakuqggmiywuk) { $keccaugmemegoimu = $kueeocmceokoouqa->scqakcemaqsqkema($qgciakuqggmiywuk); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $uiewakwqscemywuo = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wqeucwyckaoouggq, [], [Constants::cwswygwykwgsqiwu => true, Constants::kyyscqqmsikeuaea => Constants::ciywsqoeiymemsys, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wosqwewmqmyweqea => $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk)]); $iueymcwwscwqkiyq = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk); $aysmcsoiqcwcauqi = ''; $uyqeyioywyoosawa = []; switch ($iueymcwwscwqkiyq) { case Constants::sgoswgskyiiwkyuo: $aysmcsoiqcwcauqi = sprintf("\x3c\160\x3e\x25\x73\x3c\57\x70\x3e\x25\163", __("\x57\145\40\x68\x61\x76\x65\x20\162\145\143\x65\151\166\145\x64\x20\171\x6f\x75\x72\x20\162\x65\x71\x75\145\x73\x74\40\141\156\144\40\141\162\145\x20\162\145\166\151\x65\x77\x69\x6e\x67\40\151\x74\56", PR__MDL__SALARY), __("\124\x68\145\40\x61\x66\157\x72\x65\155\x65\156\164\x69\157\156\145\x64\x20\162\145\161\x75\x65\x73\x74\40\167\151\154\154\x20\x62\x65\x20\x61\160\160\162\x6f\166\x65\x64\x20\151\x66\x20\141\x6c\154\40\143\x6f\156\144\151\164\151\x6f\156\163\x20\x61\x6e\144\x20\160\162\145\162\x65\161\165\151\x73\151\x74\145\163\x20\x61\x72\x65\40\155\145\164\x2e", PR__MDL__SALARY)); break; case Constants::cwiummueqsucqayc: $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aysmcsoiqcwcauqi = sprintf("\74\x70\x3e\45\163\x3c\57\160\76\x25\x73", $swqimwqeweekeusq->ciuuiyckmsygceis(__("\103\157\x6e\147\162\141\164\165\x6c\141\164\x69\x6f\156\x73", PR__MDL__SALARY)), sprintf(__("\131\157\165\162\40\160\141\162\164\x6e\x65\x72\163\150\x69\160\x20\x77\151\164\x68\x20\45\x73\40\150\x61\163\x20\x73\x74\141\162\164\x65\144\x20\x61\x74\40\45\x73\40\x75\156\144\145\x72\x20\45\163\x20\141\x67\162\x65\x65\x6d\145\156\164\x2e\x20\103\x6c\151\143\153\40\x74\150\145\40\x62\165\164\164\157\156\40\x62\x65\154\157\167\x20\164\x6f\40\x76\x69\145\x77\x20\x74\x68\145\40\160\x61\x72\164\x6e\x65\162\163\150\x69\160\40\x61\x67\x72\145\x65\155\x65\x6e\164\x2e", PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), $swqimwqeweekeusq->ciuuiyckmsygceis($kueeocmceokoouqa->cokuiuygigcwcoms($qgciakuqggmiywuk, $kueeocmceokoouqa::aqsqycycmoieksam)), $swqimwqeweekeusq->ciuuiyckmsygceis($mssuumukiiaqmcka->waecsyqmwascmqoa($mssuumukiiaqmcka->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu), Constants::qescuiwgsyuikume)))); break; case Constants::yascuqeoeosyewwc: $aysmcsoiqcwcauqi = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::eqkeooqcsscoggia); break; case $kueeocmceokoouqa::wwggoguacgcaqaqm: $aysmcsoiqcwcauqi = sprintf("\x3c\160\x3e\x25\163\74\57\160\x3e\45\x73", __("\x59\157\x75\x72\40\x72\145\161\165\x65\163\x74\x20\151\163\x20\x69\x6e\x20\164\x68\145\x20\x69\x6e\164\145\x72\x6e\x73\150\x69\160\x20\x73\x74\x61\164\x65\56", PR__MDL__SALARY), sprintf(__("\x41\146\164\x65\162\x20\164\150\x65\x20\x69\156\x74\145\162\156\x73\150\x69\x70\x2c\40\x79\157\x75\162\40\x72\x65\161\165\x65\x73\x74\x20\x77\151\x6c\x6c\40\x62\x65\x20\x61\x63\x63\145\x70\164\x65\144\x20\141\x6e\x64\x20\x79\x6f\x75\162\x20\143\157\154\154\141\x62\x6f\162\141\x74\x69\x6f\x6e\40\x77\151\164\x68\x20\x25\x73\40\x77\151\x6c\154\40\142\145\x67\151\x6e\56", PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME))); break; case $kueeocmceokoouqa::mmyygcoemkeqcwii: $uyqeyioywyoosawa[Constants::iiismwgquaowosqw] = __("\101\x70\x70\x72\x6f\x76\x65\144", PR__MDL__SALARY); $aysmcsoiqcwcauqi = sprintf("\74\160\x3e\45\163\74\57\160\76\x25\163", sprintf(__("\x59\157\165\162\40\162\x65\161\x75\x65\x73\x74\40\x74\x6f\40\x63\x6f\x6c\x6c\x61\142\157\162\x61\x74\x65\x20\167\x69\x74\150\40\45\163\x20\x68\x61\x73\40\x62\145\145\156\40\x61\160\160\162\x6f\166\145\144\56", PR__MDL__SALARY), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME)), __("\131\157\x75\162\40\162\x65\161\165\x65\163\x74\x20\151\163\40\x63\165\162\x72\x65\x6e\x74\154\x79\x20\160\145\156\144\151\156\147\40\x70\x61\x79\155\145\156\x74\x2e\40\120\x6c\145\141\163\145\40\143\x6f\155\x70\x6c\145\164\145\40\171\x6f\x75\162\40\160\x61\x79\155\x65\156\x74\x20\x69\x6e\x20\x6f\x6e\x65\40\163\x74\145\x70\40\x28\x66\162\157\155\x20\x61\40\x62\141\x6e\153\40\x63\x61\x72\x64\40\x69\156\40\171\x6f\165\162\x20\156\141\155\x65\51\40\141\156\x64\x20\151\146\x20\171\157\165\40\141\162\145\40\165\x73\151\x6e\147\40\164\150\x65\x20\x63\141\x72\144\x2d\164\157\55\x63\141\x72\x64\x20\155\145\164\150\157\144\x2c\x20\145\156\164\x65\162\x20\x79\157\x75\162\40\x70\x61\x79\155\x65\x6e\164\40\151\156\x66\x6f\x72\x6d\x61\164\151\x6f\156\40\x69\156\40\x74\x68\x65\x20\146\x6f\162\x6d\x20\x62\145\154\x6f\x77\56", PR__MDL__SALARY)); break; case $kueeocmceokoouqa::ocquiawgyoguowuu: $uyqeyioywyoosawa[Constants::iiismwgquaowosqw] = __("\x41\160\160\162\157\x76\x65\x64", PR__MDL__SALARY); $uyqeyioywyoosawa[Constants::akmwceiyaqqoasuq] = __("\120\x61\151\144", PR__MDL__SALARY); $aysmcsoiqcwcauqi = __("\x57\x65\x20\x68\x61\166\x65\x20\x72\x65\143\145\151\x76\x65\x64\40\171\x6f\165\x72\40\160\x61\x79\x6d\145\156\x74\x20\151\x6e\x66\x6f\x72\155\141\164\151\x6f\x6e\x20\141\x6e\144\40\141\x72\x65\40\162\x65\166\151\145\167\151\156\x67\40\151\x74\x2e", PR__MDL__SALARY); break; } $keccaugmemegoimu["\x73\x74\x61\164\165\163\137\x6e\157\x74\151\143\x65"] = $aysmcsoiqcwcauqi; $keccaugmemegoimu["\163\164\x61\164\165\163\x65\x73\x5f\x73\x74\141\x63\x6b"] = $uyqeyioywyoosawa; if ($kueeocmceokoouqa::ocquiawgyoguowuu === $iueymcwwscwqkiyq && ($gkkgcoiwayaccqgm = $kueeocmceokoouqa->waecsyqmwascmqoa($qgciakuqggmiywuk, Constants::geykusaewkemcasi))) { $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->get($gkkgcoiwayaccqgm); if ($umwqusowiqmyseom) { $uuwmqqqiwksuaise = (int) $umwqusowiqmyseom->get_total(); $wewsywccwwomowkw = (int) $umwqusowiqmyseom->get_discount_total(); $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $ekyuqakigygoyume = [Constants::acymsykymkiewqsy => [Constants::qescuiwgsyuikume => __("\x43\157\x73\164\40\157\146\x20\x49\156\164\x65\162\x6e\x73\150\x69\160", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($uuwmqqqiwksuaise + $wewsywccwwomowkw)], Constants::uueoqmeyyeiqyuku => [Constants::qescuiwgsyuikume => __("\x44\x69\163\x63\x6f\x75\156\164", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($wewsywccwwomowkw)], Constants::akmwceiyaqqoasuq => [Constants::qescuiwgsyuikume => __("\101\155\157\x75\x6e\x74\x20\120\141\151\144", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($uuwmqqqiwksuaise)]]; $kuguwoaesuqsqysu = $kueeocmceokoouqa->qamwqasmmooweqme($umwqusowiqmyseom); $ekyuqakigygoyume = array_merge($ekyuqakigygoyume, $kuguwoaesuqsqysu); $keccaugmemegoimu[Constants::awkcoioakcaougmq] = $ekyuqakigygoyume; } } if (!empty($uiewakwqscemywuo[Constants::eqkeooqcsscoggia])) { $keccaugmemegoimu["\163\164\x61\x74\x75\x73\x5f\x64\x65\163\143\x72\x69\x70\164\151\157\x6e"] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($uiewakwqscemywuo[Constants::eqkeooqcsscoggia]); } if (Constants::cwiummueqsucqayc === $iueymcwwscwqkiyq) { $mwekmemkioiceiwa = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::mooigagqgycyeiis, ''); if ($mwekmemkioiceiwa) { $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $mwekmemkioiceiwa = $this->caokeucsksukesyo()->owgcciayoweymuws()->qquwggyuqouqumam($mwekmemkioiceiwa, [Constants::wqekaoqqacecmuyg => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME), $kueeocmceokoouqa::aycugmweyouqeiea => $mssuumukiiaqmcka->waecsyqmwascmqoa($mssuumukiiaqmcka->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu), Constants::qescuiwgsyuikume), $kueeocmceokoouqa::aqsqycycmoieksam => $kueeocmceokoouqa->cokuiuygigcwcoms($qgciakuqggmiywuk, $kueeocmceokoouqa::aqsqycycmoieksam)]); $keccaugmemegoimu["\143\x6f\157\160\145\x72\x61\164\151\157\x6e\x5f\x73\164\141\x74\x75\163\137\144\145\163\x63\x72\x69\x70\x74\151\157\x6e"] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($mwekmemkioiceiwa); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\165\40\x61\x72\x65\40\156\157\x74\x20\141\160\160\x6c\171\40\157\156\x20\x74\x68\x69\163\40\x61\147\162\145\145\x6d\145\x6e\164\40\x79\x65\164\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\x67\162\145\145\155\145\156\164\x20\x69\x64\x20\x69\x73\x20\141\x20\162\145\161\x75\151\162\x65\x20\146\x69\145\154\x64", PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function usuymqikegswiogk(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if (!is_wp_error($keccaugmemegoimu)) { if ($keccaugmemegoimu) { return $this->yycimcakuiymsaoq($aqmwamyiwgeeymqa); } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x72\x72\171\40\x79\x6f\165\40\x64\x6f\x6e\x74\40\x68\x61\x76\x65\x20\x70\x65\x72\x6d\151\x73\x73\x69\157\156\x20\x74\157\40\163\x65\145\40\x74\x68\x69\163\40\x72\x6f\165\164\145\x2e", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, true); if (!is_wp_error($keccaugmemegoimu)) { $xssuewsokckmigqk = $keccaugmemegoimu; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $aumscagymwyyicag = 0; if (Constants::cgkgowiusqeaagwg === $jwsqucqyaoaasykk->ogegcqqcukiaqscy($jwsqucqyaoaasykk::uiwumioqeeggcwwq, $xssuewsokckmigqk)) { $aumscagymwyyicag = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->owuaywucuaiyocum($jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::xoaoskywwwqwgqkk)); } $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ymgomemcusiiyksw($eqgoocgaqwqcimie); } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; } } $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] = [Constants::qescuiwgsyuikume => __("\103\x6f\163\x74\40\157\146\40\122\145\161\x75\145\163\x74", PR__MDL__SALARY), Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), Constants::qgqyauaqwqmqseim => IconInterface::iksiysagwmuuokgs]; $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $this->ocksiywmkyaqseou("\x73\141\x6c\141\162\171\137\x72\x65\x73\x74\x5f\x61\147\162\145\145\x6d\x65\x6e\x74\137\144\141\x74\141", $icwicymcioeyeyek, $xssuewsokckmigqk), Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\x75\162\x20\162\x65\161\x75\145\x73\x74\145\x64\40\x61\x67\x72\x65\145\x6d\x65\156\164\40\156\x6f\164\x20\x66\x6f\165\x6e\x64", PR__MDL__SALARY), 404); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $oksqskmgoqiqciis = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\x77\157\x65\171\x6b\167\167\x69\147\x6f\145\141\157\x71"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\147\x72\145\145\155\145\156\164" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\x61\167\147\x63\147\x61\x79\171\x6f\161\x69\x6b\155\x6d\x71\x6f"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\x67\x72\145\x65\x6d\x65\156\x74" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $wqqmoakyckcwwkua = $keccaugmemegoimu; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $kueeocmceokoouqa->mwyqswsaeeewsosm($wqqmoakyckcwwkua))]); } else { if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\111\x74\47\x73\x20\x73\x65\145\x6d\x73\x20\171\x6f\165\x20\144\x6f\156\x74\40\163\x75\142\155\151\164\x20\x61\x6e\x79\x20\x72\x65\161\x75\x65\163\x74\40\157\x6e\x20\164\150\145\x20\x61\x67\162\x65\145\155\x65\156\164", PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($kueeocmceokoouqa::woagckamiequeoyu)->ggmcoioqwgyccyus()]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::aqsqycycmoieksam)], Constants::wosqwewmqmyweqea => false]); if ($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, [])) { $oammesyieqmwuwyi = $kueeocmceokoouqa->cwgkcyyaymmsomqa($oammesyieqmwuwyi); $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($product) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\141\x6e\x6b"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if (!$aumscagymwyyicag) { $aumscagymwyyicag = __("\127\151\x74\150\x6f\x75\164\x20\x50\162\151\x63\x65", PR__MDL__SALARY); } $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; } else { $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } } return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas)) { $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); } } $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\142\154\141\x6e\153"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gikyaoiioawywyeu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if ($qgciakuqggmiywuk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $qecuekqmeaiykeek), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $gikyaoiioawywyeu)]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->iekyeyicoyyawomk()->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->iekyeyicoyyawomk()->asskucacysemeoiu($uoomaookgsyciacm); } $sogksuscggsicmac["\151\156\143\x6f\x6d\145\163\x5f\x73\x75\x6d"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\151\156\143\x6f\155\145\x73\x5f\x63\157\165\x6e\164"] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $sogksuscggsicmac; } }
