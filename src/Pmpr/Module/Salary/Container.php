<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46ee9392d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Container extends BaseClass { const wyqmcowecikgawuu = "\x69\x62\141\156"; const oogeqgcgkamuoaoe = "\142\141\156\153"; const wagwccqcqwgsoyoi = "\x6c\x6f\x63\153\x65\x64"; const cqkcksqwkcsiykuq = "\145\x73\143\x61\x70\145\144"; const kuwsqycgaagiimge = "\x61\x63\x63\157\x75\156\x74"; const skyceaacaaaamiii = "\x64\x65\x62\151\x74\137\x63\141\162\144"; const qagqayweyigciamg = "\163\141\x6c\141\162\171\x5f\x62\x61\x6e\153\137\141\x63\x63\x6f\x75\x6e\x74\137\x69\156\146\x6f\x72\155\141\x74\x69\157\156"; const yuqaieqcaccggqck = "\x63\157\x6c\154\x61\142\x6f\162\141\x74\157\162"; public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if ($eqgoocgaqwqcimie) { $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; } } } } return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if ($qqswgiawgeaeoecu) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess("{$eqgoocgaqwqcimie}\45"); } else { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); } $isweyuoisomqyaag = [Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ssmskyqgcmeiayco => sprintf(__("\x46\x65\145\x20\157\x66\x20\145\x61\x63\x68\x20\164\162\x61\x6e\x73\141\143\164\151\157\x6e\x20\151\163\x20\45\x73", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; } return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, Constants::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) $gkyciwoiiisgywcs->get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true)) { $ccamueccusigaaio = $qqqskcogoyswqaum; break; } } return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, array $wwgucssaecqekuek = []) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\163", "\x6d\x73\147"); return $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->ciuuiyckmsygceis($uamcoiueqaamsqma, []), $wwgucssaecqekuek); } }
