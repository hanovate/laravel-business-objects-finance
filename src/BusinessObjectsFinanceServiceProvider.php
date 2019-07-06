<?php
namespace Unmit\BusinessObjects\Finance;

use Illuminate\Support\ServiceProvider;
use Unmit\BusinessObjects\BusinessObjectsServiceProvider;

class BusinessObjectsFinanceServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->app->register(BusinessObjectsServiceProvider::class);
    }
    public function register()
    {
    }

}