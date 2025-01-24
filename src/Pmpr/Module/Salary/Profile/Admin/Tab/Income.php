<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793d9693674f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Module\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { $this->id = "\151\156\143\157\x6d\145\x73"; $this->title = __("\111\156\x63\157\x6d\145\163", PR__MDL__SALARY); $this->priority = 10; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
