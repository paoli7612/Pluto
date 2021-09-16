<?php

namespace Database\Seeders;

use App\Models\Event;
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

        Location::create(['name' => 'Prime Rose A', 'picture' => 'pr-A']);
        Location::create(['name' => 'Prime Rose B', 'picture' => 'pr-B']);
        Location::create(['name' => 'Castel Ivano', 'picture' => 'c-ivano.png']);
        Location::create(['name' => 'Castel Pietra', 'picture' => 'c-pietra.png']);
        Location::create(['name' => 'Castel Pergine', 'picture' => 'c-pergine.png']);
        Location::create(['name' => 'Maso Torresella', 'picture' => 'm-torresella.png']);
        Location::create(['name' => 'Cantine Rotari', 'picture' => 'ca-rotari.png']);

        Event::factory(60)->create();
    }
}
