<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;

class OrganizationCode extends AbstractBusinessObject
{
    public $code;
    public $title;
    public $termDate;

    public function __construct()
    {
        $items = new Collection();

        // Code
        $code = new BusinessObjectItem();
        $code->setName('code');
        $code->setBusinessName('code');
        $code->setColumn('ftvorgn_orgn_code');

        $items->push($code);

        // Title

        $title = new BusinessObjectItem();
        $title->setName('title');
        $title->setBusinessName('title');
        $title->setColumn('ftvorgn_title');

        $items->push($title);

        // Term Date
        $termDate = new BusinessObjectItem();
        $termDate->setName('termDate');
        $termDate->setBusinessName('term-date');
        $termDate->setColumn('term_date');

        $items->push($termDate);

        $this->setFields($items);

    }

}