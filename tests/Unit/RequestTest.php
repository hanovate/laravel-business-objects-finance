<?php


namespace Unmit\BusinessObjects\Finance\Tests\Unit;

use Unmit\BusinessObjects\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\RequestPackage;


final class RequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new Request();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new RequestPackage();
        $columnList = ['V_REQUEST_ID','V_INIT_ID','V_TITLE','V_ORGN','V_REC_COMM','V_PRED','V_FND_TYPE',
            'V_FINMAN','V_DATAENTRY','V_ENDOW','V_FUND','V_PROG','V_ACTV'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new RequestPackage();
        $businessNameList = ['Id','Initiator Netid', 'Title','Organization Code', 'Business Reason',
            'Predecessor', 'Fund Type', 'Financial Manager', 'Is Data Entry', 'Endowed',
            'Fund', 'Program', 'Activity'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
//    public function testNamesAreAccurateTest()
//    {
//        $request = new RequestPackage();
//        $namesList = ['id','initiatorId', 'title','organizationCode', 'businessReason',
//            'predecessor', 'fundType', 'financialManager', 'isDataEntry', 'endowed',
//            'fund', 'program', 'activity'];
//        $this->assertEqualsCanonicalizing($namesList,$request->getNames());
//    }
    public function testIsInherited()
    {
        $request = new RequestPackage();
        $this->assertInstanceOf(Request::class, $request);
    }
}
