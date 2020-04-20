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

        parent::__construct();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ORGN_TITLE'
            ],
            [
                BusinessObjectItem::NAME => 'designated_approver_pidm',
                BusinessObjectItem::BUSINESS_NAME => 'Designated Approver',
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
