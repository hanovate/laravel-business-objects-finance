<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Program
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class Program extends AbstractBusinessObject
{
    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::NAME => 'id',
                BusinessObjectItem::BUSINESS_NAME => 'Id',
                BusinessObjectItem::COLUMN_NAME => 'program'
            ],[
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'program_desc'
            ]
        ];

        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}
