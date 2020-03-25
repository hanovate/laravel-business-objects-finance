<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\ProgramRequest;

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
        $columnList = ['FZBCOAM_ACTIVITY_DATE'
            ,'FZBCOAM_FUND_PRED'
            ,'FZBCOAM_FUND_TITLE'
            ,'FZBCOAM_INITIATORID'
            ,'FZBCOAM_PROCESSORID'
            ,'FZBCOAM_PROG_ENDOWFUND'
            ,'FZBCOAM_PROG_ENDOWSPEND'
            ,'FZBCOAM_REQUEST_COMMENTS'
            ,'FZBCOAM_SEQUENCE_NUM'
            ,'FZBCOAM_STATUS_COMMENTS'
            ,'FZBCOAM_SUBMISSION_DATE'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new ProgramRequest();
        $businessNameList = ['Activity Date'
            ,'Approval Status Comments'
            ,'Approver Netid'
            ,'Business Reason'
            ,'Endowment Fund'
            ,'Endowment Type'
            ,'Initiator Netid'
            ,'Predecessor'
            ,'Submission Date'
            ,'Title'
            ,'id'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new ProgramRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
