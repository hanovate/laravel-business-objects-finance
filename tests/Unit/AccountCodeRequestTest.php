<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Request;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\AccountCodeRequest;

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
        $columnList = ['FZBCOAM_ACCT'
            ,'FZBCOAM_ACCT_DATAENTRY'
            ,'FZBCOAM_ACCT_PRED'
            ,'FZBCOAM_ACCT_TYPE'
            ,'FZBCOAM_ACTIVITY_DATE'
            ,'FZBCOAM_INITIATORID'
            ,'FZBCOAM_PROCESSORID'
            ,'FZBCOAM_REQUEST_COMMENTS'
            ,'FZBCOAM_SEQUENCE_NUM'
            ,'FZBCOAM_STATUS_COMMENTS'
            ,'FZBCOAM_SUBMISSION_DATE'
            ,'normal_balance'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new AccountCodeRequest();
        $businessNameList = ['Account'
            ,'Activity Date'
            ,'Approval Status Comments'
            ,'Approver Netid'
            ,'Business Reason'
            ,'Initiator Netid'
            ,'Is Data Entry'
            ,'Normal Balance'
            ,'Predecessor'
            ,'Submission Date'
            ,'Type'
            ,'id'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new AccountCodeRequest();
        $this->assertInstanceOf(Request::class, $request);
    }
}
