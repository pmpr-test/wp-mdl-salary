<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff69626c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use WP_Error; use WP_REST_Request; abstract class AbstractAgreement extends Controller { protected function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\160\x6c\171", false); } protected function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $ycoeoaakqyskgykq) { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\162\145\x65\155\145\x6e\164")) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\145\145\x6d\145\x6e\x74\x20\x69\163\x20\x72\145\161\165\151\x72\145\x64", PR__MDL__SALARY)); } return $sogksuscggsicmac; } protected function gayyweiqkuooeicq($ucumikyqgqcggcwm, bool $tsuauommsquiesmk = false) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (is_numeric($ucumikyqgqcggcwm)) { $gikyaoiioawywyeu = $ucumikyqgqcggcwm; } else { $gikyaoiioawywyeu = $this->aemeowyaecqmymas($ucumikyqgqcggcwm, "\x61\147\162\145\145\x6d\x65\156\164"); } if ($gikyaoiioawywyeu) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu); if ($xssuewsokckmigqk && $tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } } return $xssuewsokckmigqk; } protected function cmkqiucqwwmuiuug(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, bool $tsuauommsquiesmk = true) { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk))]); if ($qgciakuqggmiywuk) { if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\x65\162\40\141\x6c\162\145\141\x64\x79\40\x73\165\142\155\151\164\40\141\40\162\145\x71\165\145\x73\164\40\157\x6e\x20\164\x68\151\163\40\141\147\162\145\x65\x6d\145\x6e\164", PR__MDL__SALARY)); } if (Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::sgoswgskyiiwkyuo)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\x65\x72\40\x72\x65\161\x75\x65\163\164\40\x72\145\x6a\x65\143\x74\x65\144\40\142\171\40\x61\144\155\x69\x6e", PR__MDL__SALARY)); } } if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x67\162\x65\x65\x6d\x65\156\x74\x20\151\163\40\160\162\x69\166\x61\x74\145", PR__MDL__SALARY)); } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { if (!in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\x65\145\x6d\x65\x6e\x74\x20\156\157\164\40\146\157\x72\x20\x74\x68\x65\40\x75\x73\x65\x72", PR__MDL__SALARY)); } } else { if ($guguqsiieswegsiy = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if ($yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { $askmkgcmgekiqwsg = true; } } if (!$askmkgcmgekiqwsg) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\145\145\x6d\145\156\164\40\x6e\157\164\x20\146\157\x72\40\x74\x68\145\x20\165\x73\145\x72", PR__MDL__SALARY)); } } } if ($tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } return $xssuewsokckmigqk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\x72\145\x65\155\145\156\x74\x20\156\x6f\164\40\x66\157\x75\x6e\144\x65\x64\56", PR__MDL__SALARY)); } }
