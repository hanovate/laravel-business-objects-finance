<?php

namespace Unmit\BusinessObjects\Finance\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Unmit\BusinessObjects\BusinessObjectsServiceProvider;
use Unmit\BusinessObjects\Finance\BusinessObjectsFinanceServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BusinessObjectsServiceProvider::class,
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
