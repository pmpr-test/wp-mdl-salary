<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6797767507f59             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\157\154\x6c\x61\x62\x6f\162\141\x74\x69\157\x6e\x5f\160\162\x6f\x66\151\154\145"; const qagqayweyigciamg = "\142\141\156\153\x5f\x69\x6e\146\x6f"; const equssioqikiumyki = "\167\151\164\x68\x64\x72\141\167\137\x74\x6f"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __("\115\x79\40\123\x61\x6c\x61\x72\x79\x20\120\162\157\146\151\x6c\x65", PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => "\162\x65\141\144"]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x69\156\151\164", [$this, "\x79\x65\x79\x69\x67\x75\x79\145\147\x6d\155\x79\x75\x73\x65\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x70\162\157\146\151\x6c\145", "\160\162\x6f\x66\x69\x6c\145\56\x6a\x73")->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, "\x6d\145\163\163\x61\x67\x65\163" => ["\x77\x69\164\150\144\x72\141\167\137\x74\157" => sprintf(__("\111\164\x27\163\40\156\x6f\x74\x20\x61\40\166\x61\154\x69\144\x20\45\x73", PR__MDL__SALARY), __("\104\141\164\x65", PR__MDL__SALARY)), "\x65\x6d\160\164\171" => ["\x62\x61\x6e\153\137\x69\x6e\146\x6f" => sprintf(__("\x50\154\x65\x61\x73\x65\x20\163\x65\154\x65\143\x74\x20\x61\x20\x25\163", PR__MDL__SALARY), __("\102\x61\x6e\153\x20\x41\x63\143\157\x75\x6e\164\40\111\156\x66\157\x72\x6d\x61\164\x69\x6f\156", PR__MDL__SALARY)), "\x77\x69\164\150\x64\x72\141\167\x5f\x74\157" => sprintf(__("\120\154\x65\141\163\x65\40\x73\x65\x6c\145\143\x74\x20\x61\40\x25\x73", PR__MDL__SALARY), __("\x44\x61\x74\145", PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\x6e\x63\x6f\155\145\x73" => __("\x54\157\x74\x61\x6c\40\111\x6e\x63\157\x6d\x65\163", PR__MDL__SALARY), "\x64\145\144\x75\x63\x74\x73" => __("\x54\157\164\x61\154\40\x44\x65\x64\165\143\x74\163", PR__MDL__SALARY), "\160\141\171\155\145\156\x74\x73" => __("\x54\x6f\164\141\154\x20\x50\x61\x79\x6d\x65\x6e\x74\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\x6e\x63\157\155\145\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case "\144\145\x64\165\x63\x74\163": break; case "\160\141\x79\x6d\x65\x6e\x74\163": break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw("\x73\164\141\164\x73", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\x63\x61\x6e\x63\x65\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\x61\x74\x65\40\x54\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\167\156\x65\162", $saqgcoqwmimycgim)], ["\145\143\x68\x6f" => false, "\x70\x61\162\x65\156\164" => ["\143\x6c\x61\x73\163" => "\x63\157\154\x2d\61\x32\40\143\157\x6c\55\x6d\x64\x2d\70\x20\143\x6f\154\x2d\x6c\x67\x2d\x36\x20\155\x79\55\63\40\x6d\170\55\141\165\x74\x6f"]]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq("\x64\151\x76", ["\143\x6c\141\163\163" => "\x72\x6f\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\x79\x20\x73\x75\142\155\151\164\164\x69\156\147\x20\141\40\x6e\x65\x77\x20\160\141\171\155\145\x6e\164\x20\162\x65\x71\x75\x65\163\164\54\40\x79\157\165\40\167\151\154\154\40\x72\x65\x63\x65\x69\x76\145\40\171\157\165\x72\40\151\156\x63\x6f\x6d\145\40\x69\x6e\x20\164\x68\x65\x20\x66\157\162\155\x20\157\146\x20\141\x20\144\145\160\157\163\151\164\40\164\157\40\164\x68\145\x20\x69\x6e\x74\x72\157\x64\165\x63\x65\144\x20\x62\141\x6e\153\40\141\143\x63\157\165\156\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\x6c\x61\163\163" => "\x62\164\x6e\x20\x62\x74\156\55\x70\x72\x69\155\x61\162\x79\40\141\144\x64\55\x6e\145\x77\x2d\x77\151\164\x68\x64\162\141\x77", "\164\151\164\154\145" => __("\x53\165\x62\x6d\x69\x74", PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\164\141\142", "\x74\141\142\x5f\151\156\x63\157\155\145\163\x5f\141\156\x64\x5f\x70\x61\171\155\145\x6e\164\x73", $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", ["\150\162\x65\x66" => $geecqyososceumsk], __("\120\162\157\146\151\x6c\x65\x20\x70\x61\147\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\157\x75\40\x73\x68\x6f\x75\x6c\x64\40\x66\151\162\x73\x74\x2c\x20\x66\151\154\x6c\40\151\x6e\x20\x79\x6f\165\x72\40\x62\x61\x6e\x6b\x20\x61\x63\143\157\165\x6e\164\x20\151\x6e\146\157\162\x6d\141\164\151\157\156\40\151\156\x73\151\x64\x65\x20\171\x6f\x75\162\40\x25\x73\x2c\x20\x74\x6f\40\163\x75\142\155\151\x74\x20\141\x20\x77\x69\164\x68\x64\x72\141\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\x64\x64\x20\116\x65\167\x20\127\151\x74\150\x64\162\x61\x77", PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(["\163\x69\172\x65" => "\154\x67", "\x74\x79\160\x65" => "\160\162\x69\155\141\162\x79", "\x74\151\x74\x6c\145" => $uosiuoqysyokseqe, "\x70\x72\145\x66\151\170" => "\x61\144\x64\x5f\156\145\x77\137\167\151\x74\150\144\162\x61\x77", "\143\157\156\164\145\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\165\x74\x74\x6f\x6e\x73" => $qyukicweqoisimwg, "\x73\x70\x69\x6e\x6e\145\162" => true], ["\x74\x69\164\154\x65" => $uosiuoqysyokseqe, "\x61\x74\x74\162\163" => ["\143\x6c\x61\x73\x73" => "\142\x74\156\x20\x62\x74\x6e\x2d\160\x72\x69\155\x61\162\171\x20\146\x6c\x6f\x61\x74\55\x72\x69\147\x68\x74", "\141\162\151\x61\55\154\141\142\145\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
