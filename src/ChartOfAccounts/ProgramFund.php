<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: ProgramFund
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class ProgramFund extends AbstractBusinessObject
{

    public function __construct()
    {
        $items = new Collection();

        $elems = [[
                BusinessObjectItem::NAME => 'id',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'fund_level_3'
            ]
        ];

        $this->pushElements($items,$elems,'fzvfndp');

        $this->setFields($items);
    }

}
