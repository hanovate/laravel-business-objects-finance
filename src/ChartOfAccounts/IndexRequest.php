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
class IndexRequest extends Request
{
    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_INDEX_TITLE'
            ],
            [
                BusinessObjectItem::NAME => 'organization',
                BusinessObjectItem::BUSINESS_NAME => 'Organization',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ORGN'
            ],
            [
                BusinessObjectItem::NAME => 'fund',
                BusinessObjectItem::BUSINESS_NAME => 'Fund',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_FUND'
            ],
            [
                BusinessObjectItem::NAME => 'program',
                BusinessObjectItem::BUSINESS_NAME => 'Program',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_PROG'
            ],
            [
                BusinessObjectItem::NAME => 'activity',
                BusinessObjectItem::BUSINESS_NAME => 'Activity',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACTV'
            ]
        ];
        $this->pushElements($items,$elems);
        $this->setFields($items);
    }

}