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

        // id (Unique Identifier)
        $id = new BusinessObjectItem('id','Id','FZBCOAM_SEQUENCE_NUM');
        $items->push($id);

        // Initiator Id - netid
        $initiatorId = new BusinessObjectItem('netid','Initiator Netid','FZBCOAM_INITIATORID');
        $items->push($initiatorId);

        // Business Reason
        $businessReason = new BusinessObjectItem('business_reason', 'Business Reason', 'FZBCOAM_REQUEST_COMMENTS');
        $items->push($businessReason);

        // Submission Date
        $submissionDate = new BusinessObjectItem('submission_date', 'Submission Date', 'FZBCOAM_SUBMISSION_DATE');
        $items->push($submissionDate);

        $this->setFields($items);
    }

}