<?php


use App\Models\{ Plan, Tenant};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $plan = Plan::first();

        $plan->tenants()->create([
           'name' => 'Doccob',
           'url' => 'doccob',
           'email' => 'contato@doccob.com'
        ]);
    }
}
