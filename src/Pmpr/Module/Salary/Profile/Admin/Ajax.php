<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6797767507f59             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; class Ajax extends Container { const wiysygukkaksueso = "\160\x72\x5f\x73\x61\154\x61\x72\171\x5f\x61\152\141\170\x5f"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\x64\144\x5f\x6e\145\x77\137\167\x69\164\150\x64\162\141\167\137\141\143\x74\151\x6f\156"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\x61\144\144\137\x6e\x65\x77\x5f\160\141\171\155\x65\x6e\x74\137\141\x63\164\x69\157\x6e"; const myikkigscysoykgy = ["\141\x64\x64\137\156\145\167\x5f\160\141\x79\x6d\x65\x6e\x74" => self::kqewokmaycweqkco, "\x61\x64\144\137\156\x65\x77\137\167\x69\x74\x68\x64\x72\141\167" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\x67\x79\x6d\165\x71\x73\161\x6d\161\165\147\161\163\x6d\x77"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\x6f\163\151\x75\x6f\161\171\163\x79\x6f\x6b\x73\145\161\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = null; } } else { $keccaugmemegoimu = __("\123\x6f\155\145\x20\162\145\161\165\151\162\x65\40\x70\141\162\141\x6d\145\x74\x65\162\x73\40\x69\163\x20\155\151\x73\163\151\156\147\x2e", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); $kooascmqqwmaskmi = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); if ($kooascmqqwmaskmi && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $kooascmqqwmaskmi); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; } else { $keccaugmemegoimu = __("\x53\x6f\155\145\40\162\145\x71\x75\151\x72\145\40\x70\x61\162\x61\x6d\145\x74\x65\x72\163\40\x69\163\x20\x6d\x69\163\x73\151\x6e\147\x2e", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
