<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Unmit\ldk\BusinessObjectsbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class FundRequest extends Request
{
    public $predecessor;
    public $type;
    public $title;
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
                BusinessObjectItem::NAME => 'type',
                BusinessObjectItem::BUSINESS_NAME => 'Fund Type',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_FUND_TYPE'
            ],
            [
                BusinessObjectItem::NAME => 'isDataEntry',
                BusinessObjectItem::BUSINESS_NAME => 'Is Data Entry',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_FUND_DATAENTRY'
            ],
        ];
        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}