<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793d9693674f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; class Ajax extends Container { const wiysygukkaksueso = "\160\x72\x5f\x73\141\x6c\x61\162\171\137\141\152\x61\170\x5f"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\x64\144\137\156\145\167\137\167\151\164\x68\144\x72\x61\x77\x5f\x61\143\x74\151\x6f\156"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\x61\x64\x64\137\156\145\x77\137\x70\x61\171\x6d\x65\x6e\x74\x5f\x61\x63\164\151\x6f\x6e"; const myikkigscysoykgy = ["\x61\144\144\x5f\156\x65\167\137\160\x61\171\x6d\x65\x6e\164" => self::kqewokmaycweqkco, "\141\x64\x64\137\156\x65\x77\x5f\x77\151\164\x68\144\x72\141\x77" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\147\x79\x6d\165\161\163\161\155\161\165\x67\161\163\x6d\x77"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\157\163\151\x75\157\161\171\x73\x79\157\153\x73\x65\161\x65"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = null; } } else { $keccaugmemegoimu = __("\123\157\155\145\40\x72\x65\161\x75\x69\162\x65\x20\160\141\x72\141\x6d\x65\164\145\162\x73\40\151\163\x20\155\x69\x73\x73\x69\156\x67\56", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); $kooascmqqwmaskmi = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); if ($kooascmqqwmaskmi && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $kooascmqqwmaskmi); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; } else { $keccaugmemegoimu = __("\x53\157\155\x65\40\162\x65\161\165\151\162\145\40\160\x61\162\141\x6d\145\164\145\x72\x73\40\151\x73\x20\155\151\163\x73\151\156\x67\x2e", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
