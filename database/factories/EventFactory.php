<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Location;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pax' => 45,
            'date' => $this->faker->date(),
            'location_id' => Location::all()->random()->id
        ];
    }
}
