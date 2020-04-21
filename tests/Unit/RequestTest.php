<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Request;


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
        $columnList = ['FZBCOAM_SEQUENCE_NUM','FZBCOAM_INITIATORID','FZBCOAM_REQUEST_COMMENTS','FZBCOAM_SUBMISSION_DATE',
            'FZBCOAM_ACTIVITY_DATE','FZBCOAM_STATUS_COMMENTS','FZBCOAM_PROCESSORID','FZBCOAM_AIP'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Request();
        $businessNameList = ['id','Initiator Netid', 'Business Reason','Submission Date','Activity Date',
            'Approval Status Comments','Approver Netid','Approver In Process'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new Request();
        $this->assertInstanceOf(Request::class, $request);
    }
}
