<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7ad7d12004             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Ajax extends Container { const wiysygukkaksueso = 'pr_salary_ajax'; const igowskiiecscwmgm = self::wiysygukkaksueso . 'request_review'; const myikkigscysoykgy = ['request_review' => self::igowskiiecscwmgm]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::igowskiiecscwmgm, [$this, 'qagqmkciiuismiym']); } public function qagqmkciiuismiym() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $keccaugmemegoimu = ''; $occymigcemkqucuw = false; if ($aokagokqyuysuksm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gouqcwikiiygyasc)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $icwicymcioeyeyek = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm]; if ($iueymcwwscwqkiyq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciywsqoeiymemsys)) { if (Constants::cwiummueqsucqayc === $iueymcwwscwqkiyq) { $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($aqmwamyiwgeeymqa) { $gkkgcoiwayaccqgm = $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, Constants::geykusaewkemcasi, 0); if (empty($gkkgcoiwayaccqgm) && empty($kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, $kueeocmceokoouqa::aqsqycycmoieksam))) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $xssuewsokckmigqk = $mssuumukiiaqmcka->iekyeyicoyyawomk()->akkkoiiymmamsauc($kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, $kueeocmceokoouqa::woagckamiequeoyu)); if ($xssuewsokckmigqk) { if (Constants::cgkgowiusqeaagwg === $mssuumukiiaqmcka->ogegcqqcukiaqscy($mssuumukiiaqmcka::uiwumioqeeggcwwq, $xssuewsokckmigqk)) { $iueymcwwscwqkiyq = $kueeocmceokoouqa::mmyygcoemkeqcwii; } } else { $keccaugmemegoimu = __('Can not find related agreement to this request.', PR__MDL__SALARY); } } } else { $keccaugmemegoimu = __('Can not find request', PR__MDL__SALARY); } } if (empty($keccaugmemegoimu)) { $icwicymcioeyeyek[Constants::ciywsqoeiymemsys] = $iueymcwwscwqkiyq; if (Constants::yascuqeoeosyewwc === $iueymcwwscwqkiyq) { $ukwokcuqauuosmoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::eqkeooqcsscoggia); if (!$ukwokcuqauuosmoo) { $keccaugmemegoimu = __('Description is required for rejected status', PR__MDL__SALARY); } else { $icwicymcioeyeyek[Constants::eqkeooqcsscoggia] = $ukwokcuqauuosmoo; } } } } else { $keccaugmemegoimu = __('Status is required', PR__MDL__SALARY); } if (!$keccaugmemegoimu) { $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek, true); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $occymigcemkqucuw = true; $keccaugmemegoimu = sprintf(__('Request status successfully changed to %s', PR__MDL__SALARY), $kueeocmceokoouqa->gascwoasakiqyumc($iueymcwwscwqkiyq)); } else { $keccaugmemegoimu = $sogksuscggsicmac[Constants::iwyueouqaqegmcas]; } } else { $keccaugmemegoimu = __('Can not handle your request, please contact development team.', PR__MDL__SALARY); } } else { $keccaugmemegoimu = __('ID is required', PR__MDL__SALARY); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
