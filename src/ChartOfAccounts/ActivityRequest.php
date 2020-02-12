<?php

namespace Unmit\BusinessObjects\Finance\ChartOfAccounts;

use Unmit\ldk\BusinessObjectsbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
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
        ];
        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}