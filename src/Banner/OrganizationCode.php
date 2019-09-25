<?php

namespace Unmit\BusinessObjects\Finance\Banner;

use Illuminate\Support\Collection;
use Unmit\BusinessObjects\AbstractBusinessObject;
use Unmit\BusinessObjects\BusinessObjectItem;
/**
 * Class: OrganizationCode
 *
 * @see AbstractBusinessObject
 *
 * @version 0.1.0 RVE
 * @since 0.1.0
 */
class OrganizationCode extends AbstractBusinessObject
{
    public $code;
    public $title;

    public function __construct()
    {
        $items = new Collection();

        // Code
        $code = new BusinessObjectItem('code','code','ftvorgn_orgn_code');
        $items->push($code);

        // Title
        $title = new BusinessObjectItem('title','title','ftvorgn_title');
        $items->push($title);

        $this->setFields($items);

    }

}