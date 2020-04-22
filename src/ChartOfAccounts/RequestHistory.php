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
class RequestHistory extends AbstractBusinessObject
{

    public function __construct()
    {
        $items = new Collection();

        $elems = [
            [
                BusinessObjectItem::BUSINESS_NAME => 'id',
                BusinessObjectItem::COLUMN_NAME => 'LOG_SEQUENCE_NUM'
            ],[
                BusinessObjectItem::NAME => 'netid',
                BusinessObjectItem::BUSINESS_NAME => 'Initiator Netid',
                BusinessObjectItem::COLUMN_NAME => 'LOG_INITIATORID'
            ],[
                BusinessObjectItem::NAME => 'submission_date',
                BusinessObjectItem::BUSINESS_NAME => 'Submission Date',
                BusinessObjectItem::COLUMN_NAME => 'LOG_SUBMISSION_DATE'
            ],[
                BusinessObjectItem::NAME => 'activity_date',
                BusinessObjectItem::BUSINESS_NAME => 'Activity Date',
                BusinessObjectItem::COLUMN_NAME => 'LOG_ACTIVITY_DATE'
            ],[
                BusinessObjectItem::NAME => 'status',
                BusinessObjectItem::BUSINESS_NAME => 'Approval Status',
                BusinessObjectItem::COLUMN_NAME => 'LOG_STATUS_DESCRIPTION'
            ],[
                BusinessObjectItem::NAME => 'processor_id',
                BusinessObjectItem::BUSINESS_NAME => 'Approver Netid',
                BusinessObjectItem::COLUMN_NAME => 'LOG_PROCESSORID'
            ],[
                BusinessObjectItem::NAME => 'approver_in_process',
                BusinessObjectItem::BUSINESS_NAME => 'Approver In Process',
                BusinessObjectItem::COLUMN_NAME => 'LOG_AIP'
            ],[
                BusinessObjectItem::NAME => 'request_type',
                BusinessObjectItem::BUSINESS_NAME => 'Request Type',
                BusinessObjectItem::COLUMN_NAME => 'LOG_ACTION_DESCRIPTION'
            ]
        ];

        $this->pushElements($items,$elems );

        $this->setFields($items);
    }

}