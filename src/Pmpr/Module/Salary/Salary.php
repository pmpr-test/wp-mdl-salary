<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8a2de401a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Profile; class Salary extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\123\141\x6c\141\x72\171", PR__MDL__SALARY); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\165\x67\151\x6e\x73\137\154\157\x61\x64\145\x64", [$this, "\151\x63\167\x63\147\155\143\x6f\151\x6d\161\145\151\147\171\x65"]); $this->waqewsckuayqguos("\142\x65\x66\157\162\x65\x5f\x65\x6e\x71\165\x65\x75\145\137\x62\x61\143\x6b\x65\156\144\137\x61\x73\163\x65\x74\x73", [$this, "\145\x6e\x71\x75\x65\x75\x65"]); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { User::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Agreement::symcgieuakksimmu(); Request::symcgieuakksimmu(); Income::symcgieuakksimmu(); Withdraw::symcgieuakksimmu(); Payment::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } } public function enqueue() { if ($eygsasmqycagyayw = $this->miocmcoykayoyyau()) { $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\151\x6e", $eygsasmqycagyayw->get("\141\144\x6d\151\156\x2e\152\x73"))->simswskycwagoeqy())->ikqyiskqaaymscgw("\x61\x6a\x61\x78", Ajax::myikkigscysoykgy); } } }
