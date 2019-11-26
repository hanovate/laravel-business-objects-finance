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
    public $action;


    public function __construct()
    {
        $items = new Collection();

        // id (Unique Identifier)
        $id = new BusinessObjectItem('id','Id','V_REQUEST_ID');
        $items->push($id);

        // Initiator Id - netid
        $initiatorId = new BusinessObjectItem('initiatorId','Initiator Netid','V_NAME_IN');
        $items->push($initiatorId);

        // Title
        $title = new BusinessObjectItem('title', 'Title', 'V_TITLE_IN');
        $items->push($title);

        // Business Reason
        $businessReason = new BusinessObjectItem('businessReason', 'Business Reason', 'V_REC_COMM_IN');
        $items->push($businessReason);

        // Action
        $action = new BusinessObjectItem('action', 'Action', 'V_ACTN_IN');
        $items->push($action);

        $this->setFields($items);
    }

}