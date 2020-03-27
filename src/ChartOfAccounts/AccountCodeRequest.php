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
class AccountCodeRequest extends Request
{
    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'predecessor',
                BusinessObjectItem::BUSINESS_NAME => 'Predecessor',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACCT_PRED'
            ],
            [
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACCT_TITLE'
            ],[
                BusinessObjectItem::NAME => 'account',
                BusinessObjectItem::BUSINESS_NAME => 'Account',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACCT'
            ],[
                BusinessObjectItem::NAME => 'type',
                BusinessObjectItem::BUSINESS_NAME => 'Type',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACCT_TYPE'
            ],[
                BusinessObjectItem::NAME => 'is_data_entry',
                BusinessObjectItem::BUSINESS_NAME => 'Is Data Entry',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_ACCT_DATAENTRY'
            ]
        ];

        $this->pushElements($items,$elems);
        $this->setFields($items);
    }
}
