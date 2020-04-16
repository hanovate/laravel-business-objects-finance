<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\ProgramFund;


final class COAProgramFundTest extends TestCase
{
    public function testIsInterface()
    {
        $programFund = new ProgramFund();
        $this->assertInstanceOf(BusinessObjectInterface::class, $programFund);
    }
    public function testColumnsAreAccurate()
    {
        $programFund = new ProgramFund();
        $columnList = ['fund_level_3'];
        $this->assertEqualsCanonicalizing($columnList,$programFund->getColumnNames());
    }
    public function testBusinessNamesAreAccurate()
    {
        $programFund = new ProgramFund();
        $businessNameList = ['Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$programFund->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $programFund = new ProgramFund();
        $json = '{"0":{
                         "business-name":"Title",
                        "column-name":"fund_level_3",
                        "name":"id"}}';
        $this->assertJsonStringEqualsJsonString($json,$programFund->toJson());
    }
    public function testArrayIsAccurate()
    {
        $programFund = new ProgramFund();
        $array = [
                    [
                    "business-name" => "Title",
                    "column-name" => "fund_level_3",
                    "name" => "id"]
                ];
        $this->assertEqualsCanonicalizing($array,$programFund->toArray());
    }

}
