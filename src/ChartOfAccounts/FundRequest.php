<?php

namespace Unmit\BusinessObjects\Finance\ChartOfAccounts;

use Unmit\ldk\BusinessObjectsbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class FundRequest extends Request
{
    public $predecessor;
    public $type;
    public $financialManager;
    public $isDataEntry;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        //Predecessor V_PRED IN VARCHAR2
        $predecessor = new BusinessObjectItem('predecessor', 'Predecessor', 'V_PRED');
        $items->push($predecessor);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $type = new BusinessObjectItem('type', 'Fund Type', 'V_TYPE');
        $items->push($type);

        //  Financial manager V_FINMAN IN VARCHAR2 populated for Index based on Fund
        $financialManager = new BusinessObjectItem('financialManager', 'Financial Manager', 'V_FINMAN');
        $items->push($financialManager);

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $isDataEntry = new BusinessObjectItem('isDataEntry', 'Is Data Entry', 'V_DATAENTRY');
        $items->push($isDataEntry);

        $this->setFields($items);
    }

}