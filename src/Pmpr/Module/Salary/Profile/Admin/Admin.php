<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795e81296110             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\171\x5f\x63\157\x6c\154\141\x62\157\x72\141\164\x69\157\x6e\x5f\x70\x72\157\x66\x69\154\145"; const qagqayweyigciamg = "\x62\141\156\153\x5f\151\156\x66\157"; const equssioqikiumyki = "\167\151\x74\x68\x64\x72\141\167\137\164\x6f"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __("\115\171\x20\123\x61\x6c\x61\x72\171\x20\x50\x72\x6f\x66\x69\x6c\145", PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => "\x72\x65\141\144"]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\x5f\151\x6e\x69\164", [$this, "\x79\145\171\x69\x67\x75\171\145\147\x6d\155\x79\165\163\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x70\x72\x6f\146\x69\154\145", "\160\x72\157\x66\x69\154\x65\56\152\x73")->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, "\155\x65\x73\x73\x61\147\145\163" => ["\167\151\164\150\144\162\141\167\137\164\x6f" => sprintf(__("\111\164\x27\x73\40\156\157\164\x20\x61\40\x76\141\x6c\151\144\x20\x25\163", PR__MDL__SALARY), __("\104\141\x74\145", PR__MDL__SALARY)), "\x65\x6d\160\164\x79" => ["\x62\x61\x6e\x6b\137\x69\x6e\x66\x6f" => sprintf(__("\120\154\x65\141\163\x65\40\x73\145\154\x65\143\164\x20\x61\40\45\x73", PR__MDL__SALARY), __("\x42\141\x6e\x6b\x20\101\x63\143\157\165\156\164\x20\111\x6e\146\157\162\155\141\164\151\157\156", PR__MDL__SALARY)), "\x77\151\164\x68\144\162\141\x77\x5f\164\157" => sprintf(__("\120\154\x65\141\x73\x65\40\x73\x65\154\x65\x63\164\x20\141\40\x25\x73", PR__MDL__SALARY), __("\x44\x61\x74\x65", PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\156\x63\157\x6d\145\x73" => __("\124\x6f\164\141\154\40\x49\x6e\143\x6f\x6d\x65\163", PR__MDL__SALARY), "\144\145\x64\x75\143\x74\163" => __("\x54\x6f\x74\141\x6c\40\x44\145\x64\165\143\x74\163", PR__MDL__SALARY), "\x70\x61\x79\x6d\145\x6e\x74\x73" => __("\124\x6f\x74\x61\154\x20\120\141\171\155\x65\x6e\x74\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\156\x63\157\x6d\x65\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case "\x64\x65\x64\165\143\164\163": break; case "\160\141\x79\x6d\145\156\164\x73": break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw("\163\164\141\164\x73", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\143\145\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\x74\145\x20\124\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\x77\156\145\x72", $saqgcoqwmimycgim)], ["\145\143\x68\157" => false, "\x70\x61\x72\x65\156\x74" => ["\x63\154\x61\x73\x73" => "\143\157\x6c\x2d\61\62\40\x63\x6f\x6c\55\x6d\x64\55\70\x20\x63\x6f\154\55\x6c\x67\x2d\x36\40\155\171\x2d\x33\x20\x6d\170\x2d\x61\x75\164\157"]]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq("\144\x69\166", ["\x63\154\141\163\163" => "\x72\x6f\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\x79\40\x73\165\142\155\x69\x74\164\x69\x6e\147\40\x61\x20\156\x65\167\40\x70\x61\x79\155\x65\x6e\164\x20\162\x65\x71\165\145\x73\x74\54\x20\x79\x6f\x75\40\167\151\x6c\x6c\40\x72\145\143\x65\x69\x76\145\x20\171\157\x75\162\40\151\156\143\157\x6d\145\x20\x69\x6e\x20\x74\x68\145\x20\146\x6f\x72\x6d\x20\157\146\x20\141\x20\x64\145\x70\x6f\x73\151\x74\40\164\x6f\x20\x74\150\145\40\151\x6e\x74\x72\157\x64\165\x63\x65\144\40\x62\141\156\x6b\x20\141\x63\x63\157\x75\156\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\x63\x6c\141\163\163" => "\142\164\156\x20\x62\164\156\55\x70\x72\x69\155\141\162\x79\40\141\144\x64\55\156\x65\167\55\167\151\164\150\144\x72\x61\x77", "\x74\151\x74\154\x65" => __("\x53\165\142\x6d\x69\x74", PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x74\x61\142", "\164\x61\x62\137\151\x6e\x63\157\x6d\x65\163\137\141\156\144\x5f\160\141\171\x6d\x65\156\x74\x73", $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", ["\x68\x72\x65\146" => $geecqyososceumsk], __("\x50\x72\x6f\x66\151\x6c\x65\40\x70\x61\x67\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\131\157\165\40\x73\150\157\165\154\x64\40\x66\x69\x72\x73\164\54\x20\146\151\154\154\x20\151\x6e\40\171\x6f\x75\x72\40\x62\141\156\x6b\40\141\143\143\x6f\165\x6e\x74\x20\151\156\x66\157\162\x6d\141\x74\151\x6f\x6e\x20\151\156\x73\151\x64\x65\x20\x79\x6f\165\x72\40\x25\x73\x2c\x20\164\157\40\163\x75\x62\x6d\151\164\x20\141\40\x77\x69\x74\150\144\x72\x61\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\144\x20\x4e\x65\x77\x20\127\151\164\150\144\x72\x61\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(["\163\x69\x7a\x65" => "\x6c\x67", "\164\171\160\x65" => "\x70\162\151\155\141\x72\x79", "\164\x69\x74\154\145" => $uosiuoqysyokseqe, "\x70\162\x65\x66\151\170" => "\x61\x64\144\x5f\x6e\145\167\137\x77\x69\x74\150\144\162\x61\167", "\x63\157\x6e\x74\145\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\165\164\164\157\156\x73" => $qyukicweqoisimwg, "\163\160\151\156\x6e\145\162" => true], ["\164\x69\164\154\145" => $uosiuoqysyokseqe, "\141\164\164\162\x73" => ["\x63\154\x61\163\x73" => "\142\164\x6e\x20\142\x74\156\55\160\x72\151\155\x61\162\171\x20\146\x6c\x6f\x61\x74\x2d\162\x69\x67\150\x74", "\x61\x72\x69\141\55\154\x61\x62\145\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
