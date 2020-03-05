<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class AccountCodeRequest extends Request
{
    public $predecessor;
    public $type;
    public $isDataEntry;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        //Predecessor V_PRED IN VARCHAR2
        $predecessor = new BusinessObjectItem('predecessor', 'Predecessor', 'FZBCOAM_ACCT_PRED');
        $items->push($predecessor);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $type = new BusinessObjectItem('account', 'Account', 'FZBCOAM_ACCT');
        $items->push($type);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $type = new BusinessObjectItem('type', 'Type', 'FZBCOAM_ACCT_TYPE');
        $items->push($type);

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $isDataEntry = new BusinessObjectItem('isDataEntry', 'Is Data Entry', 'FZBCOAM_ACCT_DATAENTRY');
        $items->push($isDataEntry);

        $this->setFields($items);
    }

}