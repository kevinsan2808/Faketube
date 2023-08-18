<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ChannelFactory extends Factory
{
    protected $model = Channel::class;

    public function definition()
    {
        return [
            'ChannelName' => $this->faker->word,
            'Description' => $this->faker->sentence,
            'SubscribersCount' => $this->faker->numberBetween(1000, 100000),
            'URL' => $this->faker->url,
        ];
    }
}
