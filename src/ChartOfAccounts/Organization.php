<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Organization
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class Organization extends AbstractBusinessObject
{
    public $code;
    public $title;

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::NAME => 'id',
                BusinessObjectItem::BUSINESS_NAME => 'Id',
                BusinessObjectItem::COLUMN_NAME => 'organization_code'
            ],[
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'organization_desc'
            ],[
                BusinessObjectItem::NAME => 'financial_manager',
                BusinessObjectItem::BUSINESS_NAME => 'Financial Manager',
                BusinessObjectItem::COLUMN_NAME => 'financial_manager_name'
            ],[
                BusinessObjectItem::NAME => 'financial_manager_pidm',
                BusinessObjectItem::BUSINESS_NAME => 'Financial Manager Id',
                BusinessObjectItem::COLUMN_NAME => 'financial_manager_uid'
            ]
        ];

        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}
