<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff69626c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Exception; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\Woocommerce\Order; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Apply extends AbstractAgreement { public function __construct() { $this->rest_base = "\x61\160\160\154\171"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x73\165\x62\155\151\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x65\141\x71\147\x79\163\x67\141\x65\157\167\141\x67\x75\x67"]])->register("\x2f\147\145\x74\55\163\164\x65\160\163", [Constants::wwgusigoaksqmwsm => [$this, "\147\165\x69\x79\165\x73\151\x6b\x73\x73\165\155\x65\143\167\x6b"]])->register("\57\163\x75\142\155\151\x74\x2d\160\141\171\x6d\x65\x6e\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\147\151\171\x6d\171\167\157\x6f\153\167\x6d\157\153\155\x61\153"]])->register("\x2f\x63\x68\145\143\x6b\x2d\x63\x6f\x75\160\x6f\156", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\161\151\x6d\165\147\x61\167\x69\141\141\147\x61\151\x65\x73\x75"]])->register("\57\x67\145\x74\55\160\x61\171\x6d\x65\x6e\164\x2d\146\x69\145\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x6f\157\x6f\x6b\x6b\157\x6b\x71\145\x61\x77\145\161\x73\151\x6b"]]); } public function oookkokqeaweqsik(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $gikyaoiioawywyeu = $kueeocmceokoouqa->waecsyqmwascmqoa($keccaugmemegoimu, $kueeocmceokoouqa::woagckamiequeoyu); if ($gikyaoiioawywyeu) { $xssuewsokckmigqk = $this->gayyweiqkuooeicq($gikyaoiioawywyeu); if (!is_wp_error($xssuewsokckmigqk)) { $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::xoaoskywwwqwgqkk), 0); if ($product) { $iueymcwwscwqkiyq = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $keccaugmemegoimu); if ($iueymcwwscwqkiyq === $kueeocmceokoouqa::mmyygcoemkeqcwii) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $ackukeowwsmgogoy = $this->caokeucsksukesyo()->wikusamwomuogoau()->omugyqoocwwewimm(); $owwwmkusqqgiyckq = false; foreach ($ackukeowwsmgogoy as $aokagokqyuysuksm => $aacgiamwycisuaoe) { if ($aokagokqyuysuksm === "\142\141\x63\x73") { $owwwmkusqqgiyckq = $aacgiamwycisuaoe->get_title(); } $wkaqekwwgqsqwcoi = $aacgiamwycisuaoe->get_icon(); if ($wkaqekwwgqsqwcoi && $smuykqsageuocuos->has($wkaqekwwgqsqwcoi, "\151\x6d\147")) { $wkaqekwwgqsqwcoi = $smuykqsageuocuos->igmaewykumgwoaoy($wkaqekwwgqsqwcoi, ["\151\x6d\x67" => [Constants::qomookamaskuoswk => "\62\x35\160\170", Constants::sogmkkcwuamuqegw => "\62\65\x70\170"]]); } $gmcgeogogyqsgawk = [Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, Constants::TEXT => $wkaqekwwgqsqwcoi . $swqimwqeweekeusq->gmqyuaqwgiayskei($aacgiamwycisuaoe->get_title(), ["\x63\x6c\x61\163\x73" => "\155\154\x2d\62"])]; if ($ukwokcuqauuosmoo = $aacgiamwycisuaoe->get_description()) { $gmcgeogogyqsgawk[Constants::eqkeooqcsscoggia] = $ukwokcuqauuosmoo; } $ackukeowwsmgogoy[$aokagokqyuysuksm] = $gmcgeogogyqsgawk; } $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = []; if ($ackukeowwsmgogoy) { $cwswukmmugcscomw = "\144\x2d\146\154\145\x78\40\x6a\x75\163\164\x69\146\x79\x2d\x63\157\x6e\x74\145\x6e\164\55\142\x65\164\167\x65\145\156"; $wewsywccwwomowkw = $usmsssmiougymckk->eccmmwqkaocgogms($product, ''); $wssayyokygeaakog = $usmsssmiougymckk->scgumisucgwskyqk($product); $usmggcaosmcmygig = $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gmqyuaqwgiayskei(__("\120\162\151\x63\x65", PR__MDL__SALARY)), $swqimwqeweekeusq->ciuuiyckmsygceis($product->get_price_html())], ["\143\154\141\163\163" => "{$cwswukmmugcscomw}\x20\155\x62\x2d\62"]), $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x44\151\x73\143\x6f\165\x6e\x74", PR__MDL__SALARY)), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($wewsywccwwomowkw, ["\x64\x6f\156\164\x2d\143\x68\141\156\147\x65" => true]), ["\143\154\141\x73\163" => "\160\x72\x69\143\145\55\x69\x74\145\x6d\40\144\x69\163\143\157\165\x6e\164"])], ["\x63\x6c\141\163\x73" => "{$cwswukmmugcscomw}\x20\x6d\142\x2d\x32"]), $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gmqyuaqwgiayskei(__("\x54\157\164\141\154\x20\x50\162\x69\143\145", PR__MDL__SALARY)), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($wssayyokygeaakog, ["\144\x6f\x6e\164\55\x63\150\x61\x6e\x67\x65" => true]), ["\143\x6c\141\163\163" => "\160\162\151\x63\145\x2d\151\x74\145\155\x20\164\x6f\164\x61\x6c"])], ["\x63\x6c\x61\x73\x73" => $cwswukmmugcscomw])]); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->yqgagqgesqyuyuqq("\157\166\145\x72\166\x69\145\167")->ocyagsiykqkycmus()->gucwmccyimoagwcm($usmsssmiougymckk->qcgakseyaikigqco($product))->oguessuismosauuu($usmggcaosmcmygig); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws("\143\x6f\x75\160\x6f\156")->yaiuqusyegougysy()->kqqqugemmqagucuq()->qigsyyqgewgskemg("\x74\x65\x78\x74\55\x63\x65\156\x74\145\162")->kyiucygqsgequoys(__("\x45\156\x74\x65\x72\40\x79\x6f\165\162\40\143\x6f\165\160\x6f\x6e", PR__MDL__SALARY)); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::kkeogqiyysoyuemk)->gswweykyogmsyawy(__("\x50\141\171\155\145\x6e\x74\40\115\x65\164\x68\x6f\144", PR__MDL__SALARY))->acauweqyyugwisqc($ackukeowwsmgogoy)->eumecwmqmukqgyea()->qyucewwiggkyeaso("\x62\141\143\x73", ["\x62\141\143\163\x5f\150\x65\141\144\x65\162", "\151\x6e\x73\x74\162\x75\143\164\151\157\156\x73", Order::mqcgeymcoouyukqu, Order::sggyggagimsuqyek, Order::umikocgmiwyueesi]); if ($owwwmkusqqgiyckq) { $qkgucoawaiiaimqk = $this->caokeucsksukesyo()->wikusamwomuogoau()->giiuwsmyumqwwiyq("\x62\141\x63\x73\x5f\x61\143\143\157\165\x6e\164\x73"); if ($qkgucoawaiiaimqk) { foreach ($qkgucoawaiiaimqk as $momcykaoccoymeig => $igqsaukqcqscimok) { $qkgucoawaiiaimqk[$momcykaoccoymeig] = ["\142\141\x6e\x6b" => $igqsaukqcqscimok["\142\141\156\x6b\x5f\156\x61\155\x65"] ?? '', Constants::NAME => $igqsaukqcqscimok["\141\143\143\157\165\156\164\137\x6e\141\x6d\145"] ?? '', Constants::eymwucuaaiiciymc => $igqsaukqcqscimok["\x61\x63\x63\x6f\x75\156\164\x5f\156\x75\155\x62\x65\162"] ?? '']; } } $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->wowyaacgaccyeici("\x62\x61\143\163\137\150\x65\141\144\145\162")->gswweykyogmsyawy($owwwmkusqqgiyckq); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->yyuwuqsiucweeoue("\x69\x6e\x73\x74\162\165\143\164\x69\157\x6e\163")->macygmcekgqwmcwk()->acauweqyyugwisqc($qkgucoawaiiaimqk)->ocyagsiykqkycmus()->gucwmccyimoagwcm(__("\104\x65\160\157\x73\151\164\x20\x74\x68\x65\x20\x61\x62\157\x76\x65\40\x61\x6d\x6f\x75\156\164\x20\x61\x6c\x6c\x20\141\164\40\x6f\x6e\143\x65\40\50\x69\x6e\x20\157\x6e\x65\x20\x67\157\51\x20\164\x6f\x20\164\150\145\40\142\x61\156\153\x20\141\x63\x63\157\x75\156\164\40\167\x69\164\150\40\x74\x68\x65\40\146\157\x6c\154\x6f\167\x69\x6e\147\40\x64\x65\x74\141\x69\154\163\x2e", PR__MDL__SALARY)); $iciiqskwsikiaqmc = BankAccountModel::symcgieuakksimmu()->skawqwmckecgauyc(); $geawouumkyceagee = [[Constants::gouqcwikiiygyasc => '', Constants::uissasisiuymwsmu => __("\x53\x65\154\x65\x63\x74\40\x79\157\165\x72\x20\142\x61\x6e\x6b", PR__MDL__SALARY)]]; foreach ($iciiqskwsikiaqmc as $ymqmyyeuycgmigyo => $womyowwsgeagysyc) { $geawouumkyceagee[] = [Constants::gouqcwikiiygyasc => $ymqmyyeuycgmigyo, Constants::qgqyauaqwqmqseim => $womyowwsgeagysyc[Constants::qgqyauaqwqmqseim] ?? IconInterface::iwayyimcuywiagyy, Constants::uissasisiuymwsmu => $womyowwsgeagysyc[Constants::qescuiwgsyuikume] ?? '']; } $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->mccagaqeagiikkec(Order::mqcgeymcoouyukqu)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\102\141\156\153\x20\157\x66\x20\x4f\162\x69\147\151\156", PR__MDL__SALARY))->acauweqyyugwisqc($geawouumkyceagee); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws(Order::sggyggagimsuqyek)->iccqusgqmsqaiqow()->gswweykyogmsyawy(__("\124\x72\141\156\x73\141\143\x74\151\x6f\156\x20\x44\141\x74\145", PR__MDL__SALARY)); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws(Order::umikocgmiwyueesi)->kqqqugemmqagucuq()->qigsyyqgewgskemg("\164\145\170\164\x2d\143\x65\x6e\x74\145\162")->gswweykyogmsyawy(__("\124\162\x61\143\x6b\x69\x6e\x67\40\x4e\x75\x6d\x62\145\162", PR__MDL__SALARY)); } } $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\x72\40\162\x65\161\165\145\163\x74\40\x63\141\156\x20\x6e\157\x74\40\142\x65\x20\160\141\x79\x65\x64\x20\162\x69\147\x68\164\40\x6e\157\x77\40\157\162\x20\144\x6f\x6e\164\40\x6e\145\x65\x64\x20\164\x6f\x20\142\x65\40\x70\141\x79\145\144\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\145\x74\150\x69\156\147\40\x77\x72\x6f\156\x67\40\x6f\x6e\40\141\147\162\145\x65\x6d\x65\156\x74\54\40\160\154\x65\x61\x73\x65\40\143\x6f\x6e\x74\141\143\164\40\165\163\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $xssuewsokckmigqk; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x6d\145\164\150\x69\x6e\x67\40\x77\162\157\156\147\x20\x61\x62\157\165\164\x20\x79\x6f\x75\x72\x20\x72\x65\x71\x75\x65\x73\164\54\x20\160\x6c\x65\141\163\x65\x20\x63\x6f\156\164\x61\143\x74\40\165\163\x2e", PR__MDL__SALARY)); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function guiyusikssumecwk(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $mkucggyaiaukqoce = $keccaugmemegoimu; $xssuewsokckmigqk = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if ($xssuewsokckmigqk && !is_wp_error($xssuewsokckmigqk)) { $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $keccaugmemegoimu = ["\144\145\164\x61\151\x6c\163" => [Constants::qgqyauaqwqmqseim => IconInterface::qiykkecoigmioaay, Constants::uissasisiuymwsmu => __("\103\157\x6f\x70\x65\162\141\x74\151\157\x6e\x20\x44\145\x74\x61\x69\154\163", PR__MDL__SALARY), Constants::qescuiwgsyuikume => $mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::eymwucuaaiiciymc => 1, Constants::eqkeooqcsscoggia => __("\x54\150\151\163\40\x70\141\147\x65\40\160\x72\x6f\166\151\x64\145\x73\x20\x61\40\x73\165\155\155\141\162\x79\x20\x6f\146\x20\164\150\145\40\144\145\x74\141\x69\154\163\x20\157\x66\40\150\x6f\x77\40\x74\x6f\40\x63\x6f\154\154\x61\142\157\162\141\x74\145\56\40\x49\x66\40\x79\157\165\40\141\162\145\40\x69\156\164\x65\162\145\x73\164\145\144\40\151\x6e\x20\x64\157\151\156\x67\40\x73\x6f\x2c\x20\x70\x6c\145\x61\163\145\x20\160\162\x6f\143\x65\x65\144\x20\164\157\40\164\x68\x65\x20\x6e\145\x78\x74\x20\x73\164\145\160\56", PR__MDL__SALARY)], "\160\x72\145\x72\145\x71\165\x69\163\151\x74\145\x73" => [Constants::qgqyauaqwqmqseim => IconInterface::eikwkmckkqcsygys, Constants::qwumqqyuasyskkkc => $this->qsyweymowowcmsww($keccaugmemegoimu), Constants::uissasisiuymwsmu => __("\x50\x72\145\x72\145\x71\165\x69\163\151\x74\x65\x73", PR__MDL__SALARY), Constants::qescuiwgsyuikume => __("\x43\x6f\x6d\x70\x6c\x65\164\145\x20\x50\x72\157\x66\151\154\145", PR__MDL__SALARY), Constants::eymwucuaaiiciymc => 2, Constants::eqkeooqcsscoggia => __("\103\x6f\155\160\x6c\x65\164\145\40\x74\150\x65\x20\146\x6f\154\x6c\157\x77\x69\x6e\147\x20\x69\156\146\x6f\x72\x6d\x61\x74\x69\x6f\x6e\40\151\156\40\171\x6f\x75\x72\x20\165\163\x65\x72\40\160\162\x6f\x66\x69\154\x65\x2e\40\111\146\40\164\150\x65\40\151\156\146\157\162\x6d\x61\164\x69\157\x6e\40\x61\156\x64\40\x64\x6f\x63\165\155\145\x6e\164\x73\x20\141\162\x65\40\x76\x65\162\151\x66\x69\145\x64\54\x20\171\x6f\x75\40\167\x69\x6c\x6c\40\x62\145\x20\144\x69\x72\145\143\x74\145\144\40\164\x6f\40\x74\150\145\40\x6e\145\x78\x74\40\163\164\145\160\x2e\x20\x54\x68\x65\40\166\x65\162\151\146\x69\x63\141\x74\151\157\x6e\40\160\162\157\143\x65\x73\x73\40\x77\151\x6c\154\x20\x74\141\153\x65\40\x62\145\x74\167\145\145\156\x20\141\x20\146\145\167\40\150\x6f\165\162\163\40\x61\156\144\40\x61\x20\146\145\x77\40\x64\141\x79\163\x2e\x20\120\154\x65\141\x73\x65\40\x63\x68\x65\x63\153\40\x62\141\x63\153\40\x6f\156\x20\164\150\x69\x73\40\160\x61\x67\145\40\x69\x6e\40\164\x68\x65\x20\x63\157\155\x69\x6e\x67\x20\144\141\x79\x73\40\x74\157\x20\143\150\x65\x63\x6b\x20\x74\150\x65\40\162\x65\163\165\x6c\x74\x73\40\x6f\146\x20\x74\x68\145\40\x76\145\x72\151\x66\x69\143\x61\164\x69\x6f\156\40\x70\162\x6f\x63\x65\163\x73\56", PR__MDL__SALARY)], "\164\145\x72\x6d\x73" => [Constants::qgqyauaqwqmqseim => IconInterface::umisosmogyssawss, Constants::ucoiewcoucauqwko => $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko)), Constants::uissasisiuymwsmu => __("\x43\x6f\157\160\x65\x72\141\x74\x69\157\x6e\x20\124\x65\x72\x6d\x73", PR__MDL__SALARY), Constants::qescuiwgsyuikume => __("\x43\157\x6f\x70\145\x72\x61\164\x69\x6f\156\x20\124\145\x72\155\x73", PR__MDL__SALARY), Constants::eymwucuaaiiciymc => 3, Constants::eqkeooqcsscoggia => __("\x42\x79\40\163\x75\142\x6d\x69\164\x74\x69\156\147\x20\x79\x6f\x75\x72\x20\x63\157\157\160\145\x72\x61\164\x69\157\156\40\162\145\x71\x75\145\163\x74\x2c\x20\171\x6f\x75\x20\141\x67\162\x65\145\40\164\x6f\x20\164\150\x65\40\x66\x6f\154\154\x6f\167\x69\x6e\147\40\164\x65\162\155\x73\x20\141\x6e\144\40\143\x6f\x6e\x64\151\x74\x69\x6f\x6e\x73\56\x20\x49\x66\40\171\x6f\x75\40\x77\151\163\150\x20\164\157\x20\x63\x6f\x6f\x70\145\162\x61\x74\x65\x2c\40\160\x6c\x65\141\x73\x65\x20\x63\157\x6e\x66\151\162\155\40\x74\150\145\x20\164\x65\x72\x6d\x73\40\x61\156\144\40\143\157\x6e\144\151\x74\151\x6f\x6e\x73\40\x61\156\x64\40\160\x72\157\x63\x65\x65\144\40\164\157\x20\164\150\145\40\156\145\x78\164\x20\163\x74\145\160\x2e", PR__MDL__SALARY)]]; } else { if (is_wp_error($xssuewsokckmigqk)) { $keccaugmemegoimu = $xssuewsokckmigqk; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\x71\x75\x65\x73\x74\145\x64\40\x61\147\162\x65\145\x6d\145\x6e\164\x20\x6e\157\x74\40\146\157\165\156\x64\41", PR__MDL__SALARY)); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function qimugawiaagaiesu(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa); if (!is_wp_error($xssuewsokckmigqk)) { $umkkkaqkwugkemce = Model::symcgieuakksimmu()->waecsyqmwascmqoa($xssuewsokckmigqk, Model::xoaoskywwwqwgqkk); if ($umkkkaqkwugkemce) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($umkkkaqkwugkemce); $ioakeqoosmkukeaa = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::vswoiouoaykswgym); if ($ioakeqoosmkukeaa) { $smwiiesyqsgyisos = $this->caokeucsksukesyo()->wikusamwomuogoau()->oeeuywgiaywkimek($ioakeqoosmkukeaa); if ($smwiiesyqsgyisos && $smwiiesyqsgyisos->is_valid_for_product($product)) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $uuwmqqqiwksuaise = $product->get_regular_price(); if ($smwiiesyqsgyisos->get_discount_type() === "\160\x65\162\x63\145\156\x74") { $wewsywccwwomowkw = $smwiiesyqsgyisos->get_amount() * $uuwmqqqiwksuaise / 100; } else { $wewsywccwwomowkw = $smwiiesyqsgyisos->get_amount(); } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\103\x6f\x75\160\157\156\x20\141\x70\160\154\151\145\144\x20\x73\x75\143\143\145\163\x73\x66\165\154\x6c\171\56", PR__MDL__SALARY), [Constants::uueoqmeyyeiqyuku => $cgceoyqmmwumqyqa->aumscagymwyyicag($wewsywccwwomowkw, ["\x64\157\x6e\x74\55\x63\x68\x61\156\147\x65" => true]), Constants::uiiqiokqwmccomiu => $cgceoyqmmwumqyqa->aumscagymwyyicag(max(0, $uuwmqqqiwksuaise - $wewsywccwwomowkw), ["\x64\x6f\156\164\55\x63\150\x61\x6e\147\145" => true])]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\x74\x65\x72\145\x64\x20\x63\157\x64\x65\40\151\x73\40\156\x6f\x74\40\166\141\154\151\144\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x43\157\165\x70\x6f\156\40\103\x6f\x64\145", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x6d\145\x74\150\151\x6e\x67\x20\151\163\x20\x77\162\x6f\x6e\x67\54\x20\x70\x6c\x65\x61\163\x65\x20\143\x6f\156\x74\x61\x63\164\40\x75\163\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $xssuewsokckmigqk; } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\162\145\x65\x6d\145\156\x74")) { if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x6f\156\x73\x65\156\164") === Constants::ON) { if ($this->kigooyssyoymamko($mkucggyaiaukqoce)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$kueeocmceokoouqa->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true)), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)])) { $xssuewsokckmigqk = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if (!is_wp_error($xssuewsokckmigqk)) { $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, $kueeocmceokoouqa::woagckamiequeoyu => $gikyaoiioawywyeu]); if (!is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\165\x20\x72\x65\x71\165\145\163\164\40\163\x75\142\x6d\151\x74\164\x65\144\x20\x73\165\x63\x63\x65\163\x73\x66\165\154\154\x79", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x6d\145\x74\150\151\x6e\x67\40\x77\x72\157\x6e\147\40\157\156\40\x73\x75\142\x6d\x69\x74\164\151\156\147\40\x79\x6f\165\162\40\x72\x65\x71\x75\145\x73\164\x2c\40\160\154\145\x61\x73\x65\40\x74\162\x79\x20\141\147\141\151\156\x20\x61\146\x74\x65\162\x20\146\x65\x77\40\x6d\151\x6e\x75\164\145\x73", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x72\x65\161\x75\145\x73\x74\145\144\x20\141\147\x72\145\145\155\145\156\164\x20\x69\x73\40\x6e\157\164\x20\x76\141\x6c\x69\144\40\157\x72\x20\156\157\x74\40\x65\x78\151\x73\164\54\40\160\x6c\145\141\x73\145\x20\x72\145\146\162\145\x73\x68\x20\x70\x61\147\145\40\x61\x6e\x64\x20\x74\162\x79\x20\141\147\141\151\156\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\171\x6f\165\40\141\x6c\162\x65\x61\144\171\40\x73\x75\142\x6d\151\x74\40\x61\40\x72\145\x71\x75\145\163\x74\40\157\x6e\40\164\x68\x69\163\40\141\147\162\145\x65\x6d\x65\156\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\165\x72\x20\166\x65\162\x69\146\151\141\142\154\x65\40\146\151\x65\x6c\x64\163\40\151\x73\x20\156\157\164\x20\x76\145\x72\x69\x66\x69\x65\144\x2c\x20\143\141\156\x27\164\x20\163\x75\142\155\x69\164\40\171\157\x75\x72\x20\x72\x65\x71\x75\x65\x73\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\145\141\x73\x65\x20\141\143\x63\x65\x70\x74\40\x74\x65\162\x6d\163\x20\x66\151\162\x73\x74\56", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\147\162\145\x65\155\x65\156\x74\40\x69\144\40\151\x73\x20\141\x20\162\x65\x71\x75\151\162\x65\x20\x66\151\145\154\144", PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function giymywookwmokmak(WP_REST_Request $aqmwamyiwgeeymqa) { $ycoeoaakqyskgykq = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (is_wp_error($ycoeoaakqyskgykq)) { $keccaugmemegoimu = $ycoeoaakqyskgykq; } else { $aacgiamwycisuaoe = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::kkeogqiyysoyuemk); $wikamqqaysqguqcc = $aacgiamwycisuaoe === "\x62\x61\143\163"; $aciqcgiwoewiyaeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Order::mqcgeymcoouyukqu); $akykuumyoquskoiw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Order::umikocgmiwyueesi); $mkkmoaqwecygggks = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Order::sggyggagimsuqyek); if (!empty($aacgiamwycisuaoe) && (!$wikamqqaysqguqcc || !empty($aciqcgiwoewiyaeu) && !empty($akykuumyoquskoiw) && !empty($mkkmoaqwecygggks))) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $wqqmoakyckcwwkua = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa->kumuygiiqswoyasy(), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\162\x65\161\x75\145\163\164", 0))]); if ($wqqmoakyckcwwkua) { $gkkgcoiwayaccqgm = $kueeocmceokoouqa->waecsyqmwascmqoa($wqqmoakyckcwwkua, Constants::geykusaewkemcasi); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); $xssuewsokckmigqk = $this->gayyweiqkuooeicq($kueeocmceokoouqa->waecsyqmwascmqoa($wqqmoakyckcwwkua, $kueeocmceokoouqa::woagckamiequeoyu)); if (!is_wp_error($xssuewsokckmigqk)) { $umkkkaqkwugkemce = Model::symcgieuakksimmu()->waecsyqmwascmqoa($xssuewsokckmigqk, Model::xoaoskywwwqwgqkk); if ($umkkkaqkwugkemce) { if ($gkkgcoiwayaccqgm) { $umwqusowiqmyseom = $aqauykcugwiqkumq->get($gkkgcoiwayaccqgm); } else { $umwqusowiqmyseom = $this->uwkmaywceaaaigwo()->mmmcswscsiecscwg()->create(); $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($umkkkaqkwugkemce); $umwqusowiqmyseom->add_product($product); } if ($umwqusowiqmyseom) { $keccaugmemegoimu = null; if ($smwiiesyqsgyisos = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x6f\165\160\x6f\156")) { $sogksuscggsicmac = $umwqusowiqmyseom->apply_coupon($smwiiesyqsgyisos); if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } } try { if (!is_wp_error($keccaugmemegoimu)) { $iueymcwwscwqkiyq = $kueeocmceokoouqa::mmyygcoemkeqcwii; $umwqusowiqmyseom->update_meta_data(Constants::igecewwoemccgwsq, Order::oyqquqcamuaaiaoc); if ($wikamqqaysqguqcc) { $iueymcwwscwqkiyq = $kueeocmceokoouqa::ocquiawgyoguowuu; $umwqusowiqmyseom->update_meta_data(Order::mqcgeymcoouyukqu, $aciqcgiwoewiyaeu); $umwqusowiqmyseom->update_meta_data(Order::umikocgmiwyueesi, $akykuumyoquskoiw); $umwqusowiqmyseom->update_meta_data(Order::sggyggagimsuqyek, $mkkmoaqwecygggks); } $umwqusowiqmyseom->set_customer_id($ycoeoaakqyskgykq); $umwqusowiqmyseom->set_payment_method($aacgiamwycisuaoe); $umwqusowiqmyseom->calculate_totals(); $umwqusowiqmyseom->save(); $keccaugmemegoimu = $kueeocmceokoouqa->gssiscqyqsacmeca()->wqikesawekycweoi($wqqmoakyckcwwkua, [Constants::geykusaewkemcasi => $umwqusowiqmyseom->get_id(), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); if (!is_wp_error($keccaugmemegoimu)) { if ($wikamqqaysqguqcc) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\165\x72\40\157\162\144\145\x72\x20\163\x75\x62\155\x69\x74\164\x65\x64\x20\x73\x75\143\x63\x65\163\163\146\165\x6c\x6c\x79", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\x75\x72\x20\157\x72\144\145\162\40\151\x73\40\x63\162\x65\141\164\x65\x64\54\x20\x6c\x65\x74\x27\x73\40\x67\157\40\164\x6f\40\x62\x61\156\x6b", PR__MDL__SALARY), [Constants::auqoykcmsiauccao => $umwqusowiqmyseom->get_checkout_payment_url()]); } } } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\155\145\164\x68\151\x6e\147\x20\151\163\40\167\162\157\x6e\x67\54\40\160\154\145\141\163\x65\x20\x63\x6f\156\164\141\143\x74\40\x75\x73\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\x65\164\150\151\x6e\x67\40\x69\x73\40\x77\162\x6f\x6e\x67\x2c\40\x70\x6c\x65\141\x73\145\x20\x74\162\x79\40\141\x67\141\151\156\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\145\164\x68\151\x6e\x67\x20\151\x73\40\167\162\x6f\x6e\147\54\40\x70\x6c\x65\141\x73\x65\40\143\x6f\156\x74\141\x63\164\x20\x75\x73\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $xssuewsokckmigqk; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\x75\x72\40\162\x65\161\165\x65\x73\164\x20\151\163\x20\156\157\164\x20\x76\141\x6c\x69\144\40\x6f\162\x20\x6e\x6f\164\x20\146\157\165\x6e\144\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function kigooyssyoymamko($mkucggyaiaukqoce) : bool { $kqwygogeauwwyoca = true; $ikgwqyuyckaewsow = $this->qsyweymowowcmsww($mkucggyaiaukqoce); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $iueymcwwscwqkiyq = $aiowsaccomcoikus[Constants::ciywsqoeiymemsys] ?? false; if ($iueymcwwscwqkiyq !== Constants::koswkeacksqaocay) { $kqwygogeauwwyoca = false; break; } } return $kqwygogeauwwyoca; } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $ouwoukcecmicoeos = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::eieeagimaskkekew); if ($ouwoukcecmicoeos) { $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\137\165\163\145\162\137\x67\x65\164\137\x66\151\x65\154\144\163", [], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::ackcaikowcokggsc => $ouwoukcecmicoeos, Constants::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [Constants::sgoswgskyiiwkyuo => __("\x50\145\156\x64\151\x6e\147", PR__MDL__SALARY), Constants::koswkeacksqaocay => __("\x56\x65\x72\151\146\151\x65\144", PR__MDL__SALARY), Constants::iiiimowywicukqke => __("\x55\156\143\x6f\x6d\160\154\145\164\145\144", PR__MDL__SALARY)]; if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $iueymcwwscwqkiyq = Constants::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::sgoswgskyiiwkyuo; } } } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } } $kqwygogeauwwyoca = Constants::koswkeacksqaocay === $iueymcwwscwqkiyq; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, Constants::qescuiwgsyuikume => $aiowsaccomcoikus->qcgakseyaikigqco(), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::koswkeacksqaocay => $kqwygogeauwwyoca, Constants::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (Constants::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $ocqaciyqwmcuuuue[$iueymcwwscwqkiyq] ?? '']; } } } } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($sogksuscggsicmac); } }
