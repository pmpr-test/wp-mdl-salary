<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec9a0855e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\143\x72\x65\x61\164\157\x72"; const sseuikaiuuscgcge = "\151\156\x63\157\x6d\145\x5f\x69\144"; const msoeaooscimowuyw = "\x70\x61\x79\155\145\156\164\x5f\x69\x64"; const cmiegiycgiucucgs = "\162\145\x71\x75\145\163\164\137\151\x64"; const owmueawayysqcsqo = "\142\x61\x6e\x6b\x5f\x61\x63\143\157\165\x6e\164"; const aioqyewkwawaqgqe = "\141\x6d\x6f\x75\156\164"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->eesuqwkusmukgwma()->yioesawwewqaigow(IconInterface::gucgemsgiqmwqwgu)->guiaswksukmgageq(__("\x57\151\164\150\x64\162\x61\167", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x57\x69\x74\x68\144\162\x61\x77\x73", PR__MDL__SALARY))->ckaeqgiaiqwsccke(7)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qoemykoeuecmsmwe(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\x72\145\141\164\x6f\162", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::sgoswgskyiiwkyuo, __("\120\x65\x6e\x64\151\x6e\x67\x20\x50\x61\171\155\x65\156\x74", PR__MDL__SALARY))->kesomeowemmyygey(2, Constants::cwiummueqsucqayc, __("\101\143\x63\145\x70\x74\x65\x64", PR__MDL__SALARY))->kesomeowemmyygey(3, Constants::ayucqsmaykqegwqo, __("\x52\x65\146\x75\x73\x65\144", PR__MDL__SALARY))->gswweykyogmsyawy(__("\123\164\x61\164\x75\163", PR__MDL__SALARY)), $this->usqseiuaeauwuwus(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\x61\x6e\x6b\x20\101\143\x63\x6f\165\156\x74\x20\111\x6e\146\157\162\155\x61\164\x69\x6f\156", PR__MDL__SALARY)), $this->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->gswweykyogmsyawy(__("\122\x65\x71\165\x65\163\x74\163", PR__MDL__SALARY))->ckmqkgwcusyaegmm()->kkeymosoimmgsaug(), $this->eoaomaokwkwqyqiq(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\x49\156\x63\x6f\155\x65\x73", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->eoaomaokwkwqyqiq(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\141\171\x6d\145\x6e\164", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->uccuieiyckcoaqsk()->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::ciywsqoeiymemsys))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::msoeaooscimowuyw)->omsoosuoikgueyke())); } public function gascwoasakiqyumc($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo, true)); if (!$siykeiywomwwuoiw) { goto qyeswawykmasuqye; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, "\52", $siykeiywomwwuoiw); qyeswawykmasuqye: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto uwaimsisescsgyqk; } $mksyucucyswaukig->amount = 0; uwaimsisescsgyqk: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto jsmisuccwyukksgc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto ukwoswyyogmsygqg; } $eqgoocgaqwqcimie[Constants::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($ygogqywsaqoukoqy); ukwoswyyogmsygqg: goto kwmiwaecqcgiaqye; jsmisuccwyukksgc: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); kwmiwaecqcgiaqye: goto uqcsksaywyqeumig; case self::owskgkyceomsskgm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); goto uqcsksaywyqeumig; case Constants::ciywsqoeiymemsys: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto yqicwmekwuoywyus; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->gascwoasakiqyumc($eqgoocgaqwqcimie)); yqicwmekwuoywyus: goto uqcsksaywyqeumig; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); goto uqcsksaywyqeumig; } yggmaskeguaqkusc: uqcsksaywyqeumig: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, Constants::sgoswgskyiiwkyuo); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($ckeskcacgiywwoua <= 0) { goto skuuyysooocugyww; } $uamcoiueqaamsqma = sprintf(__("\x59\157\165\x20\141\154\x72\145\141\x64\171\x20\150\141\x76\145\40\x61\40\x77\151\x74\150\144\162\x61\167\x20\167\151\x74\x68\40\45\x73\x20\163\x74\x61\x74\x75\163\x2e", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($this->gascwoasakiqyumc(Constants::sgoswgskyiiwkyuo))); goto cmmusgkieoqyymgs; skuuyysooocugyww: if ($ywqqikcsamcaycgm) { goto qksckewucmosemuo; } $uamcoiueqaamsqma = __("\101\x67\x72\x65\x65\x6d\145\156\x74\x20\x6e\x6f\x74\x20\x66\x6f\x75\156\144\56", PR__MDL__SALARY); goto kmooekeyemqgucci; qksckewucmosemuo: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => [Constants::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::youiiwsayswmyuum]); $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto qmokwkocmcyeyesc; } $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\x72\40\x72\145\x71\165\x65\163\164\145\x64\x20\x61\155\157\165\x6e\164\40\50\45\x73\x29\x20\151\x73\x20\x6c\x65\x73\163\40\164\x68\x61\x6e\x20\x79\157\165\x72\x20\x61\x67\162\145\145\x6d\x65\156\x74\40\142\x61\x6c\141\x6e\x63\145\x20\x74\x68\x72\145\x73\150\x6f\x6c\144\40\x28\x25\x73\51\x2e", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($gkimsiseuqckqkso)), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($ygeuioagqoqumwuw))); goto mosuacsuaasssciu; qmokwkocmcyeyesc: if ($cseccogesusskess) { goto wkiymcoqqiigqaaw; } $uamcoiueqaamsqma = sprintf(__("\131\157\x75\x20\x64\157\x6e\47\x74\40\150\141\166\x65\40\x61\156\171\x20\x69\156\x63\157\x6d\x65\x20\x75\156\164\151\154\x20\x6e\157\x77\x2c\x20\167\x69\164\x68\x20\x73\x74\141\164\x75\163\x20\x25\163\x2e", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($ogekyekymoyuywog->iowygaiuiqkqimio($ogekyekymoyuywog::youiiwsayswmyuum))); goto esqwswmoegiqcckg; wkiymcoqqiigqaaw: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ycmomqymkecsysum]); eekaiaeqewiqkkgm: } gkoaeuekqockuoiq: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); if ($euakemkgmcigqycw = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::ckmqoekmugkggeym)) { goto uyeyscsaigimsqwq; } $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\103\x61\156\40\x6e\157\164\40\x61\144\x64\40\141\x20\x6e\145\167\40\x77\x69\x74\150\x64\x72\x61\167\x3a\40\x25\x73", PR__MDL__SALARY), implode("\x3c\x62\162\x2f\76", $ueeagokqmgisgauy)); goto mwieyyqamgwicgco; uyeyscsaigimsqwq: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\131\x6f\x75\x72\40\x77\x69\164\150\144\162\x61\x77\x20\x69\x73\x20\x73\x75\142\155\151\164\164\145\144\x20\x73\x75\143\x63\145\163\x73\146\x75\x6c\x6c\x79\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\141\156\x20\x6e\157\164\40\163\141\166\x65\40\x72\x65\x6c\141\164\x69\157\156\40\x73\150\151\x70\72\x20\45\x73", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto kceuusiekagyeoys; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } kceuusiekagyeoys: mwieyyqamgwicgco: esqwswmoegiqcckg: mosuacsuaasssciu: kmooekeyemqgucci: cmmusgkieoqyymgs: return [Constants::ckcawaoawwioqecq => $occymigcemkqucuw, Constants::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
