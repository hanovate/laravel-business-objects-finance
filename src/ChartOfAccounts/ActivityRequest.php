<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Unmit\ldk\BusinessObjectsbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class ActivityRequest extends Request
{
    public $organizationCode;
    public $title;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'organization_code',
                BusinessObjectItem::BUSINESS_NAME => 'Organization Code',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACTV_ORGN'
            ],[
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACTV_TITLE'
            ],
            [
                BusinessObjectItem::NAME => 'designated_approver_id',
                BusinessObjectItem::BUSINESS_NAME => 'Designated Approver',
                BusinessObjectItem::COLUMN_NAME => ' '
            ]
        ];
        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}