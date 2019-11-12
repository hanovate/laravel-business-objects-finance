<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class ProgramRequest extends Request
{
    public $predecessor;
    public $isDataEntry;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        //Predecessor V_PRED IN VARCHAR2
        $predecessor = new BusinessObjectItem('predecessor', 'Predecessor', 'V_PRED');
        $items->push($predecessor);

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $isDataEntry = new BusinessObjectItem('isDataEntry', 'Is Data Entry', 'V_DATAENTRY');
        $items->push($isDataEntry);

        $this->setFields($items);
    }

}