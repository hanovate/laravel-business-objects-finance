<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\FundRequest;


final class FundRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new FundRequest();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new FundRequest();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM','V_PRED','V_TYPE', 'V_FINMAN','V_DATAENTRY'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new FundRequest();
        $businessNameList = ['Id','Initiator Netid', 'Title','Business Reason','Predecessor', 'Fund Type', 'Financial Manager', 'Is Data Entry'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new FundRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
