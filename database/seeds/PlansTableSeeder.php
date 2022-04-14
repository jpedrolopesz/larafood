<?php

use App\Models\{ Plan, Tenant};
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'=> 'PlanUnlimited',
            'url' => 'planunlimited',
            'price'=> '997.99',
            'description'=> 'Unlimited plan with exclusive support'
        ]);
    }
}
