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
            ,'FZBCOAM_INDEX_TITLE'
            ,'FZBCOAM_REQUEST_COMMENTS'
            ,'FZBCOAM_SEQUENCE_NUM'
            ,'FZBCOAM_STATUS_COMMENTS'
            ,'FZBCOAM_SUBMISSION_DATE'
            ,'FZBCOAM_ACTV'
            ,'FZBCOAM_FUND'
            ,'FZBCOAM_ORGN'
            ,'FZBCOAM_PROG'
            ,' '];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new IndexRequest();
        $businessNameList = ['id'
            ,'Initiator Netid'
            ,'Business Reason'
            ,'Submission Date'
            ,'Activity Date'
            ,'Approval Status Comments'
            ,'Approver Netid'
            ,'Title'
            ,'Organization'
            ,'Fund'
            ,'Program'
            , 'Activity'
            , 'Designated Approver'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new IndexRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
