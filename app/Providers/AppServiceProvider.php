<?php

namespace App\Providers;
use App\Repositories\Contracts\TenantRepositoryInterface;
use App\Repositories\TenantRepository;
use App\Models\{Category, Client, Plan, Product, Table, Tenant};
use App\Observers\{CategoryObserver, ClientObserver, PlanObserver, ProductObserver, TableObserver, TenantObserver};
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Plan::observe(PlanObserver::class);
        Tenant::observe(TenantObserver::class);
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        Table::observe(TableObserver::class);
        Client::observe(ClientObserver::class);


        /**
         * Custom If Statements
         */
        Blade::if('admin', function () {
            $user = auth()->user();

            return $user->isAdmin();
        });
    }
}
