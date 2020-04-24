<?php

namespace Unmit\BusinessObjects\Business\Finance\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\ldk\BusinessObjects\AbstractBusinessObject;
use Unmit\ldk\BusinessObjects\BusinessObjectItem;
/**
 * Class: BaseRequest
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
                BusinessObjectItem::COLUMN_NAME => 'SEQUENCE_NUM'
            ],[
                BusinessObjectItem::NAME => 'netid',
                BusinessObjectItem::BUSINESS_NAME => 'Initiator Netid',
                BusinessObjectItem::COLUMN_NAME => 'INITIATORID'
            ],[
                BusinessObjectItem::NAME => 'submission_date',
                BusinessObjectItem::BUSINESS_NAME => 'Submission Date',
                BusinessObjectItem::COLUMN_NAME => 'SUBMISSION_DATE'
            ],[
                BusinessObjectItem::NAME => 'activity_date',
                BusinessObjectItem::BUSINESS_NAME => 'Activity Date',
                BusinessObjectItem::COLUMN_NAME => 'ACTIVITY_DATE'
            ],[
                BusinessObjectItem::NAME => 'status_code',
                BusinessObjectItem::BUSINESS_NAME => 'Approval Code',
                BusinessObjectItem::COLUMN_NAME => 'STATUS_CODE'
            ],[
                BusinessObjectItem::NAME => 'processor_id',
                BusinessObjectItem::BUSINESS_NAME => 'Approver Netid',
                BusinessObjectItem::COLUMN_NAME => 'PROCESSORID'
            ],[
                BusinessObjectItem::NAME => 'approver_in_process',
                BusinessObjectItem::BUSINESS_NAME => 'Approver In Process',
                BusinessObjectItem::COLUMN_NAME => 'AIP'
            ],[
                BusinessObjectItem::NAME => 'request_code',
                BusinessObjectItem::BUSINESS_NAME => 'Request Code',
                BusinessObjectItem::COLUMN_NAME => 'ACTION_CODE'
            ]
        ];

        $this->pushElements($items,$elems,'FZBCOAM_LOG' );

        $this->setFields($items);
    }

}
