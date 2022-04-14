<?php

use App\Models\{ User, Tenant};

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();

        $tenant->users()->create([
            'name' => 'Joao Pedro Lopes Zamonelo',
            'email'=> 'jplopeszamonelo@hotmail.com',
            'password' =>bcrypt('joao1998'),
        ]);
    }
}
