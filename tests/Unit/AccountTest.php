<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\Business\Finance\Banner\Account;

final class AccountTest extends TestCase
{
    public function testColumnsAreAccurateTest()
    {
        $request = new Account();
        $columnList = ['ftvacct_acct_code'
            ,'ftvacct_title'];
        $this->assertEqualsCanonicalizing($columnList,$request->getColumnNames());

    }
    public function testBusinessNamesAreAccurateTest()
    {
        $request = new Account();
        $businessNameList = ['Code'
            ,'Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$request->getBusinessNames());
    }

}
