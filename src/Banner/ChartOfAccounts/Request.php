<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Illuminate\Support\Collection;
use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
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
    public $initiatorId;
    public $title;
    public $businessReason;


    public function __construct()
    {
        $items = new Collection();

        // Sequence Number (Unique Identifier)
        $sequenceId = new BusinessObjectItem('id','Id','V_REQUEST_ID');
        $items->push($sequenceId);

        // Initiator Id - netid
        $initiatorId = new BusinessObjectItem('initiatorId','Initiator Netid','V_INIT_ID');
        $items->push($initiatorId);

        // Title
        $title = new BusinessObjectItem('title', 'Title', 'V_TITLE');
        $items->push($title);


        // Business Reason
        $businessReason = new BusinessObjectItem('businessReason', 'Business Reason', 'V_REC_COMM');
        $items->push($businessReason);

        $this->setFields($items);
    }

}