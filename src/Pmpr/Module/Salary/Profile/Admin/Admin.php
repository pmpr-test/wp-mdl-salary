<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7ad7d12004             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = 'my_collaboration_profile'; const qagqayweyigciamg = 'bank_info'; const equssioqikiumyki = 'withdraw_to'; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __('My Salary Profile', PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => 'read']; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'profile', 'profile.js')->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, 'messages' => ['withdraw_to' => sprintf(__('It\'s not a valid %s', PR__MDL__SALARY), __('Date', PR__MDL__SALARY)), 'empty' => ['bank_info' => sprintf(__('Please select a %s', PR__MDL__SALARY), __('Bank Account Information', PR__MDL__SALARY)), 'withdraw_to' => sprintf(__('Please select a %s', PR__MDL__SALARY), __('Date', PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ['incomes' => __('Total Incomes', PR__MDL__SALARY), 'deducts' => __('Total Deducts', PR__MDL__SALARY), 'payments' => __('Total Payments', PR__MDL__SALARY)]; $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case 'incomes': $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::yauicucwkgqyygas => $ycoeoaakqyskgykq, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case 'deducts': break; case 'payments': break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw('stats', [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ['cancel']; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __('Date To', PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw('owner', $saqgcoqwmimycgim)], ['echo' => false, 'parent' => ['class' => 'col-12 col-md-8 col-lg-6 my-3 mx-auto']]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq('div', ['class' => 'row'], $ikgwqyuyckaewsow); $iwamiguusayooguq = __('By submitting a new payment request, you will receive your income in the form of a deposit to the introduced bank account', PR__MDL__SALARY); $qyukicweqoisimwg[] = ['class' => "btn btn-primary add-new-withdraw", 'title' => __('Submit', PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo('tab', 'tab_incomes_and_payments', $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq('a', ['href' => $geecqyososceumsk], __('Profile page', PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__('You should first, fill in your bank account information inside your %s, to submit a withdraw', PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __('Add New Withdraw', PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(['size' => 'lg', 'type' => 'primary', 'title' => $uosiuoqysyokseqe, 'prefix' => 'add_new_withdraw', 'content' => $iwamiguusayooguq . $ikgwqyuyckaewsow, 'buttons' => $qyukicweqoisimwg, 'spinner' => true], ['title' => $uosiuoqysyokseqe, 'attrs' => ['class' => 'btn btn-primary float-right', 'aria-label' => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
