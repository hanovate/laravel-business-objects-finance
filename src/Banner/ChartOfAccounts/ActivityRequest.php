<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

use Unmit\ldk\BusinessObjectsbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
/**
 * Class: Request
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class ActivityRequest extends Request
{
    public $organizationCode;
    public $title;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        // Organization Code
        $organizationCode = new BusinessObjectItem('organization_code','Organization Code', 'FZBCOAM_ACTV_ORGN');
        $items->push($organizationCode);

        // Title
        $title = new BusinessObjectItem('title', 'Title', 'FZBCOAM_ACTV_TITLE');
        $items->push($title);

        $this->setFields($items);
    }

}