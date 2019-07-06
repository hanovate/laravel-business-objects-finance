<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;

class OrganizationCode extends AbstractBusinessObject
{
    public $code;
    public $description;

    public function __construct()
    {

        $items = new Collection();
        // Code
        $code = new BusinessObjectItem();
        $code->setName('code');
        $code->setBusinessName('code');
        $code->setColumn('p_fzxxxcode');

        $items->push($code);        // Title

        // Description
        $description = new BusinessObjectItem();
        $description->setName('description');
        $description->setBusinessName('description');
        $description->setColumn('p_fzxxxdesc');

        $items->push($description);

        $this->setFields($items);

    }

}