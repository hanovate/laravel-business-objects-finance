<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;

class Request extends AbstractBusinessObject
{

    public $initiatorId;
    public $title;
    public $organizationCode;
    public $businessReason;

    public function __construct()
    {
        $items = new Collection();
        // Initiator Id - netid
        $initiatorId = new BusinessObjectItem();
        $initiatorId->setName('initiator netid');
        $initiatorId->setBusinessName('initiator-id');
        $initiatorId->setColumn('szxxx_sequence_no');

        $items->push($initiatorId);

        // Title
        $title = new BusinessObjectItem();
        $title->setName('title');
        $title->setBusinessName('title');
        $title->setColumn('szxxx_title');

        $items->push($title);

        // Organization Code
        $organizationCode = new BusinessObjectItem();
        $organizationCode->setName('organizationCode');
        $organizationCode->setBusinessName('organization-code');
        $organizationCode->setColumn('szxxx_org');

        $items->push($organizationCode);

        // Business Reason
        $businessReason = new BusinessObjectItem();
        $businessReason->setName('businessReason');
        $businessReason->setBusinessName('business-reason');
        $businessReason->setColumn('szxxx_reason');

        $items->push($businessReason);

        $this->setFields($items);
    }

}