<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e8552c9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\Salary\Model\Agreement as Model; abstract class Controller extends AbstractREST { public function __construct() { $this->abstract = true; parent::__construct(); $this->namespace .= "\x2f\163\141\x6c\x61\x72\171"; } protected function ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, $ekiuyucoiagmscgy, $ywmkwiwkosakssii = []) : array { $megmggkiokqkcwou = 0; $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::imywcsggckkcywgk, 1); $sogksuscggsicmac = []; $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::ausqeuugegoygouq, 10); if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { $megmggkiokqkcwou = count($oammesyieqmwuwyi); $qmeuaeiseuacgiqc = min($megmggkiokqkcwou, $weyoqgcesqgeusiu * ($suaemuyiacqyugsm - 1) + $weyoqgcesqgeusiu); $ggkaciewmeqmgckg = max(0, $qmeuaeiseuacgiqc - $weyoqgcesqgeusiu); $oammesyieqmwuwyi = array_slice($oammesyieqmwuwyi, $ggkaciewmeqmgckg, $qmeuaeiseuacgiqc); if ($oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { if (is_callable($ekiuyucoiagmscgy)) { $igqsaukqcqscimok = $ekiuyucoiagmscgy($aqmwamyiwgeeymqa, $igqsaukqcqscimok, $ywmkwiwkosakssii); } if ($igqsaukqcqscimok) { $sogksuscggsicmac[$momcykaoccoymeig] = $igqsaukqcqscimok; } } } } $ocqawgquwsqioses = $megmggkiokqkcwou > 0 ? (int) ($megmggkiokqkcwou / $weyoqgcesqgeusiu) : 1; return Model::symcgieuakksimmu()->iekyeyicoyyawomk()->oosqweumiyeayasy($sogksuscggsicmac, $megmggkiokqkcwou, max(1, $ocqawgquwsqioses), $weyoqgcesqgeusiu); } }
