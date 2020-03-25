<?php

namespace Unmit\BusinessObjects\Business\Finance\Banner;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Fund
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class Fund extends AbstractBusinessObject
{
    public $code;
    public $title;

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::NAME => 'id',
                BusinessObjectItem::BUSINESS_NAME => 'code',
                BusinessObjectItem::COLUMN_NAME => 'fund_code'
            ],[
                BusinessObjectItem::BUSINESS_NAME => 'title',
                BusinessObjectItem::COLUMN_NAME => 'title'
            ]
        ];

        $this->pushElements($items,$elems,'ftvfund');

        $this->setFields($items);
    }

}
