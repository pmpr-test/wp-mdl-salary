<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675f1d1909e0e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\AbstractSalary; use Pmpr\Module\Salary\Model\Agreement; trait CallbackTrait { public function ekkwaykokcgqkmoi(string $ccamueccusigaaio, string $sqeykgyoooqysmca = Agreement::giskgsemukeyqsws, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if ($ccamueccusigaaio) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { $sogksuscggsicmac = $this->uiiyaqiemcccwewi($sqeykgyoooqysmca)[$ccamueccusigaaio] ?? null; } else { $ccamueccusigaaio = str_replace("\x5f", "\134", $ccamueccusigaaio); if (is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio, $sqeykgyoooqysmca))) { $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (!is_callable($sogksuscggsicmac)) { $sogksuscggsicmac = null; } } } } return $sogksuscggsicmac; } private function uiiyaqiemcccwewi(string $sqeykgyoooqysmca, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->ocksiywmkyaqseou("\163\141\154\141\x72\x79\137{$sqeykgyoooqysmca}\137\143\x61\x6c\154\142\x61\x63\153\x73", []); if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if ($this->sqasccoaywygsoew($egkyssmuqcwaciya, $sqeykgyoooqysmca)) { $sogksuscggsicmac[esc_attr(str_replace("\x5c", "\x5f", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; } } } return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya, string $sqeykgyoooqysmca) { $ekiuyucoiagmscgy = false; $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); switch ($sqeykgyoooqysmca) { case Agreement::giskgsemukeyqsws: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\145\164\x4d\x61\164\x63\150\x65\x64\x52\x65\161\x75\145\x73\x74\163"); break; case Agreement::ymmcwqwisimwywom: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\x65\164\x4d\x61\164\x63\150\x65\x64\x50\x72\x6f\x64\x75\143\x74\x73"); break; } return $ekiuyucoiagmscgy; } }
