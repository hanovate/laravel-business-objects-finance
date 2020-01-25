<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

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
class Request extends AbstractBusinessObject
{
    public $id;
    public $netid;
    public $businessReason;
    public $submissionDate;

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::BUSINESS_NAME => 'id',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_SEQUENCE_NUM'
            ],[
                BusinessObjectItem::NAME => 'netid',
                BusinessObjectItem::BUSINESS_NAME => 'Initiator Netid',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_INITIATORID'
            ],[
                BusinessObjectItem::NAME => 'business_reason',
                BusinessObjectItem::BUSINESS_NAME => 'Business Reason',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_REQUEST_COMMENTS'
            ],[
                BusinessObjectItem::NAME => 'submission_date',
                BusinessObjectItem::BUSINESS_NAME => 'Submission Date',
                BusinessObjectItem::COLUMN_NAME => 'FZBCOAM_SUBMISSION_DATE'
            ],
        ];

        $this->pushElements($items,$elems);

        $this->setFields($items);
    }

}