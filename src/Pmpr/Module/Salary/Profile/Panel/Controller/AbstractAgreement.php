<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4c22efb8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use WP_Error; use WP_REST_Request; abstract class AbstractAgreement extends Controller { protected function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, 'apply', false); } protected function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $ycoeoaakqyskgykq) { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, 'agreement')) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Agreement is required', PR__MDL__SALARY)); } return $sogksuscggsicmac; } protected function gayyweiqkuooeicq($ucumikyqgqcggcwm, bool $tsuauommsquiesmk = false) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (is_numeric($ucumikyqgqcggcwm)) { $gikyaoiioawywyeu = $ucumikyqgqcggcwm; } else { $gikyaoiioawywyeu = $this->aemeowyaecqmymas($ucumikyqgqcggcwm, 'agreement'); } if ($gikyaoiioawywyeu) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu); if ($xssuewsokckmigqk && $tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } } return $xssuewsokckmigqk; } protected function cmkqiucqwwmuiuug(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, bool $tsuauommsquiesmk = true) { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk))]); if ($qgciakuqggmiywuk) { if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('User already submit a request on this agreement', PR__MDL__SALARY)); } if (Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::sgoswgskyiiwkyuo)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('User request rejected by admin', PR__MDL__SALARY)); } } if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Agreement is private', PR__MDL__SALARY)); } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { if (!in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Agreement not for the user', PR__MDL__SALARY)); } } else { if ($guguqsiieswegsiy = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if ($yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { $askmkgcmgekiqwsg = true; } } if (!$askmkgcmgekiqwsg) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Agreement not for the user', PR__MDL__SALARY)); } } } if ($tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } return $xssuewsokckmigqk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Agreement not founded.', PR__MDL__SALARY)); } }
