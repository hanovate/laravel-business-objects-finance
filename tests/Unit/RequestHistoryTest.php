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
        $columnList = ['LOG_SEQUENCE_NUM','LOG_INITIATORID','LOG_SUBMISSION_DATE',
            'LOG_ACTIVITY_DATE','LOG_STATUS_DESCRIPTION','LOG_PROCESSORID','LOG_AIP','LOG_ACTION_DESCRIPTION'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new RequestHistory();
        $businessNameList = ['id','Initiator Netid', 'Submission Date','Activity Date',
            'Approval Status','Approver Netid','Approver In Process','Request Type'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new RequestHistory();
        $this->assertInstanceOf(RequestHistory::class, $request);
    }
}
