<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcdda3b975             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\BankAccount; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Profile; use Pmpr\Module\Salary\Woocommerce\Order; use Pmpr\Module\Salary\Woocommerce\Product; class Salary extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\123\141\x6c\141\x72\x79", PR__MDL__SALARY); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\154\x75\x67\x69\156\163\137\154\157\x61\144\145\x64", [$this, "\151\143\x77\143\x67\155\143\157\x69\x6d\161\145\151\147\171\x65"]); $this->waqewsckuayqguos("\142\145\x66\x6f\162\145\x5f\145\x6e\161\165\x65\165\x65\137\x62\141\x63\x6b\145\156\144\137\x61\163\163\x65\x74\x73", [$this, "\x65\156\161\165\145\165\145"]); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { User::symcgieuakksimmu(); Order::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Agreement::symcgieuakksimmu(); Request::symcgieuakksimmu(); Income::symcgieuakksimmu(); Withdraw::symcgieuakksimmu(); Payment::symcgieuakksimmu(); BankAccount::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x61\144\155\151\x6e", "\x61\144\155\151\x6e\56\152\x73")->simswskycwagoeqy())->wwmusmkkcwsiciou($this, Constants::wyucqaeuuqkesque, Ajax::myikkigscysoykgy); } }
