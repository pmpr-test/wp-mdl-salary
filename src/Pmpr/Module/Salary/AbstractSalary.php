<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0aecf0a9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\163\141\x6c\141\x72\171\137\x63\x61\154\154\x62\x61\143\x6b\x73", [$this, "\165\x71\171\x6f\145\x63\x67\x6f\167\x6d\141\x67\171\x71\157\x6f"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (!is_array($gsoeomygymgeosya)) { $gsoeomygymgeosya = []; } $gsoeomygymgeosya[self::class] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); return $mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce && $yoiguusocukqeayg->myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce))) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
