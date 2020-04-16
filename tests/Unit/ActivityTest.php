<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\Business\Finance\Banner\Activity;

final class ActivityTest extends TestCase
{
    public function testColumnsAreAccurateTest()
    {
        $request = new Activity();
        $columnList = ['ftvactv_actv_code'
            ,'ftvactv_title'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Activity();
        $businessNameList = ['Code'
            ,'Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }

}
