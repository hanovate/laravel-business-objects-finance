<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\ProgramRequest;

final class ProgramRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new ProgramRequest();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new ProgramRequest();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM','V_PRED','V_DATAENTRY'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new ProgramRequest();
        $businessNameList = ['Id','Initiator Netid', 'Title','Business Reason','Predecessor','Is Data Entry'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new ProgramRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
