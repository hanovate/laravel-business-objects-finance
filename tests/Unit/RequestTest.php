<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\Request;


final class RequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new Request();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new Request();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Request();
        $businessNameList = ['Id','Initiator Netid', 'Title','Business Reason'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new Request();
        $this->assertInstanceOf(Request::class, $request);
    }
}
