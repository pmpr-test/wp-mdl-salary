<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6776ec40b27c2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Container extends BaseClass { const wyqmcowecikgawuu = "\151\x62\x61\x6e"; const oogeqgcgkamuoaoe = "\142\141\156\153"; const wagwccqcqwgsoyoi = "\154\x6f\143\x6b\x65\x64"; const cqkcksqwkcsiykuq = "\x65\x73\x63\x61\160\x65\144"; const kuwsqycgaagiimge = "\141\143\x63\x6f\165\156\164"; const skyceaacaaaamiii = "\144\145\142\151\x74\137\x63\x61\162\x64"; const qagqayweyigciamg = "\163\141\154\x61\x72\171\137\x62\x61\x6e\153\137\141\x63\x63\x6f\165\x6e\164\137\x69\x6e\146\157\162\x6d\x61\x74\x69\157\x6e"; const yuqaieqcaccggqck = "\143\x6f\x6c\x6c\141\x62\157\162\141\x74\157\x72"; public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if ($eqgoocgaqwqcimie) { $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; } } } } return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if ($qqswgiawgeaeoecu) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$eqgoocgaqwqcimie}\x25"); } else { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } $isweyuoisomqyaag = [Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ssmskyqgcmeiayco => sprintf(__("\106\x65\x65\x20\157\x66\40\x65\141\x63\x68\40\x74\162\x61\x6e\163\x61\143\164\x69\x6f\156\x20\151\163\x20\x25\x73", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; } return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true)) { $ccamueccusigaaio = $qqqskcogoyswqaum; break; } } return $ccamueccusigaaio; } }
