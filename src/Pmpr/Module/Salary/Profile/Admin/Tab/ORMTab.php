<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793de26618e9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if ($this->waeasakssissiuqg()) { $this->waeasakssissiuqg()->prepare_items(); } parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if ($qsyooiqcmkcieyuk) { $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\154\151\163\x74\137\x74\x61\x62\x6c\x65" => $qsyooiqcmkcieyuk, Constants::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(Constants::mmieaueggwwaokig), Constants::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\x73\145\141\162\x63\150\x5f\x69\x74\145\x6d\x73"), Constants::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), Constants::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; } return $qookweymeqawmcwo; } }
