<?php

namespace Database\Seeders;

use App\Models\Event;
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
            'name' => 'Tommaso',
            'surname' => 'Paoli',
            'email' => 'admin@root',
            'password' => Hash::make('asdasdasd'),
            'type' => 'admin'
        ]);

        User::factory(10)->create();
        Event::factory(10)->create();
    }
}
