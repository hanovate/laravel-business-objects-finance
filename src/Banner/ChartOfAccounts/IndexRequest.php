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
class IndexRequest extends Request
{
    public $organizationCode;
    public $financialManager;
    public $fund;
    public $program;
    public $activity;


    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        // Organization Code
        $organizationCode = new BusinessObjectItem('organizationCode','Organization Code', 'V_ORGN');
        $items->push($organizationCode);

        //  Financial manager V_FINMAN IN VARCHAR2 populated for Index based on Fund
        $financialManager = new BusinessObjectItem('financialManager', 'Financial Manager', 'V_FINMAN');
        $items->push($financialManager);

        // Fund   V_FUND IN VARCHAR2 new Index
        $fund = new BusinessObjectItem('fund', 'Fund', 'V_FUND');
        $items->push($fund);

        //  Program V_PROG IN VARCHAR2 new Index
        $program = new BusinessObjectItem('program', 'Program', 'V_PROG');
        $items->push($program);

        //  Activity V_ACTV IN VARCHAR2 new Index
        $activity = new BusinessObjectItem('activity', 'Activity', 'V_ACTV');
        $items->push($activity);

        $this->setFields($items);
    }

}