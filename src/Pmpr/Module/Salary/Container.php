<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c9278ae3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Container extends BaseClass { const wyqmcowecikgawuu = "\x69\x62\x61\x6e"; const oogeqgcgkamuoaoe = "\x62\x61\x6e\x6b"; const wagwccqcqwgsoyoi = "\x6c\157\143\153\x65\144"; const cqkcksqwkcsiykuq = "\x65\x73\x63\x61\x70\145\x64"; const kuwsqycgaagiimge = "\141\143\143\157\165\156\164"; const skyceaacaaaamiii = "\144\x65\142\151\x74\x5f\x63\141\162\144"; const qagqayweyigciamg = "\163\141\154\x61\162\x79\137\x62\x61\x6e\153\x5f\141\x63\x63\157\165\x6e\x74\x5f\x69\x6e\146\x6f\162\155\x61\x74\151\157\x6e"; const yuqaieqcaccggqck = "\143\157\154\154\x61\142\157\162\141\x74\157\x72"; public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if ($eqgoocgaqwqcimie) { $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; } } } } return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if ($qqswgiawgeaeoecu) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$eqgoocgaqwqcimie}\45"); } else { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } $isweyuoisomqyaag = [Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ssmskyqgcmeiayco => sprintf(__("\x46\x65\x65\x20\157\x66\40\145\x61\143\x68\40\x74\x72\141\x6e\x73\x61\143\x74\151\157\x6e\x20\151\163\x20\x25\163", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; } return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true)) { $ccamueccusigaaio = $qqqskcogoyswqaum; break; } } return $ccamueccusigaaio; } }
