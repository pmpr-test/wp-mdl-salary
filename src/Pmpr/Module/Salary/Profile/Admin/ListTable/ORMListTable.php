<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff69626c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\View\ListTable; class ORMListTable extends ListTable { public function eeowuwkaomauqkai($siykeiywomwwuoiw = null) : ?Builder { return $this->mgogaykgkoogasim()->wkmkqaiwuqouweye(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), "\x3d", $siykeiywomwwuoiw); } public function qkeoieugywkooams() : ?Builder { $siykeiywomwwuoiw = parent::qkeoieugywkooams(); return $this->eeowuwkaomauqkai($siykeiywomwwuoiw); } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { $siykeiywomwwuoiw = $this->eeowuwkaomauqkai($siykeiywomwwuoiw); return parent::before_pagination($siykeiywomwwuoiw); } public function get_bulk_actions() : array { return []; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { return ''; } protected function kgewmaycsoykyaso($ccowyogiqwikkkie) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ccowyogiqwikkkie, Constants::DELETE); return $ccowyogiqwikkkie; } public function ewgmueueeycoikso($oammesyieqmwuwyi) : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $swaaugcasqkysckc) { $meqocwsecsywiiqs = ''; if (is_numeric($momcykaoccoymeig)) { $momcykaoccoymeig = $swaaugcasqkysckc; $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($swaaugcasqkysckc); if ($aiowsaccomcoikus) { $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); } } else { $meqocwsecsywiiqs = $swaaugcasqkysckc; } $wkkweuacukumqmya[$momcykaoccoymeig] = $meqocwsecsywiiqs; } $wkkweuacukumqmya[Constants::CREATED_AT] = __("\x43\x72\x65\141\164\x65\x64\40\x61\164", PR__MDL__SALARY); } return $wkkweuacukumqmya; } }
