<?php


namespace Unmit\BusinessObjects\Finance\Tests\Unit;

use Unmit\BusinessObjects\Finance\Tests\TestCase;
use Unmit\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Finance\Banner\ChartOfAccounts\OrganizationCode;


final class OrganizationCodeTest extends TestCase
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
        $organizationCode = new OrganizationCode();
        $this->assertInstanceOf(BusinessObjectInterface::class, $organizationCode);
    }
    public function testColumnsAreAccurate()
    {
        $organizationCode = new OrganizationCode();
        $columnList = ['p_fzxxxcode','p_fzxxxdesc'];
        $this->assertEqualsCanonicalizing($columnList,$organizationCode->getColumns());
    }
    public function testBusinessNamesAreAccurate()
    {
        $organizationCode = new OrganizationCode();
        $businessNameList = ['code','description'];
        $this->assertEqualsCanonicalizing($businessNameList,$organizationCode->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $organizationCode = new OrganizationCode();
        $json = '{"0":{
                        "business-name":"description",
                        "column":"p_fzxxxdesc",
                        "name":"description"},
                "1":{
                        "business-name":"code",
                        "column":"p_fzxxxcode",
                        "name":"code"}}';
        $this->assertJsonStringEqualsJsonString($json,$organizationCode->toJson());
    }
    public function testArrayIsAccurate()
    {
        $organizationCode = new OrganizationCode();
        $array = [
                    ["business-name" => "description",
                    "column" => "p_fzxxxdesc",
                    "name" => "description"],
                    [
                    "business-name" => "code",
                    "column" => "p_fzxxxcode",
                    "name" => "code"]
                ];
        $this->assertEqualsCanonicalizing($array,$organizationCode->toArray());
    }

    public function testGetNames()
    {
        $organizationCode = new OrganizationCode();
        $item = $organizationCode->getByColumn('p_fzxxxdesc');
        $this->assertInstanceOf(BusinessObjectItem::class, $item);
        $this->assertEquals('description', $item->getBusinessName());
        $item = $organizationCode->getByBusinessName('description');
        $this->assertEquals('p_fzxxxdesc', $item->getColumn());
    }

}
