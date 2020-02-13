<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\Banner\ChartOfAccounts\AccountCodeRequest;

final class AccountCodeRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new Request();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new AccountCodeRequest();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_REC_COMM','V_PRED','V_TYPE','V_DATAENTRY'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new AccountCodeRequest();
        $businessNameList = ['Id','Initiator Netid', 'Title','Business Reason','Predecessor', 'Type', 'Is Data Entry'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new AccountCodeRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
