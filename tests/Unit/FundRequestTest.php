<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\FundRequest;


final class FundRequestTest extends TestCase
{

    public function testColumnsAreAccurateTest()
    {
        $request = new FundRequest();
        $columnList = ['FZBCOAM_SEQUENCE_NUM','FZBCOAM_INITIATORID','FZBCOAM_REQUEST_COMMENTS','FZBCOAM_SUBMISSION_DATE',
            'FZBCOAM_ACTIVITY_DATE','FZBCOAM_STATUS_COMMENTS','FZBCOAM_PROCESSORID','FZBCOAM_AIP','FZBCOAM_FUND_TYPE',
            'FZBCOAM_FUND_PRED','FZBCOAM_FUND_TITLE'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new FundRequest();
        $businessNameList = ['id','Initiator Netid', 'Business Reason','Submission Date','Activity Date',
            'Approval Status Comments','Approver Netid','Approver In Process','Title','Predecessor','Fund Type'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new FundRequest();
        $this->assertInstanceOf(FundRequest::class, $request);
    }
}
