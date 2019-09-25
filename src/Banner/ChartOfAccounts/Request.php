<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Illuminate\Support\Collection;
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
class Request extends AbstractBusinessObject
{
    public $id;
    public $initiatorId;
    public $title;
    public $organizationCode;
    public $businessReason;
    public $predecessor;
    public $fundType;
    public $financialManager;
    public $isDataEntry;
    public $endowed;
    public $fund;
    public $program;
    public $activity;


    public function __construct()
    {
        $items = new Collection();

        // Sequence Number (Unique Identifier)
        $sequenceId = new BusinessObjectItem('id','Id','FZBCOAM_SEQUENCE_NUM,');
        $items->push($sequenceId);

        // Initiator Id - netid
        $initiatorId = new BusinessObjectItem('initiatorId','Initiator Netid','FZBCOAM_INITIATORID');
        $items->push($initiatorId);

        // Title
        $title = new BusinessObjectItem('title', 'Title', 'FZBCOAM_TITLE');
        $items->push($title);

        // Organization Code
        $organizationCode = new BusinessObjectItem('organizationCode','Organization Code', 'FZBCOAM_ORGN');
        $items->push($organizationCode);

        // Business Reason
        $businessReason = new BusinessObjectItem('businessReason', 'Business Reason', 'FZBCOAM_REQUEST_COMMENTS');
        $items->push($businessReason);

        //Predecessor V_PRED IN VARCHAR2
        $predecessor = new BusinessObjectItem('predecessor', 'Predecessor', 'FZBCOAM_PROCESSORID');
        $items->push($predecessor);

        // Fund Type V_FND_TYPE IN VARCHAR2 populated with Fund
        $fundType = new BusinessObjectItem('fundType', 'Fund Type', 'FZBCOAM_TYPE');
        $items->push($fundType);

        //  Financial manager V_FINMAN IN VARCHAR2 populated for Index based on Fund
        $financialManager = new BusinessObjectItem('financialManager', 'Financial Manager', 'FZBCOAM_FINMAN');
        $items->push($financialManager);

        //  Is data entry V_IS_DATAENTRY IN VARCHAR2 populated for Account, Fund, & Program
        $isDataEntry = new BusinessObjectItem('isDataEntry', 'Is Data Entry', 'FZBCOAM_DATAENTRY,');
        $items->push($isDataEntry);

        //  Endowed V_ENDOW IN VARCHAR2,
        $endowed = new BusinessObjectItem('endowed', 'Endowed', 'FZBCOAM_ENDOWFUND');
        $items->push($endowed);

        // Fund   V_FUND IN VARCHAR2 new Index
        $fund = new BusinessObjectItem('fund', 'Fund', 'FZBCOAM_FUND');
        $items->push($fund);

        //  Program V_PROG IN VARCHAR2 new Index
        $program = new BusinessObjectItem('program', 'Program', 'FZBCOAM_PROG');
        $items->push($program);

        //  Activity V_ACTV IN VARCHAR2 new Index
        $activity = new BusinessObjectItem('activity', 'Activity', 'FZBCOAM_ACTV');
        $items->push($activity);

        $this->setFields($items);
    }

}