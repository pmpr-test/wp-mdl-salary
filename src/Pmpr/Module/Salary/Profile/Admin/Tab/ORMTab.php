<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99c5c3b55             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if ($this->waeasakssissiuqg()) { $this->waeasakssissiuqg()->prepare_items(); } parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if ($qsyooiqcmkcieyuk) { $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\154\x69\163\x74\137\x74\141\x62\154\x65" => $qsyooiqcmkcieyuk, Constants::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(Constants::mmieaueggwwaokig), Constants::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\x73\x65\x61\162\x63\150\x5f\x69\164\x65\x6d\163"), Constants::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), Constants::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; } return $qookweymeqawmcwo; } }
