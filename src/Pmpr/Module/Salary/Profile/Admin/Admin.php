<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795528b1c7e2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\155\171\137\x63\x6f\154\154\141\142\157\x72\x61\x74\x69\157\x6e\x5f\x70\x72\x6f\x66\151\x6c\x65"; const qagqayweyigciamg = "\x62\x61\156\153\137\x69\x6e\x66\x6f"; const equssioqikiumyki = "\x77\x69\164\x68\x64\162\x61\x77\x5f\164\157"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __("\115\x79\x20\x53\x61\154\x61\x72\x79\x20\x50\x72\x6f\x66\x69\154\145", PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => "\162\x65\141\144"]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\137\x69\156\x69\164", [$this, "\x79\145\x79\x69\147\165\171\145\x67\155\155\x79\165\x73\145\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\160\162\157\146\x69\x6c\145", "\x70\x72\157\x66\151\x6c\145\56\152\x73")->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, "\x6d\x65\x73\163\141\147\145\163" => ["\x77\151\164\150\x64\162\141\x77\137\x74\157" => sprintf(__("\x49\x74\x27\x73\x20\x6e\157\164\40\x61\40\x76\x61\x6c\151\x64\x20\x25\163", PR__MDL__SALARY), __("\104\141\x74\x65", PR__MDL__SALARY)), "\145\155\x70\164\171" => ["\x62\x61\x6e\x6b\137\151\x6e\x66\157" => sprintf(__("\120\154\145\141\x73\145\40\163\145\154\x65\143\164\x20\141\40\x25\163", PR__MDL__SALARY), __("\x42\x61\x6e\153\40\x41\x63\143\157\x75\156\x74\40\111\156\x66\157\162\x6d\141\164\x69\157\x6e", PR__MDL__SALARY)), "\x77\151\x74\150\144\162\x61\x77\x5f\x74\x6f" => sprintf(__("\120\154\145\141\163\x65\x20\163\145\154\x65\143\164\x20\x61\40\x25\x73", PR__MDL__SALARY), __("\x44\141\x74\145", PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\156\143\157\155\145\x73" => __("\124\157\164\141\154\40\x49\x6e\x63\x6f\x6d\x65\163", PR__MDL__SALARY), "\x64\145\144\165\x63\164\x73" => __("\124\157\x74\x61\154\40\104\x65\144\x75\x63\x74\163", PR__MDL__SALARY), "\x70\x61\171\x6d\145\x6e\x74\163" => __("\124\157\x74\x61\154\40\120\141\171\155\x65\x6e\x74\163", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\156\143\157\155\145\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case "\144\x65\x64\x75\x63\x74\x73": break; case "\160\141\171\x6d\x65\156\164\163": break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw("\163\x74\x61\x74\163", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\141\x6e\143\145\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\164\145\40\x54\x6f", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\x77\x6e\145\x72", $saqgcoqwmimycgim)], ["\145\x63\150\x6f" => false, "\x70\141\162\x65\156\164" => ["\143\x6c\x61\x73\x73" => "\x63\x6f\x6c\55\x31\62\x20\x63\157\154\x2d\x6d\x64\x2d\70\40\143\157\154\x2d\x6c\147\55\x36\40\155\171\x2d\x33\40\155\170\55\141\165\164\x6f"]]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq("\x64\151\166", ["\143\154\x61\163\x73" => "\162\x6f\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\40\x73\165\142\155\151\164\164\151\156\x67\x20\x61\x20\x6e\145\x77\x20\160\x61\x79\x6d\145\156\x74\x20\162\x65\161\x75\145\163\x74\54\40\x79\157\x75\40\167\x69\x6c\154\40\x72\x65\143\x65\x69\x76\x65\x20\x79\157\165\162\x20\151\156\143\x6f\x6d\145\40\151\156\40\164\x68\x65\40\x66\157\x72\x6d\x20\x6f\x66\x20\141\x20\x64\145\160\157\163\x69\164\40\164\x6f\x20\164\x68\145\40\x69\156\x74\162\157\144\165\x63\145\x64\x20\142\141\156\153\x20\x61\x63\x63\x6f\x75\x6e\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\154\141\163\x73" => "\x62\x74\156\40\x62\164\156\x2d\x70\162\x69\155\x61\162\x79\40\141\x64\144\x2d\156\x65\167\55\167\x69\164\x68\x64\162\x61\x77", "\x74\x69\x74\x6c\145" => __("\123\x75\142\x6d\x69\x74", PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x74\141\x62", "\164\141\142\137\151\x6e\x63\x6f\x6d\145\163\x5f\x61\156\x64\x5f\x70\141\171\x6d\145\156\164\163", $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", ["\150\162\145\146" => $geecqyososceumsk], __("\120\x72\157\146\151\x6c\x65\40\160\x61\147\x65", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\131\157\165\40\163\x68\x6f\x75\154\144\x20\x66\151\162\163\x74\x2c\40\x66\x69\154\x6c\40\x69\156\40\x79\157\x75\162\40\x62\141\156\153\x20\141\143\143\x6f\x75\156\x74\x20\151\x6e\x66\157\162\155\x61\164\x69\157\156\x20\x69\156\163\x69\x64\x65\40\x79\157\x75\x72\x20\45\163\x2c\40\x74\x6f\x20\163\x75\142\155\151\164\40\141\x20\167\x69\164\x68\144\x72\x61\x77", PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\x64\x64\x20\x4e\145\167\40\127\151\164\x68\x64\162\x61\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(["\163\151\172\145" => "\154\147", "\164\x79\x70\145" => "\160\x72\x69\155\141\162\171", "\x74\151\x74\154\x65" => $uosiuoqysyokseqe, "\160\162\x65\146\x69\170" => "\x61\x64\144\x5f\x6e\145\x77\137\167\151\x74\x68\144\162\x61\x77", "\143\x6f\x6e\164\145\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\165\164\164\x6f\x6e\163" => $qyukicweqoisimwg, "\163\160\x69\156\156\x65\162" => true], ["\x74\151\x74\154\x65" => $uosiuoqysyokseqe, "\141\x74\x74\162\x73" => ["\143\154\x61\x73\163" => "\142\164\x6e\40\142\x74\x6e\55\x70\162\151\155\x61\162\171\40\146\154\157\141\x74\x2d\162\151\x67\150\x74", "\x61\162\x69\141\x2d\x6c\x61\142\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
