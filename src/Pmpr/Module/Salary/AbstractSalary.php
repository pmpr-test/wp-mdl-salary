<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795528b1c7e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x73\x61\154\x61\162\x79\x5f\162\x65\161\x75\145\163\164\137\163\145\x6c\145\143\164\x6f\x72\137\143\x61\x6c\x6c\x62\x61\143\x6b\163", [$this, "\x6f\167\163\155\143\x75\155\155\171\155\x73\x6f\151\167\x77\171"])->waqewsckuayqguos("\x73\141\x6c\141\x72\x79\137\x70\x72\157\x64\165\x63\x74\137\x73\145\154\x65\143\x74\x6f\162\x5f\143\x61\x6c\154\142\x61\143\x6b\163", [$this, "\163\x75\x77\x65\x63\167\167\153\x6b\x73\155\171\155\x65\x75\x6f"]); } public final function owsmcummymsoiwwy($gsoeomygymgeosya = []) : array { if (!is_array($gsoeomygymgeosya)) { $gsoeomygymgeosya = []; } $gsoeomygymgeosya[self::class] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function suwecwwkksmymeuo($gsoeomygymgeosya = []) : array { if (!is_array($gsoeomygymgeosya)) { $gsoeomygymgeosya = []; } $gsoeomygymgeosya[self::class] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); return $mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce && $yoiguusocukqeayg->myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce))) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; public abstract function vaakeoqesyogieoe($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
