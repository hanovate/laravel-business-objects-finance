<?php

namespace Unmit\BusinessObjects\Banner\Finance\ChartOfAccounts;

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
        $initiatorId->setName('title');
        $initiatorId->setBusinessName('title');
        $initiatorId->setColumn('p_fzxxx');

        $initiatorId->push($initiatorId);        // Title
        $title = new BusinessObjectItem();
        $title->setName('title');
        $title->setBusinessName('title');
        $title->setColumn('p_fzxxx');

        $items->push($title);

        // Organization Code
        $organizationCode = new BusinessObjectItem();
        $organizationCode->setName('organizationCode');
        $organizationCode->setBusinessName('organization-code');
        $organizationCode->setColumn('p_fzxxx');

        $items->push($organizationCode);

        // Business Reason
        $businessReason = new BusinessObjectItem();
        $businessReason->setName('businessReason');
        $businessReason->setBusinessName('business-reason');
        $businessReason->setColumn('p_fzxxx');

        $items->push($businessReason);

        $this->setFields($items);
    }

}