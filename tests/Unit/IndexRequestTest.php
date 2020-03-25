<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\IndexRequest;

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
        $columnList = ['FZBCOAM_ACTIVITY_DATE'
            ,'FZBCOAM_INITIATORID'
            ,'FZBCOAM_PROCESSORID'
            ,'FZBCOAM_REQUEST_COMMENTS'
            ,'FZBCOAM_SEQUENCE_NUM'
            ,'FZBCOAM_STATUS_COMMENTS'
            ,'FZBCOAM_SUBMISSION_DATE'
            ,'V_ACTV'
            ,'V_FINMAN'
            ,'V_FUND'
            ,'V_ORGN'
            ,'V_PROG'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new IndexRequest();
        $businessNameList = ['Activity'
            ,'Activity Date'
            ,'Approval Status Comments'
            ,'Approver Netid'
            ,'Business Reason'
            ,'Financial Manager'
            ,'Fund'
            ,'Initiator Netid'
            ,'Organization Code'
            ,'Program'
            ,'Submission Date'
            ,'id'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new IndexRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
