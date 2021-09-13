<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Location;
use App\Models\Type;
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
        Type::create(['name' => 'Matrimonio']);
        Type::create(['name' => 'Cena']);
        Type::create(['name' => 'Pranzo']);
        Type::create(['name' => 'Battesimo']);
        Type::create(['name' => 'Coffè break']);

        Location::create(['name' => 'Castel Ivano', 'slug' => 'Ivano']);
        Location::create(['name' => 'Castel Pietra', 'slug' => 'Pietra']);
        Location::create(['name' => 'Prime Rose', 'slug' => 'Rose']);
        Location::create(['name' => 'Prime Rose Sotto', 'slug' => 'Sotto']);
        Location::create(['name' => 'Maso Torresella', 'slug' => 'Torresella']);

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
