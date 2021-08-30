<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'name' => 'paoli7612',
            'password' => Hash::make('asdasdasd'),
            'email' => 'admin@root'
        ]);
        User::factory(10)->create();

        Category::create([
            'title' => 'Bollette',
        ]);
    }
}
