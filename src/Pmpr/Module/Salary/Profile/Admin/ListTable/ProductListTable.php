<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793d9693674f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\157\164\141\154\x5f\163\x61\154\x65"; const eocsmweuyayasmma = "\171\157\165\x72\137\145\x61\162\x6e\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\160\x6c\x75\x72\x61\x6c" => __("\120\162\157\x64\165\143\164\163", PR__MDL__SALARY), "\163\x69\x6e\147\x75\x6c\141\162" => __("\120\162\x6f\144\165\143\x74", PR__MDL__SALARY), "\141\152\141\170" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([Constants::osocaqqumyuooqyo => Constants::iockmgiyoygcswog, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm], Constants::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\164\157\164\141\154\137\x69\164\x65\155\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\x4e\x6f\40\160\162\157\144\x75\143\x74\163\x20\x66\157\x75\x6e\144\56", PR__MDL__SALARY); } public function get_columns() : array { return [Constants::NAME => __("\116\x61\x6d\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\x54\157\x74\x61\x6c\40\123\141\x6c\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\131\x6f\165\x72\x20\105\141\x72\156\163", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\143\154\141\163\163" => "\164\145\170\x74\x2d\x64\145\143\x6f\162\141\164\151\x6f\x6e\55\x6e\157\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, Constants::gouqcwikiiygyasc)); return sprintf(__("\45\x73\40\116\165\155\x62\x65\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if ($cseccogesusskess) { $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); } } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\52"]) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $this->uawiokcagaqwmyaa()->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)), $eqwoegegiamegqsm->megqywqeuquawkim(Income::eiiuyoyiygsickwe, [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum])], $wkkweuacukumqmya); } }
