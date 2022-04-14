<?php

Route::prefix('admin')
    ->middleware('auth')
    ->group(function (){


        /**
         * Role x User
         */
        Route::get('users/{id}/role/{idRole}/detach', 'Admin\ACL\RoleUserController@detachRoleUser')->name('users.role.detach');
        Route::post('users/{id}/roles', 'Admin\ACL\RoleUserController@attachRolesUser')->name('users.roles.attach');
        Route::any('users/{id}/roles/create', 'Admin\ACL\RoleUserController@rolesAvailable')->name('users.roles.available');
        Route::get('users/{id}/roles', 'Admin\ACL\RoleUserController@roles')->name('users.roles');
        Route::get('roles/{id}/users', 'Admin\ACL\RoleUserController@users')->name('roles.users');


        /**
         * Permission x Role
         */
        Route::get('roles/{id}/permission/{idPermission}/detach', 'Admin\ACL\PermissionRoleController@detachPermissionRole')->name('roles.permission.detach');
        Route::post('roles/{id}/permissions', 'Admin\ACL\PermissionRoleController@attachPermissionsRole')->name('roles.permissions.attach');
        Route::any('roles/{id}/permissions/create', 'Admin\ACL\PermissionRoleController@permissionsAvailable')->name('roles.permissions.available');
        Route::get('roles/{id}/permissions', 'Admin\ACL\PermissionRoleController@permissions')->name('roles.permissions');
        Route::get('permissions/{id}/role', 'Admin\ACL\PermissionRoleController@roles')->name('permissions.roles');



        /**
         * Routes Profiles Roles
         */

        Route::any('roles/search', 'Admin\ACL\RoleController@search')->name('roles.search');
        Route::resource('roles', 'Admin\ACL\RoleController');

        /**
         * Routes Tenants
        */
        Route::any('tenants/search', 'Admin\TenantController@search')->name('tenants.search');
        Route::resource('tenants', 'Admin\TenantController');


        /**
         * Routes Tables
         */
        Route::get('tables/qrcode/{identify}', 'Admin\TableController@qrcode')->name('tables.qrcode');
        Route::any('tables/search', 'Admin\TableController@search')->name('tables.search');
        Route::resource('tables', 'Admin\TableController');

        /**
         * Product x Category
         */

        Route::get('products/{id}/category/{idCategory}/detach', 'Admin\CategoryProductController@detachCategoryProduct')->name('products.category.detach');
        Route::post('products/{id}/categories', 'Admin\CategoryProductController@attachCategoriesProduct')->name('products.categories.attach');
        Route::any('products/{id}/categories/create', 'Admin\CategoryProductController@categoriesAvailable')->name('products.categories.available');
        Route::get('products/{id}/categories', 'Admin\CategoryProductController@categories')->name('products.categories');
        Route::get('categories/{id}/products', 'Admin\CategoryProductController@products')->name('categories.products');

        /**
         * Routes Products
         */
        Route::any('products/search', 'Admin\ProductController@search')->name('products.search');
        Route::resource('products', 'Admin\ProductController');


        /**
         * Routes Categories
         */
        Route::any('categories/search', 'Admin\CategoryController@search')->name('categories.search');
        Route::resource('categories', 'Admin\CategoryController');

        /**
         * Route Users
         */
        Route::any('users/search', 'Admin\UserController@search')->name('users.search');
        Route::resource('users', 'Admin\UserController');

        /**
         * Plan x Profile
         */
        Route::get('plans/{id}/profile/{idProfile}/detach', 'Admin\ACL\PlanProfileController@detachProfilePlan')->name('plans.profile.detach');
        Route::post('plans/{id}/profiles', 'Admin\ACL\PlanProfileController@attachProfilesPlan')->name('plans.profiles.attach');
        Route::any('plans/{id}/profiles/create', 'Admin\ACL\PlanProfileController@profilesAvailable')->name('plans.profiles.available');
        Route::get('plans/{id}/profiles', 'Admin\ACL\PlanProfileController@profiles')->name('plans.profiles');
        Route::get('profiles/{id}/plans', 'Admin\ACL\PlanProfileController@plans')->name('profiles.plans');




        /**
         * Permissions x Profiles
         */

        Route::get('profiles/{id}/permissions/{idPermission}/detach', 'Admin\ACL\PermissionProfileController@detachPermissionProfile')->name('profiles.permission.detach');
        Route::post('profiles/{id}/permissions', 'Admin\ACL\PermissionProfileController@attachPermissionsProfile')->name('profiles.permissions.attach');
        Route::any('profiles/{id}/permissions/create', 'Admin\ACL\PermissionProfileController@permissionsAvailable')->name('profiles.permissions.available');
        Route::get('profiles/{id}/permissions', 'Admin\ACL\PermissionProfileController@permissions')->name('profiles.permissions');
        Route::get('permissions/{id}/profile', 'Admin\ACL\PermissionProfileController@profiles')->name('permissions.profiles');



        /**
         * Routes Permissions
         */
        Route::any('permissions/search', 'Admin\ACL\PermissionController@search')->name('permissions.search');
        Route::resource('permissions', 'Admin\ACL\PermissionController');

        /**
         * Routes Profiles
         */
        Route::any('profiles/search', 'Admin\ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'Admin\ACL\ProfileController');

        /**
         * Routes Details Plans
         */
        Route::get('plans/{url}/details/create', 'Admin\DetailPlanController@create')->name('details.plan.create');

        Route::delete('plans/{url}/details/{idDetail}', 'Admin\DetailPlanController@destroy')->name('details.plan.destroy');
        Route::get('plans/{url}/details/{idDetail}', 'Admin\DetailPlanController@show')->name('details.plan.show');
        Route::put('plans/{url}/details/{idDetail}', 'Admin\DetailPlanController@update')->name('details.plan.update');
        Route::get('plans/{url}/details/{idDetail}/edit', 'Admin\DetailPlanController@edit')->name('details.plan.edit');
        Route::post('plans/{url}/details', 'Admin\DetailPlanController@store')->name('details.plan.store');
        Route::get('plans/{url}/details', 'Admin\DetailPlanController@index')->name('details.plan.index');



        /**
         * Routes Plans
         */


        Route::get('plans/create', 'Admin\PlanController@create')->name('plans.create');
        Route::put('plans/{url}','Admin\PlanController@update')->name('plans.update');
        Route::get('plans/{url}/edit','Admin\PlanController@edit')->name('plans.edit');
        Route::any('plans/search', 'Admin\PlanController@search')->name('plans.search');
        Route::delete('plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');
        Route::get('plans/{url}', 'Admin\PlanController@show')->name('plans.show');
        Route::post('plans/store', 'Admin\PlanController@store')->name('plans.store');
        Route::get('plans', 'Admin\PlanController@index')->name('plans.index');


        /**
         * Home Dashboard
         */

        Route::get('/', 'Admin\DashboardController@home')->name('admin.index');


    });

Route::get('/plan/{url}', 'Site\SiteController@plan')->name('plan.subscription');
Route::get('/', 'Site\SiteController@index')->name('site.home');


Auth::routes();


