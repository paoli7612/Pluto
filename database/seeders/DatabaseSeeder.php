<?php

namespace Database\Seeders;

use App\Models\Location;
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
            'slug' => 'tommaso-paoli'
        ]);

        Location::create(['name' => 'Prime Rose A']);
        Location::create(['name' => 'Prime Rose B']);
        Location::create(['name' => 'Castel Ivano']);
        Location::create(['name' => 'Castel Pietra']);
        Location::create(['name' => 'Castel Pergine']);
        Location::create(['name' => 'Maso Torresella']);
    }
}
