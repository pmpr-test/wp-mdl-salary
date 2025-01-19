<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d44b4163             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Module\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { $this->id = "\x69\x6e\143\x6f\155\x65\x73"; $this->title = __("\111\156\143\x6f\x6d\145\163", PR__MDL__SALARY); $this->priority = 10; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
