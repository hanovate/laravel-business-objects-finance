<?php


namespace Unmit\BusinessObjects\Finance\Tests\Unit;

use Unmit\BusinessObjects\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;


final class RequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testIsInterface()
    {
        $request = new Request();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new Request();
        $columnList = ['szxxx_sequence_no','szxxx_title','szxxx_org','szxxx_reason'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumns());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Request();
        $businessNameList = ['initiator-id','title','organization-code','business-reason'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
}
