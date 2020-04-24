<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\RequestHistory;


final class RequestHistoryTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new RequestHistory();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new RequestHistory();
        $columnList = ['FZBCOAM_LOG_SEQUENCE_NUM','FZBCOAM_LOG_INITIATORID','FZBCOAM_LOG_SUBMISSION_DATE',
            'FZBCOAM_LOG_ACTIVITY_DATE','FZBCOAM_LOG_STATUS_CODE','FZBCOAM_LOG_PROCESSORID',
            'FZBCOAM_LOG_AIP','FZBCOAM_LOG_ACTION_CODE'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new RequestHistory();
        $businessNameList = ['id','Initiator Netid', 'Submission Date','Activity Date',
            'Approval Code','Approver Netid','Approver In Process','Request Code'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new RequestHistory();
        $this->assertInstanceOf(RequestHistory::class, $request);
    }
}
