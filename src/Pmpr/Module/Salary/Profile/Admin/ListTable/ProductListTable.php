<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677bb92eaa7ed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\157\164\x61\154\x5f\163\141\x6c\145"; const eocsmweuyayasmma = "\x79\x6f\x75\x72\137\145\141\162\x6e\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\160\x6c\165\x72\x61\x6c" => __("\x50\x72\x6f\x64\x75\x63\164\163", PR__MDL__SALARY), "\x73\x69\156\x67\x75\154\141\x72" => __("\120\162\157\144\x75\143\x74", PR__MDL__SALARY), "\141\152\141\x78" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([Constants::osocaqqumyuooqyo => Constants::iockmgiyoygcswog, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm], Constants::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\164\157\x74\x61\x6c\x5f\151\x74\x65\155\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\x4e\x6f\x20\160\162\x6f\x64\165\143\x74\163\40\x66\x6f\x75\x6e\144\x2e", PR__MDL__SALARY); } public function get_columns() : array { return [Constants::NAME => __("\x4e\x61\155\x65", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\157\x74\x61\154\x20\123\141\x6c\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\131\157\165\x72\40\x45\141\162\156\x73", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\x63\154\141\163\x73" => "\x74\x65\170\164\x2d\x64\145\x63\x6f\x72\141\x74\x69\157\156\55\x6e\157\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, Constants::gouqcwikiiygyasc)); return sprintf(__("\x25\x73\40\116\165\x6d\x62\145\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if ($cseccogesusskess) { $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); } } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $this->uawiokcagaqwmyaa()->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)), $eqwoegegiamegqsm->megqywqeuquawkim(Income::eiiuyoyiygsickwe, [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum])], $wkkweuacukumqmya); } }
