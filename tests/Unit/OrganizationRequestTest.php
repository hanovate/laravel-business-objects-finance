<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\OrganizationRequest;

final class OrganizationRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new OrganizationRequest();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new OrganizationRequest();
        $columnList = ['FZBCOAM_ACTIVITY_DATE'
            ,'FZBCOAM_ORGN_PRED'
            ,'FZBCOAM_ORGN_TITLE'
            ,'FZBCOAM_INITIATORID'
            ,'FZBCOAM_PROCESSORID'
            ,'FZBCOAM_REQUEST_COMMENTS'
            ,'FZBCOAM_SEQUENCE_NUM'
            ,'FZBCOAM_STATUS_COMMENTS'
            ,'FZBCOAM_SUBMISSION_DATE'
            ,' '];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new OrganizationRequest();
        $businessNameList = ['Activity Date'
            ,'Approval Status Comments'
            ,'Approver Netid'
            ,'Business Reason'
            ,'Initiator Netid'
            ,'Predecessor'
            ,'Submission Date'
            ,'Title'
            ,'id'
            ,'Designated Approver'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new OrganizationRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
