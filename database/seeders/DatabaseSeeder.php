<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Operation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create(['title' => 'Università']);
        Category::create(['title' => 'Casa']);

        Operation::factory(10)->create();
    }
}
