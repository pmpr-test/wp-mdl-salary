<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67915301a9411             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\157\x6c\154\x61\x62\x6f\162\x61\164\x69\x6f\156\x5f\x70\x72\157\x66\x69\154\x65"; const qagqayweyigciamg = "\x62\x61\x6e\x6b\137\151\156\x66\157"; const equssioqikiumyki = "\167\151\x74\x68\144\162\141\167\x5f\164\x6f"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __("\115\171\x20\x53\x61\154\x61\x72\x79\40\120\162\157\x66\x69\154\145", PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => "\162\x65\141\x64"]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\137\x69\x6e\151\164", [$this, "\171\145\x79\151\x67\165\x79\145\x67\155\155\171\165\x73\x65\x61"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\160\x72\x6f\146\151\x6c\x65", "\x70\x72\157\146\x69\x6c\145\56\152\x73")->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, "\155\x65\x73\163\141\147\x65\163" => ["\x77\151\164\150\144\x72\141\x77\x5f\164\x6f" => sprintf(__("\111\164\x27\163\40\156\157\164\40\141\40\166\141\154\x69\x64\x20\45\x73", PR__MDL__SALARY), __("\x44\141\x74\x65", PR__MDL__SALARY)), "\145\155\160\164\171" => ["\142\141\156\x6b\x5f\x69\156\146\x6f" => sprintf(__("\x50\x6c\145\x61\163\x65\40\163\145\154\145\x63\164\40\x61\40\45\x73", PR__MDL__SALARY), __("\102\141\156\153\40\x41\x63\143\157\165\156\164\40\111\x6e\x66\157\x72\x6d\x61\164\151\x6f\x6e", PR__MDL__SALARY)), "\x77\151\x74\x68\144\162\141\167\x5f\x74\x6f" => sprintf(__("\120\x6c\x65\141\163\145\x20\x73\x65\154\145\143\164\40\141\40\45\x73", PR__MDL__SALARY), __("\x44\x61\x74\145", PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\x6e\x63\157\155\145\163" => __("\124\x6f\164\141\x6c\x20\111\156\x63\x6f\155\x65\163", PR__MDL__SALARY), "\144\x65\x64\x75\x63\x74\x73" => __("\x54\157\164\x61\x6c\40\104\x65\144\x75\143\x74\x73", PR__MDL__SALARY), "\160\141\171\x6d\145\x6e\164\x73" => __("\124\157\164\141\x6c\40\x50\x61\x79\155\x65\x6e\x74\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\x6e\x63\x6f\x6d\x65\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case "\144\x65\144\x75\x63\164\163": break; case "\160\141\171\155\x65\x6e\164\163": break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw("\163\164\x61\164\163", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\x63\145\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\141\x74\145\x20\124\x6f", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\167\x6e\x65\162", $saqgcoqwmimycgim)], ["\x65\x63\x68\157" => false, "\160\x61\x72\145\x6e\164" => ["\143\154\x61\163\x73" => "\143\x6f\x6c\55\x31\x32\x20\143\157\154\x2d\155\x64\55\x38\40\143\x6f\154\x2d\154\x67\x2d\x36\x20\x6d\171\55\x33\40\155\170\x2d\141\x75\164\x6f"]]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq("\144\151\166", ["\x63\x6c\141\163\x73" => "\162\x6f\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\x79\x20\x73\165\142\155\x69\164\164\151\x6e\147\40\x61\x20\156\145\167\40\x70\x61\x79\x6d\x65\156\164\40\x72\145\161\165\x65\x73\164\54\x20\171\157\x75\40\167\151\154\154\x20\x72\145\x63\x65\x69\x76\145\40\171\x6f\165\x72\40\151\x6e\143\x6f\155\145\40\151\156\x20\164\150\x65\40\146\157\162\155\x20\157\x66\x20\x61\x20\144\x65\160\157\x73\151\x74\x20\x74\157\x20\164\150\145\x20\x69\x6e\x74\162\157\x64\165\x63\x65\144\x20\x62\141\x6e\x6b\40\141\x63\x63\157\x75\156\164", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\x63\154\x61\x73\163" => "\x62\164\156\x20\x62\164\156\x2d\160\x72\151\x6d\141\162\171\40\141\x64\144\55\x6e\x65\167\55\x77\x69\x74\x68\x64\x72\141\167", "\x74\151\x74\154\145" => __("\x53\x75\142\x6d\x69\x74", PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x74\x61\x62", "\x74\141\x62\x5f\x69\x6e\x63\157\x6d\145\x73\x5f\x61\x6e\x64\137\160\x61\x79\x6d\145\x6e\164\x73", $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq("\141", ["\150\x72\145\x66" => $geecqyososceumsk], __("\120\x72\157\146\151\154\145\40\160\x61\x67\x65", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\131\157\x75\x20\163\x68\x6f\x75\154\x64\40\146\x69\x72\163\x74\54\40\x66\151\x6c\154\x20\x69\x6e\x20\171\157\165\x72\40\142\141\x6e\x6b\40\x61\143\x63\157\x75\x6e\x74\x20\x69\156\146\157\162\x6d\141\x74\151\x6f\x6e\x20\151\156\163\151\144\x65\40\x79\157\x75\162\40\45\163\54\x20\164\157\x20\163\x75\x62\x6d\151\x74\x20\x61\40\167\x69\164\x68\144\162\x61\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\x64\144\40\x4e\145\167\40\127\151\164\150\x64\x72\x61\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(["\x73\151\x7a\x65" => "\x6c\147", "\x74\171\x70\145" => "\160\x72\x69\x6d\141\x72\x79", "\164\151\x74\x6c\x65" => $uosiuoqysyokseqe, "\160\162\145\x66\151\170" => "\x61\x64\144\137\x6e\145\x77\x5f\x77\x69\164\x68\144\x72\x61\x77", "\x63\157\x6e\x74\x65\156\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\x75\164\x74\157\x6e\163" => $qyukicweqoisimwg, "\x73\160\x69\x6e\156\145\x72" => true], ["\164\x69\x74\x6c\145" => $uosiuoqysyokseqe, "\x61\164\164\x72\163" => ["\x63\x6c\141\163\x73" => "\142\x74\156\40\142\x74\156\55\160\162\151\155\141\x72\171\40\146\154\x6f\141\164\x2d\x72\x69\x67\x68\164", "\x61\x72\x69\x61\55\154\141\x62\x65\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
