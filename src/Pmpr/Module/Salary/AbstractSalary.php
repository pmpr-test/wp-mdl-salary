<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793d9693674f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x73\141\x6c\141\162\171\137\x72\x65\161\165\x65\x73\x74\x5f\163\145\154\x65\x63\164\157\162\x5f\143\x61\154\x6c\x62\x61\x63\153\163", [$this, "\x6f\x77\163\x6d\x63\165\x6d\x6d\171\x6d\x73\x6f\x69\x77\x77\x79"])->waqewsckuayqguos("\x73\x61\154\x61\162\x79\x5f\160\x72\x6f\144\x75\143\164\137\x73\145\x6c\x65\x63\164\x6f\x72\x5f\143\141\x6c\x6c\x62\141\x63\153\x73", [$this, "\x73\x75\167\x65\143\167\167\153\x6b\x73\x6d\171\x6d\x65\x75\x6f"]); } public final function owsmcummymsoiwwy($gsoeomygymgeosya = []) : array { if (!is_array($gsoeomygymgeosya)) { $gsoeomygymgeosya = []; } $gsoeomygymgeosya[self::class] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function suwecwwkksmymeuo($gsoeomygymgeosya = []) : array { if (!is_array($gsoeomygymgeosya)) { $gsoeomygymgeosya = []; } $gsoeomygymgeosya[self::class] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); return $mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce && $yoiguusocukqeayg->myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce))) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; public abstract function vaakeoqesyogieoe($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
