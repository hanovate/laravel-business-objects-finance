<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Unmit\BusinessObjects\BusinessObjectItem;
/**
 * Class: RequestPackage
 *
 * @see Request
 *  *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */

class RequestPackage extends Request
{

    public function __construct()
    {
        parent::__construct();

        // Sequence Id
        $this->replaceColumnName('id','V_REQUEST_ID');

        // Initiator Id - netid
        $this->replaceColumnName('initiatorId','V_INIT_ID');

        // Title
        $this->replaceColumnName('title', 'V_TITLE');

        // Organization Code
        $this->replaceColumnName('organizationCode', 'V_ORGN');

        // Business Reason
        $this->replaceColumnName('businessReason', 'V_REC_COMM');

        //Predecessor V_PRED IN VARCHAR2
        $this->replaceColumnName('predecessor', 'V_PRED');

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $this->replaceColumnName('fundType', 'V_FND_TYPE');

        //  Financial manager V_FINMAN IN VARCHAR2 populated for Index based on Fund
        $this->replaceColumnName('financialManager', 'V_FINMAN');

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $this->replaceColumnName('isDataEntry', 'V_DATAENTRY');

        //  Endowed V_ENDOW IN VARCHAR2,
        $this->replaceColumnName('endowed', 'V_ENDOW');

        // Fund   V_FUND IN VARCHAR2 new Index
        $this->replaceColumnName('fund', 'V_FUND');

        //  Program V_PROG IN VARCHAR2 new Index
        $this->replaceColumnName('program', 'V_PROG');

        //  Activity V_ACTV IN VARCHAR2 new Index
        $this->replaceColumnName('activity', 'V_ACTV');
    }
}