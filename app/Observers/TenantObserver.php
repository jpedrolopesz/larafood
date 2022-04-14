<?php

namespace App\Observers;

use App\Models\Tenant;
use Illuminate\Support\Str;

class TenantObserver
{
    /**
     * Handle the tenant "creating" event.
     *
     * @param \App\Models\Tenant $tenant
     * @return void
     */
    public function creating(Tenant $tenant)
    {
        $tenant->uuid = Str::uuid();
        $tenant->url = Str::kebab($tenant->name);
    }

    /**
     * Handle the tenant "updateing" event.
     *
     * @param \App\Models\Tenant $tenant
     * @return void
     */
    public function updateing(Tenant $tenant)
    {
        $this->url = Str::kebab($tenant->name);

    }

}
