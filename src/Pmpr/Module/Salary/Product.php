<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9939cde6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; use WC_Order_Item_Product; class Product extends Container { use CallbackTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\157\x63\x6f\x6d\155\145\162\143\x65\137\x70\x61\171\x6d\x65\x6e\164\x5f\x63\157\x6d\x70\154\x65\164\145", [$this, "\x63\x79\161\x71\167\171\151\x63\x6f\141\151\x6f\141\153\165\163"], 9999)->qcsmikeggeemccuu("\x77\157\157\x63\157\155\155\x65\162\143\x65\137\157\x72\144\x65\x72\x5f\x73\164\141\164\x75\163\x5f\143\157\155\x70\154\x65\164\145\144", [$this, "\143\x79\x71\x71\x77\x79\x69\x63\x6f\x61\x69\x6f\141\153\165\163"], 9999); } public function cyqqwyicoaioakus($qsmogugokoieokgw) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WC_Order_Item_Product) { $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if ($product && $product->get_price('') > 0) { $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); } } } } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->igiwycommqemseky($cawesmkieccckaae); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if ($ekiuyucoiagmscgy = $gkyciwoiiisgywcs->get($xssuewsokckmigqk, Constants::wwgusigoaksqmwsm)) { $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ekiuyucoiagmscgy, ''); $okycmmskgswewacc = $ekiuyucoiagmscgy($xssuewsokckmigqk, $cawesmkieccckaae, $product); } else { $okycmmskgswewacc = $this->awweyuumwaygcauy($xssuewsokckmigqk); } if ($okycmmskgswewacc && is_array($okycmmskgswewacc)) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$ogekyekymoyuywog->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::awkcoioakcaougmq, $cawesmkieccckaae), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $umkkkaqkwugkemce), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $ousomaowqseoamse)])) { $sogksuscggsicmac = $ogekyekymoyuywog->muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!$sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua(sprintf(__("\x43\x61\156\x20\x6e\x6f\164\x20\141\144\x64\x20\151\x6e\143\x6f\x6d\145\72\x20\45\x73", PR__MDL__SALARY), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])), $umwqusowiqmyseom); } } } } } } public function awweyuumwaygcauy($xssuewsokckmigqk) : array { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $kueeocmceokoouqa->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if ($product) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->qqiwsumoyiukmgco($product); $eyscsimwcyaqakqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($umkkkaqkwugkemce, Constants::cmckeoksigiaqykc, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::kmqmeaywmyiqqkqw, [$umkkkaqkwugkemce])->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::guksqgkoswygwycw, $eyscsimwcyaqakqg)->iygikqkegwkaaess()]); } return $ywqqikcsamcaycgm; } }
