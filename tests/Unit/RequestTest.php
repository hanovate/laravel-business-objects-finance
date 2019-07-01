<?php


namespace Unmit\BusinessObjects\Finance\Test\Unit;

use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\Request;
use PHPUnit\Framework\TestCase as BaseTestCase;


final class RequestTest extends BaseTestCase
{
    private $request;
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
        assertInstanceOf(BusinessObjectInterface::class, $request);
        $this->request = $request;
    }
    public function fieldsAreAccurateTest()
    {
        $items = $this->request->getFields();
        $columnList = ['szxxx_sequence_no','szxxx_title','szxxx_org','szxxx_reason'];
//        $businessNameList = ['initiator-id','title','organization-code','business-reason'];
        assertEquals($columnList,$items->getColumns());
//        assertEquals($businessNameList,$items->getBusinessNames());

//        $this->assertTrue(true);
    }
}
