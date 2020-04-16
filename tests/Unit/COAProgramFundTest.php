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
        $organization = new ProgramFund();
        $this->assertInstanceOf(BusinessObjectInterface::class, $organization);
    }
    public function testColumnsAreAccurate()
    {
        $organization = new ProgramFund();
        $columnList = ['fund_level_3'];
        $this->assertEqualsCanonicalizing($columnList,$organization->getColumnNames());
    }
    public function testBusinessNamesAreAccurate()
    {
        $organization = new ProgramFund();
        $businessNameList = ['Title'];
        $this->assertEqualsCanonicalizing($businessNameList,$organization->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $organization = new ProgramFund();
        $json = '{"0":{
                         "business-name":"Title",
                        "column-name":"fund_level_3",
                        "name":"id"}}';
        $this->assertJsonStringEqualsJsonString($json,$organization->toJson());
    }
    public function testArrayIsAccurate()
    {
        $organization = new ProgramFund();
        $array = [
                    [
                    "business-name" => "Title",
                    "column-name" => "fund_level_3",
                    "name" => "id"]
                ];
        $this->assertEqualsCanonicalizing($array,$organization->toArray());
    }

}
