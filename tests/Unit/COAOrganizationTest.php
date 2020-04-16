<?php


namespace Unmit\BusinessObjects\Business\Finance\Tests\Unit;

use Unmit\BusinessObjects\Business\Finance\Tests\TestCase;
use Unmit\ldk\BusinessObjects\BusinessObjectInterface;
use Unmit\BusinessObjects\BusinessObjectItem;
use Unmit\BusinessObjects\Business\Finance\ChartOfAccounts\Organization;


final class COAOrganizationTest extends TestCase
{
    public function testIsInterface()
    {
        $organization = new Organization();
        $this->assertInstanceOf(BusinessObjectInterface::class, $organization);
    }
    public function testColumnsAreAccurate()
    {
        $organization = new OrganizationCode();
        $columnList = ['ftvorgn_orgn_code','ftvorgn_title'];
        $this->assertEqualsCanonicalizing($columnList,$organization->getColumnNames());
    }
    public function testBusinessNamesAreAccurate()
    {
        $organization = new OrganizationCode();
        $businessNameList = ['code','title','financial_manager','financial_manager_pidm'];
        $this->assertEqualsCanonicalizing($businessNameList,$organization->getBusinessNames());
    }
    public function testJsonIsAccurate()
    {
        $organization = new OrganizationCode();
        $json = '{"0":{
                        "business-name":"code",
                        "column-name":"organization_code",
                        "name":"id"},
                "1":{
                        "business-name":"Title",
                        "column-name":"organization_desc",
                        "name":"title"},
                "2":{
                        "business-name":"Financial Manager",
                        "column-name":"financial_manager_name",
                        "name":"financial_manager"},
                "3":{
                        "business-name":"Financial Manager Id",
                        "column-name":"financial_manager_uid",
                        "name":"financial_manager_pidm"}}';
        $this->assertJsonStringEqualsJsonString($json,$organization->toJson());
    }
    public function testArrayIsAccurate()
    {
        $organization = new OrganizationCode();
        $array = [
                    ["business-name" => "Id",
                    "column-name" => "organization_code",
                    "name" => "id"],
                    [
                    "business-name" => "Title",
                    "column-name" => "organization_desc",
                    "name" => "title"],
                    [
                    "business-name" => "Financial Manager",
                    "column-name" => "financial_manager_name",
                    "name" => "financial_manager"],
                    [
                    "business-name" => "Financial Manager Id",
                    "column-name" => "financial_manager_uid",
                    "name" => "financial_manager_pidm"]
                ];
        $this->assertEqualsCanonicalizing($array,$organization->toArray());
    }

}
