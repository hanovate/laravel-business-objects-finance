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
                BusinessObjectItem::COLUMN_NAME => 'SEQUENCE_NUM'
            ],[
                BusinessObjectItem::NAME => 'netid',
                BusinessObjectItem::BUSINESS_NAME => 'Initiator Netid',
                BusinessObjectItem::COLUMN_NAME => 'INITIATORID'
            ],[
                BusinessObjectItem::NAME => 'business_reason',
                BusinessObjectItem::BUSINESS_NAME => 'Business Reason',
                BusinessObjectItem::COLUMN_NAME => 'REQUEST_COMMENTS'
            ],[
                BusinessObjectItem::NAME => 'submission_date',
                BusinessObjectItem::BUSINESS_NAME => 'Submission Date',
                BusinessObjectItem::COLUMN_NAME => 'SUBMISSION_DATE'
            ],[
                BusinessObjectItem::NAME => 'activity_date',
                BusinessObjectItem::BUSINESS_NAME => 'Activity Date',
                BusinessObjectItem::COLUMN_NAME => 'ACTIVITY_DATE'
            ],[
                BusinessObjectItem::NAME => 'status_comments',
                BusinessObjectItem::BUSINESS_NAME => 'Approval Status Comments',
                BusinessObjectItem::COLUMN_NAME => 'STATUS_COMMENTS'
            ],[
                BusinessObjectItem::NAME => 'processor_id',
                BusinessObjectItem::BUSINESS_NAME => 'Approver Netid',
                BusinessObjectItem::COLUMN_NAME => 'PROCESSORID'
            ],[
                BusinessObjectItem::NAME => 'approver_in_process',
                BusinessObjectItem::BUSINESS_NAME => 'Approver In Process',
                BusinessObjectItem::COLUMN_NAME => 'AIP'
            ]
        ];

        $this->pushElements($items,$elems, 'FZBCOAM');

        $this->setFields($items);
    }

}