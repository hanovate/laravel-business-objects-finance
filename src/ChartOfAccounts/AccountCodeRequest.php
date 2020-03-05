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
    public $account;
    public $type;
    public $normalBalance;
    public $isDataEntry;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        //Predecessor V_PRED IN VARCHAR2
        $predecessor = new BusinessObjectItem('predecessor', 'Predecessor', 'FZBCOAM_ACCT_PRED');
        $items->push($predecessor);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $account = new BusinessObjectItem('account', 'Account', 'FZBCOAM_ACCT');
        $items->push($account);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $type = new BusinessObjectItem('type', 'Type', 'FZBCOAM_ACCT_TYPE');
        $items->push($type);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $normalBalance = new BusinessObjectItem('normal_balance', 'Normal Balance', '');
        $items->push($normalBalance);

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $isDataEntry = new BusinessObjectItem('is_data_entry', 'Is Data Entry', 'FZBCOAM_ACCT_DATAENTRY');
        $items->push($isDataEntry);

        $this->setFields($items);
    }

}