<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3f143c8c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class User extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_disable_admin_bar', [$this, 'eossmoygseiekewq']); parent::kgquecmsgcouyaya(); } public function init() { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->secqmksoyausymio(self::yuqaieqcaccggqck, __('Collaborator', PR__MDL__SALARY), ['read' => true]); } public function eossmoygseiekewq($ikcaescyugmgiegq) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie(self::yuqaieqcaccggqck)) { $ikcaescyugmgiegq = false; } return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { if ($uqyaagwcuoewkkss = $this->mmymimkumuekmmgi()) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce, 'index'); $ikgwqyuyckaewsow = [$uuyucgkyusckoaeq->qqmgmgasauucoago(self::qagqayweyigciamg)->omsoosuoikgueyke()->iygyugseyaqwywyg($ygikoqaokckisawo)->gswweykyogmsyawy(__('Bank Account Information', PR__MDL__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::oogeqgcgkamuoaoe)->eumecwmqmukqgyea())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Account Information Type', PR__MDL__SALARY))->acauweqyyugwisqc($uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw([Constants::ymckmcsiymwqucoq => self::oogeqgcgkamuoaoe, Constants::sssoieywiewykmam => $this->uyocacmiaawcwkyy()])->qyucewwiggkyeaso(self::wyqmcowecikgawuu, self::wyqmcowecikgawuu)->qyucewwiggkyeaso(self::skyceaacaaaamiii, self::skyceaacaaaamiii)->qigsyyqgewgskemg('account-type')->eumecwmqmukqgyea())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::skyceaacaaaamiii)->wykoackkeuuqeyss()->qigsyyqgewgskemg('card-value')->gswweykyogmsyawy($uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wyqmcowecikgawuu)->uagmgmommooaewkk()->qigsyyqgewgskemg('iban-value')->gswweykyogmsyawy($uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::iockmgiyoygcswog)->eumecwmqmukqgyea()->qigsyyqgewgskemg('account-owner')->gswweykyogmsyawy(__('Account Owner Name', PR__MDL__SALARY)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(self::wagwccqcqwgsoyoi)->qigsyyqgewgskemg('account-locked'))]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = [Constants::gouqcwikiiygyasc => $aiowsaccomcoikus->mwikyscisascoeea(), Constants::gsqoooskigukokks => $aiowsaccomcoikus->render(), Constants::qescuiwgsyuikume => $aiowsaccomcoikus->qcgakseyaikigqco()]; } } if ($ikgwqyuyckaewsow) { echo $this->iuygowkemiiwqmiw('profile', [Constants::qescuiwgsyuikume => __('Income and Payment', PR__MDL__SALARY), Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); } } } public function msysgqeewkqgscwe($mkucggyaiaukqoce, $ygikoqaokckisawo = []) { $oammesyieqmwuwyi = []; if (!$ygikoqaokckisawo) { $ygikoqaokckisawo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::qagqayweyigciamg, []); } if ($ygikoqaokckisawo && is_array($ygikoqaokckisawo)) { $gwscsiewquwmkkgu = $this->guimqgyewioyekuy($mkucggyaiaukqoce, self::wagwccqcqwgsoyoi); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $igqsaukqcqscimok = $this->aceogymkeuswukyi($eiwicgsqoiaeawkk); if ($igqsaukqcqscimok && !is_wp_error($igqsaukqcqscimok) && ($uusmaiomayssaecw = $igqsaukqcqscimok[Constants::ascagqcquwgmygkm]) && !isset($gwscsiewquwmkkgu[$uusmaiomayssaecw])) { $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; } } if ($gwscsiewquwmkkgu) { $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; } $this->ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce); } } public function aceogymkeuswukyi($eiwicgsqoiaeawkk) { $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($eiwicgsqoiaeawkk, [Constants::squoamkioomemiyi, Constants::iockmgiyoygcswog, self::oogeqgcgkamuoaoe])) { $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi); $miowmmgaiagcuyoo = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::iockmgiyoygcswog); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace(' ', '', $eqgoocgaqwqcimie); if ($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu)) { $sogksuscggsicmac = $uqyaagwcuoewkkss->kuuugksiksqcaaaa([Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu, self::wagwccqcqwgsoyoi => false, self::cqkcksqwkcsiykuq => $ygogqywsaqoukoqy]; } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Bank is not supported', PR__MDL__SALARY)); } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Some require parameters is missing', PR__MDL__SALARY)); } return $sogksuscggsicmac; } public function ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce) { if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $oammesyieqmwuwyi = array_values($gkyciwoiiisgywcs->ggkqgwsekcwaaawa($oammesyieqmwuwyi)); $oammesyieqmwuwyi = array_values($gkyciwoiiisgywcs->ggkqgwsekcwaaawa($oammesyieqmwuwyi)); } return $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::qagqayweyigciamg, $oammesyieqmwuwyi, $mkucggyaiaukqoce); } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ygikoqaokckisawo, $uusmaiomayssaecw); if ($eiwicgsqoiaeawkk) { $eiwicgsqoiaeawkk[self::wagwccqcqwgsoyoi] = true; $ygikoqaokckisawo[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; $this->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce); } } public function kkqikgwyqqmukogk($miowmmgaiagcuyoo, $uusmaiomayssaecw) : string { $eiwicgsqoiaeawkk = $this->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $uusmaiomayssaecw); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::iockmgiyoygcswog); $ygogqywsaqoukoqy = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); return sprintf('%s (%s)', $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function ogimyyckeeygkmyc($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ygikoqaokckisawo, $uusmaiomayssaecw, false); } public function guimqgyewioyekuy($mkucggyaiaukqoce, string $aqykuigiuwmmcieu = Constants::ALL) : array { $sogksuscggsicmac = []; $ygikoqaokckisawo = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::qagqayweyigciamg, $mkucggyaiaukqoce); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (is_array($ygikoqaokckisawo) && $ygikoqaokckisawo) { foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $eiwicgsqoiaeawkk[Constants::ciyoccqkiamemcmm] = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi, $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq)); if ($aqykuigiuwmmcieu === Constants::weiosaewqequuyuq) { $sogksuscggsicmac[] = $eiwicgsqoiaeawkk; } else { if ($aqykuigiuwmmcieu === Constants::ALL || $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $aqykuigiuwmmcieu, false)) { $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::ascagqcquwgmygkm); if ($uusmaiomayssaecw) { $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; } } } } } return $sogksuscggsicmac; } public function uyocacmiaawcwkyy() : array { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); if ($qgeeqyucwycemwmo && $aqsekqkimiekimei) { foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); } } } } return array_filter($qecuekqmeaiykeek); } public function uwoesmooocquykum($mkucggyaiaukqoce, string $aokagokqyuysuksm = 'bank_infos') : array { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $qecuekqmeaiykeek = $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; if ($ygikoqaokckisawo) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ygikoqaokckisawo as $uusmaiomayssaecw => $eiwicgsqoiaeawkk) { $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi); $miowmmgaiagcuyoo = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::iockmgiyoygcswog); $ygogqywsaqoukoqy = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); if ($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo) { $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$uusmaiomayssaecw] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$uusmaiomayssaecw] = sprintf("%s - %s", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true)) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $uusmaiomayssaecw]); } } } } } return [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg]; } public function ysqqicckeiweemmu($mkucggyaiaukqoce, string $aokagokqyuysuksm = 'bank_infos') : ?Select { $gmksciycsesoouoi = null; [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = $this->uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm); if ($ykiyyumywksqcisg && $iwkyyocymeukcceu) { $gmksciycsesoouoi = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec($aokagokqyuysuksm)->gswweykyogmsyawy(__('Bank Account Information', PR__MDL__SALARY))->masciqikccuysaem($ykiyyumywksqcisg, $iwkyyocymeukcceu)->ccewgoaawmaoiqqq($qecuekqmeaiykeek); } return $gmksciycsesoouoi; } }
