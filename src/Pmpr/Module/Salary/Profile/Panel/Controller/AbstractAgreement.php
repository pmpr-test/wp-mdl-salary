<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcdda3b975             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use WP_Error; use WP_REST_Request; abstract class AbstractAgreement extends Controller { protected function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\160\160\154\171", false); } protected function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $ycoeoaakqyskgykq) { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\x72\x65\145\x6d\x65\156\x74")) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\x72\145\145\155\x65\156\x74\40\151\163\40\162\x65\161\165\151\x72\145\144", PR__MDL__SALARY)); } return $sogksuscggsicmac; } protected function gayyweiqkuooeicq($ucumikyqgqcggcwm, bool $tsuauommsquiesmk = false) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (is_numeric($ucumikyqgqcggcwm)) { $gikyaoiioawywyeu = $ucumikyqgqcggcwm; } else { $gikyaoiioawywyeu = $this->aemeowyaecqmymas($ucumikyqgqcggcwm, "\x61\x67\162\145\145\155\145\156\164"); } if ($gikyaoiioawywyeu) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu); if ($xssuewsokckmigqk && $tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } } return $xssuewsokckmigqk; } protected function cmkqiucqwwmuiuug(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, bool $tsuauommsquiesmk = true) { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk))]); if ($qgciakuqggmiywuk) { if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\x20\x61\154\162\x65\141\144\171\40\163\x75\x62\x6d\x69\x74\40\x61\x20\x72\145\x71\165\145\163\x74\40\x6f\x6e\x20\x74\x68\151\163\x20\x61\x67\162\145\145\x6d\145\x6e\164", PR__MDL__SALARY)); } if (Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::sgoswgskyiiwkyuo)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\162\40\x72\145\161\165\145\x73\164\x20\162\x65\x6a\x65\x63\x74\145\144\40\142\171\40\x61\x64\x6d\151\156", PR__MDL__SALARY)); } } if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x67\x72\x65\x65\x6d\145\156\164\x20\x69\x73\x20\160\x72\x69\166\141\x74\x65", PR__MDL__SALARY)); } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { if (!in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\x72\x65\145\x6d\145\156\x74\40\156\x6f\x74\x20\x66\157\x72\x20\164\150\x65\40\x75\163\145\162", PR__MDL__SALARY)); } } else { if ($guguqsiieswegsiy = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if ($yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { $askmkgcmgekiqwsg = true; } } if (!$askmkgcmgekiqwsg) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\145\145\155\145\156\x74\x20\x6e\157\164\x20\x66\x6f\x72\40\x74\x68\145\x20\165\163\145\162", PR__MDL__SALARY)); } } } if ($tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } return $xssuewsokckmigqk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\147\162\x65\145\155\x65\156\x74\x20\x6e\x6f\164\x20\x66\157\165\156\144\145\x64\56", PR__MDL__SALARY)); } }
