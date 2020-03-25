<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Banner\Fund;
use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;


final class FundRequestTest extends TestCase
{
    public function testIsInterface()
    {
        $fund = new Fund();
        $this->assertInstanceOf(BusinessObjectInterface::class, $fund);
    }
    public function testColumnsAreAccurate()
    {
        $fund = new Fund();
        $columnList = ['ftvfund_fund_code','ftvfund_title'];
        $this->assertEqualsCanonicalizing($columnList,$fund->getColumnNames());
    }
    public function testBusinessNamesAreAccurate()
    {
        $fund = new Fund();
        $businessNameList = ['code','title'];
        $this->assertEqualsCanonicalizing($businessNameList,$fund->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $fund = new Fund();
        $json = '{"0":{"business-name":"code","column-name":"ftvfund_fund_code","name":"id"},"1":{"business-name":"title","column-name":"ftvfund_title","name":"title"}}';
        $this->assertJsonStringEqualsJsonString($json,$fund->toJson());
    }
    public function testArrayIsAccurate()
    {
        $fund = new Fund();
        $array = [
            [
                "business-name" => "code",
                "column-name" => "ftvfund_fund_code",
                "name" => "id"
            ],
            [
                "business-name" => "title",
                "column-name" => "ftvfund_title",
                "name" => "title"
            ]
        ];
        $this->assertEqualsCanonicalizing($array,$fund->toArray());
    }

    public function testGetNames()
    {
        $fund = new Fund();
        $item = $fund->getByColumnName('ftvfund_title');
        $this->assertEquals('title', $item->getBusinessName());
        $item = $fund->getByBusinessName('title');
        $this->assertEquals('ftvfund_title', $item->getColumnName());
    }
}
