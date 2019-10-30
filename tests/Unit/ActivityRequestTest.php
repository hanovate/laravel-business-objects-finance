<?php


namespace Unmit\BusinessObjects\Finance\Tests\Unit;

use Unmit\BusinessObjects\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\ActivityRequest;

final class ActivityRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new ActivityRequest();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new ActivityRequest();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM','V_ORGN'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new ActivityRequest();
        $businessNameList = ['Id','Initiator Netid', 'Title', 'Business Reason','Organization Code'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new ActivityRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
