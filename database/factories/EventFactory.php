<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

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
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1),
            'speaker' => $this->faker->name(),
            'speaker_image' => 'https://xsgames.co/randomusers/assets/avatars/male/'.rand(1,50).'.jpg',
            'description' => $this->faker->text,
            'slides' => $this->faker->text,
            'event_date' => $this->faker->date(),
        ];
    }
}
