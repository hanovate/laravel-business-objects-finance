<?php


namespace Unmit\BusinessObjects\Finance\Tests\Unit;

use Unmit\BusinessObjects\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\IndexRequest;

final class IndexRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new IndexRequest();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new IndexRequest();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM','V_FUND','V_ACTV','V_PROG','V_FINMAN','V_ORGN'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new IndexRequest();
        $businessNameList = ['Id','Initiator Netid', 'Title','Business Reason','Program','Fund', 'Activity','Financial Manager','Organization Code'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new IndexRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
