<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677d835e029ac             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if ($this->waeasakssissiuqg()) { $this->waeasakssissiuqg()->prepare_items(); } parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if ($qsyooiqcmkcieyuk) { $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\x6c\x69\163\164\137\x74\x61\142\154\145" => $qsyooiqcmkcieyuk, Constants::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(Constants::mmieaueggwwaokig), Constants::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\163\x65\141\x72\x63\x68\x5f\x69\164\x65\155\x73"), Constants::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), Constants::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; } return $qookweymeqawmcwo; } }
