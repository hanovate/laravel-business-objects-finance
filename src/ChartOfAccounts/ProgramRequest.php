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
class ProgramRequest extends Request
{
    public $predecessor;
    public $isDataEntry;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();
        $elems = [
            [
                BusinessObjectItem::NAME => 'title',
                BusinessObjectItem::BUSINESS_NAME => 'Title',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_FUND_TITLE'
            ],
            [
                BusinessObjectItem::NAME => 'predecessor',
                BusinessObjectItem::BUSINESS_NAME => 'Predecessor',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_FUND_PRED'
            ],
            [
                BusinessObjectItem::NAME => 'endowment_fund',
                BusinessObjectItem::BUSINESS_NAME => 'Endowment Fund',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_PROG_ENDOWFUND'
            ],
            [
                BusinessObjectItem::NAME => 'endowment_type',
                BusinessObjectItem::BUSINESS_NAME => 'Endowment Type',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_PROG_ENDOWSPEND'
            ]
        ];
        $this->pushElements($items,$elems);
        $this->setFields($items);
    }

}