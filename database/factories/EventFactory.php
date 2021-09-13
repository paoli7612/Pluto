<?php

namespace Database\Factories;

use App\Models\Event;
use Carbon\Carbon;
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
            'type' => 'Matrimonio',
            'date' => $this->faker->dateTimeThisMonth()->format('Y-m-d'),
            'arrival' => $this->faker->dateTimeThisMonth()->format('H:i:s')
        ];
    }
}
