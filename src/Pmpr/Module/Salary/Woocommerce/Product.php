<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb317f48c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; use WC_Order_Item_Product; class Product extends Container { use CallbackTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x74\x65\x6d\x70\x6c\x61\x74\145\137\x72\x65\144\151\162\145\x63\x74", [$this, "\x65\x6f\x73\x71\163\145\161\171\x63\x79\153\x69\x69\x69\163\x73"])->qcsmikeggeemccuu("\x77\157\x6f\x63\157\x6d\155\145\x72\x63\145\137\160\x72\157\x64\165\143\164\x5f\x71\x75\x65\162\x79", [$this, "\141\171\153\145\x69\x6b\x63\x71\x65\x77\x69\x6b\151\143\163\x71"]); $this->qcsmikeggeemccuu("\167\x6f\157\143\157\155\155\145\x72\x63\x65\137\x70\x61\171\155\145\x6e\164\137\143\157\155\160\154\145\164\145", [$this, "\143\171\161\161\x77\171\x69\143\157\141\151\x6f\x61\153\165\x73"], 9999)->qcsmikeggeemccuu("\167\x6f\x6f\143\x6f\155\x6d\x65\162\143\x65\x5f\157\162\x64\x65\162\x5f\x73\x74\141\164\165\x73\137\143\x6f\155\160\154\145\x74\x65\x64", [$this, "\143\x79\x71\x71\x77\171\x69\x63\157\141\x69\x6f\141\x6b\x75\x73"], 9999); } public function eosqseqycykiiiss() { if ($this->caokeucsksukesyo()->aqasygcsqysmmyke()->kccakwkaqugygwmq()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (Agreement::symcgieuakksimmu()->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::uiwumioqeeggcwwq, Constants::cgkgowiusqeaagwg), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::xoaoskywwwqwgqkk, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu())])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($this->caokeucsksukesyo()->wikusamwomuogoau()->cseyuuekwokecyyw()); exit; } } } public function aykeikcqewikicsq($gqgemcmoicmgaqie) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() || $this->caokeucsksukesyo()->owicscwgeuqcqaig()->uywcakyieooyscis()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oksqskmgoqiqciis = Agreement::symcgieuakksimmu()->iekyeyicoyyawomk()->ssiyoimagsskwsoi([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::uiwumioqeeggcwwq, Constants::cgkgowiusqeaagwg), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::xoaoskywwwqwgqkk)->amwwousckkqyweok()], Agreement::xoaoskywwwqwgqkk); $mmikekwwmyiuwsac = $gqgemcmoicmgaqie->get(Constants::kcaoouwiygwwmiok); if (!is_array($mmikekwwmyiuwsac)) { $mmikekwwmyiuwsac = []; } foreach ($oksqskmgoqiqciis as $product) { $mmikekwwmyiuwsac[] = $product; } $gqgemcmoicmgaqie->set(Constants::kcaoouwiygwwmiok, $mmikekwwmyiuwsac); } } public function cyqqwyicoaioakus($qsmogugokoieokgw) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WC_Order_Item_Product) { $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if ($product && $product->get_price('') > 0) { $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); } } } } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->igiwycommqemseky($cawesmkieccckaae); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if ($ekiuyucoiagmscgy = $gkyciwoiiisgywcs->get($xssuewsokckmigqk, Constants::wwgusigoaksqmwsm)) { $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ekiuyucoiagmscgy, ''); $okycmmskgswewacc = $ekiuyucoiagmscgy($xssuewsokckmigqk, $cawesmkieccckaae, $product); } else { $okycmmskgswewacc = $this->awweyuumwaygcauy($xssuewsokckmigqk); } if ($okycmmskgswewacc && is_array($okycmmskgswewacc)) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$ogekyekymoyuywog->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::awkcoioakcaougmq, $cawesmkieccckaae), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $umkkkaqkwugkemce), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $ousomaowqseoamse)])) { $sogksuscggsicmac = $ogekyekymoyuywog->muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!$sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua(sprintf(__("\103\141\156\40\156\x6f\164\40\x61\x64\144\x20\x69\x6e\143\x6f\155\145\x3a\40\x25\163", PR__MDL__SALARY), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])), $umwqusowiqmyseom); } } } } } } public function awweyuumwaygcauy($xssuewsokckmigqk) : array { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $kueeocmceokoouqa->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if ($product) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->qqiwsumoyiukmgco($product); $eyscsimwcyaqakqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($umkkkaqkwugkemce, Constants::cmckeoksigiaqykc, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::kmqmeaywmyiqqkqw, [$umkkkaqkwugkemce])->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::guksqgkoswygwycw, $eyscsimwcyaqakqg)->iygikqkegwkaaess()]); } return $ywqqikcsamcaycgm; } }
