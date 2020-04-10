<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\Activity;

final class ActivityTest extends TestCase
{
    public function testIsInterface()
    {
        $request = new Activity();
        $this->assertInstanceOf(BusinessObjectInterface::class, $request);
    }
    public function testColumnsAreAccurateTest()
    {
        $request = new Activity();
        $columnList = ['FTVACTV_ACTV_CODE'
            ,'FTVACTV_ACTV_TITLE'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Activity();
        $businessNameList = ['Code'
            ,'Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }
    public function testIsInherited()
    {
        $request = new Activity();
        $this->assertInstanceOf(Request::class, $request);
    }
}
