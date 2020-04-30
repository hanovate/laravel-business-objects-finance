<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Program;

final class ProgramTest extends TestCase
{
    public function testColumnsAreAccurateTest()
    {
        $request = new Program();
        $columnList = ['program'
            ,'program_desc'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Program();
        $businessNameList = ['Id'
            ,'Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }

}
