<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705178f2ba0e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Common; class Ajax extends Common { const wiysygukkaksueso = "\x70\x72\x5f\163\141\154\141\x72\x79\137\x61\152\x61\170\x5f"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\144\144\137\x6e\x65\x77\x5f\167\x69\x74\150\x64\162\x61\167\x5f\x61\x63\x74\x69\157\x6e"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\141\144\144\137\x6e\145\x77\x5f\x70\x61\x79\155\145\156\x74\137\141\143\164\x69\x6f\156"; const myikkigscysoykgy = ["\141\144\144\x5f\156\145\167\x5f\160\141\x79\155\145\156\164" => self::kqewokmaycweqkco, "\x61\144\144\137\x6e\145\x77\x5f\167\x69\x74\x68\x64\162\x61\x77" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\x67\x79\x6d\165\161\x73\x71\155\161\165\147\x71\x73\x6d\167"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\x6f\x73\151\165\157\161\x79\163\171\x6f\x6b\163\145\161\x65"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto suqcsgaosywaauuu; } $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { goto ikqeeaysmqgcgawq; } $keccaugmemegoimu = __("\123\x6f\x6d\x65\x20\162\145\161\x75\x69\x72\x65\40\x70\x61\x72\141\x6d\x65\164\145\162\163\x20\151\163\40\155\x69\163\163\x69\156\x67\x2e", PR__MDL__SALARY); goto mscgewkcqcoowweg; ikqeeaysmqgcgawq: $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (is_wp_error($keccaugmemegoimu)) { goto esaqcqqwuussiiwo; } $occymigcemkqucuw = true; $keccaugmemegoimu = null; esaqcqqwuussiiwo: mscgewkcqcoowweg: suqcsgaosywaauuu: if (!$keccaugmemegoimu) { goto wwukgaquuyoissgy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); wwukgaquuyoissgy: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (is_wp_error($keccaugmemegoimu)) { goto yqagomygmeoecwey; } $miowmmgaiagcuyoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wayieuwuoeasekks = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { goto gsygwgsiawgmqiyi; } $keccaugmemegoimu = __("\x53\157\x6d\145\x20\162\x65\x71\165\151\162\145\40\160\141\162\141\155\145\x74\145\162\163\x20\151\163\40\x6d\151\163\x73\151\x6e\x67\x2e", PR__MDL__SALARY); goto qsgqwyqaqiowkmco; gsygwgsiawgmqiyi: $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; qsgqwyqaqiowkmco: yqagomygmeoecwey: if (!$keccaugmemegoimu) { goto qikaewekoecykeou; } $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); qikaewekoecykeou: $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
