<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff69626c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; class Ajax extends Container { const wiysygukkaksueso = "\x70\162\137\x73\141\x6c\141\x72\x79\x5f\141\152\141\170\x5f"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\x64\x64\137\156\x65\x77\x5f\x77\151\164\x68\x64\x72\x61\x77\137\141\143\x74\x69\x6f\156"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\141\x64\x64\137\156\145\x77\x5f\160\141\171\155\145\x6e\164\x5f\x61\x63\164\x69\157\x6e"; const myikkigscysoykgy = ["\x61\144\x64\x5f\156\x65\x77\x5f\160\141\x79\x6d\x65\156\164" => self::kqewokmaycweqkco, "\x61\x64\144\x5f\x6e\145\167\x5f\x77\x69\x74\x68\x64\162\141\167" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\x67\171\155\x75\x71\x73\161\x6d\161\x75\x67\161\163\x6d\x77"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\165\157\x73\x69\x75\157\161\x79\x73\x79\157\x6b\x73\145\x71\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = null; } } else { $keccaugmemegoimu = __("\x53\x6f\155\x65\40\x72\145\161\x75\x69\x72\x65\x20\160\x61\162\x61\x6d\145\164\145\x72\x73\x20\x69\163\40\155\x69\x73\163\x69\156\147\56", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); $kooascmqqwmaskmi = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); if ($kooascmqqwmaskmi && $wssiaomiwukaiwmw && $ycoeoaakqyskgykq) { $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($ycoeoaakqyskgykq, $wssiaomiwukaiwmw, $kooascmqqwmaskmi); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; } else { $keccaugmemegoimu = __("\123\157\155\145\40\x72\x65\161\165\x69\162\x65\x20\160\141\x72\x61\x6d\x65\x74\x65\162\163\x20\x69\x73\x20\155\x69\163\x73\x69\x6e\x67\56", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
