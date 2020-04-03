<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Illuminate\Support\Collection;
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
class Approver extends AbstractBusinessObject
{

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::BUSINESS_NAME => 'id',
                BusinessObjectItem::COLUMN_NAME => 'APPR_PIDM'
            ],[
                BusinessObjectItem::NAME => 'email',
                BusinessObjectItem::BUSINESS_NAME => 'Approver Email',
                BusinessObjectItem::COLUMN_NAME => 'APPR_EMAIL'
            ],[
                BusinessObjectItem::NAME => 'name',
                BusinessObjectItem::BUSINESS_NAME => 'Approver Full Name',
                BusinessObjectItem::COLUMN_NAME => 'APPR_NAME'
            ]
        ];

        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}
