<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e8552c9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; abstract class Common extends Model { public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6d\141\162\153", ["\x63\154\141\163\x73" => "\x70\162\x2d\163\x74\141\x74\165\x73\x20\x73\x74\x61\164\165\x73\55{$iueymcwwscwqkiyq}"], $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = Constants::aioqyewkwawaqgqe) : int { $smowyuyseuwiaiei = 0; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); } } return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy, $syweiogqscmeigge = Constants::aioqyewkwawaqgqe) { $oammesyieqmwuwyi = $this->iekyeyicoyyawomk()->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $smowyuyseuwiaiei = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($smowyuyseuwiaiei); } return $smowyuyseuwiaiei; } }
