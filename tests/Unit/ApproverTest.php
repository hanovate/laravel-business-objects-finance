<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Approver;


final class ApproverTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new Approver();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new Approver();
        $columnList = ['APPR_PIDM','APPR_EMAIL','APPR_NAME'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Approver();
        $businessNameList = ['id', 'Approver Full Name','Approver Email'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
}
