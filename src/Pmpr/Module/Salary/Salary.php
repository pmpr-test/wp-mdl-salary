<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795e81296110             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\BankAccount; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Profile; use Pmpr\Module\Salary\Woocommerce\Order; use Pmpr\Module\Salary\Woocommerce\Product; class Salary extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x53\141\154\141\x72\171", PR__MDL__SALARY); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\154\x75\x67\x69\156\163\137\154\157\141\x64\x65\x64", [$this, "\151\x63\x77\x63\147\155\143\157\151\155\x71\x65\x69\147\x79\x65"]); $this->waqewsckuayqguos("\142\145\x66\157\162\x65\137\x65\x6e\x71\x75\145\x75\145\137\x62\141\x63\153\145\156\x64\137\x61\163\x73\145\164\x73", [$this, "\145\156\x71\165\145\165\x65"]); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { User::symcgieuakksimmu(); Order::symcgieuakksimmu(); Profile::symcgieuakksimmu(); Product::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Agreement::symcgieuakksimmu(); Request::symcgieuakksimmu(); Income::symcgieuakksimmu(); Withdraw::symcgieuakksimmu(); Payment::symcgieuakksimmu(); BankAccount::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x61\144\155\x69\x6e", "\x61\144\x6d\151\x6e\56\152\163")->simswskycwagoeqy())->wwmusmkkcwsiciou($this, Constants::wyucqaeuuqkesque, Ajax::myikkigscysoykgy); } }
