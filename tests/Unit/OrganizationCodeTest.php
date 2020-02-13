<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Business\Finance\Banner\OrganizationCode;


final class OrganizationCodeTest extends TestCase
{
    public function testIsInterface()
    {
        $organizationCode = new OrganizationCode();
        $this->assertInstanceOf(BusinessObjectInterface::class, $organizationCode);
    }
    public function testColumnsAreAccurate()
    {
        $organizationCode = new OrganizationCode();
        $columnList = ['ftvorgn_orgn_code','ftvorgn_title'];
        $this->assertEqualsCanonicalizing($columnList,$organizationCode->getColumnNames());
    }
    public function testBusinessNamesAreAccurate()
    {
        $organizationCode = new OrganizationCode();
        $businessNameList = ['code','title'];
        $this->assertEqualsCanonicalizing($businessNameList,$organizationCode->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $organizationCode = new OrganizationCode();
        $json = '{"0":{
                        "business-name":"code",
                        "column-name":"ftvorgn_orgn_code",
                        "name":"code"},
                "1":{
                        "business-name":"title",
                        "column-name":"ftvorgn_title",
                        "name":"title"}}';
        $this->assertJsonStringEqualsJsonString($json,$organizationCode->toJson());
    }
    public function testArrayIsAccurate()
    {
        $organizationCode = new OrganizationCode();
        $array = [
                    ["business-name" => "code",
                    "column-name" => "ftvorgn_orgn_code",
                    "name" => "code"],
                    [
                    "business-name" => "title",
                    "column-name" => "ftvorgn_title",
                    "name" => "title"]
                ];
        $this->assertEqualsCanonicalizing($array,$organizationCode->toArray());
    }

    public function testGetNames()
    {
        $organizationCode = new OrganizationCode();
        $item = $organizationCode->getByColumnName('ftvorgn_title');
        $this->assertInstanceOf(BusinessObjectItem::class, $item);
        $this->assertEquals('title', $item->getBusinessName());
        $item = $organizationCode->getByBusinessName('title');
        $this->assertEquals('ftvorgn_title', $item->getColumnName());
    }

}
