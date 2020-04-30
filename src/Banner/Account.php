<?php

namespace Unmit\BusinessObjects\Business\Finance\Banner;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: Account
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class Account extends AbstractBusinessObject
{
    public $code;
    public $title;

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::NAME => 'id',
                BusinessObjectItem::BUSINESS_NAME => 'Code',
                BusinessObjectItem::COLUMN_NAME => 'acct_code'
            ],[
                BusinessObjectItem::BUSINESS_NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'title'
            ]
        ];

        $this->pushElements($items,$elems,'ftvacct');

        $this->setFields($items);
    }

}
