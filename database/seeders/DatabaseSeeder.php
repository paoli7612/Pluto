<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\Operation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tommaso Paoli',
            'email' => 'paoli7612@gmail.com',
            'password' => Hash::make('qwerty')
        ]);
        Account::create([
            'name' => 'Gruppo Mediolanum',
            'user_id' => 1,
            'count' => 4000
        ]);


        Category::create(['title' => 'Università']);
        Category::create(['title' => 'Casa']);

        Operation::factory(10)->create();
    }
}
