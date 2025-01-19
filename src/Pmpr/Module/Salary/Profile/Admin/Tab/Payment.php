<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d44b4163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Admin\ListTable\WithdrawListTable; class Payment extends ORMTab { public function __construct() { $this->id = "\160\x61\x79\x6d\145\x6e\x74\163"; $this->title = __("\120\x61\171\x6d\145\x6e\164\163", PR__MDL__SALARY); $this->priority = 20; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new WithdrawListTable(Withdraw::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
