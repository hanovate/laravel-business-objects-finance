<?php

namespace Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts;

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
class ActivityRequest extends Request
{
    public $organizationCode;

    public function __construct()
    {
        parent::__construct();

        $items = $this->getFields();

        // Organization Code
        $organizationCode = new BusinessObjectItem('organizationCode','Organization Code', 'V_ORGN_IN');
        $items->push($organizationCode);

        $this->setFields($items);
    }

}