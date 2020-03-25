<?php

namespace Unmit\BusinessObjects\Business\Finance\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Unmit\BusinessObjects\Business\Finance\BusinessObjectsFinanceServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BusinessObjectsFinanceServiceProvider::class
        ];
    }
    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();

        // Your code here
    }

}
