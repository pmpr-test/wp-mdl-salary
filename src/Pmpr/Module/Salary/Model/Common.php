<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8a2de401a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; abstract class Common extends Model { public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6d\x61\x72\153", ["\x63\154\141\x73\x73" => "\160\x72\x2d\163\164\141\164\165\163\40\163\164\x61\164\x75\x73\55{$iueymcwwscwqkiyq}"], $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = Constants::aioqyewkwawaqgqe) : int { $smowyuyseuwiaiei = 0; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); } } return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy, $syweiogqscmeigge = Constants::aioqyewkwawaqgqe) { $oammesyieqmwuwyi = $this->iekyeyicoyyawomk()->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $smowyuyseuwiaiei = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($smowyuyseuwiaiei); } return $smowyuyseuwiaiei; } }
