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
class OrganizationRequest extends Request
{
    public $code;
    public $title;

    public function __construct()
    {
        $items = new Collection();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ORGN_TITLE'
            ],
            [
                BusinessObjectItem::NAME => 'financial_manager_pidm',
                BusinessObjectItem::BUSINESS_NAME => 'Financial Manager Id',
                BusinessObjectItem::COLUMN_NAME => ' '
            ],
            [
                BusinessObjectItem::NAME => 'predecessor',
                BusinessObjectItem::BUSINESS_NAME => 'Predecessor',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ORGN_PRED'
            ]
        ];

        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}
