<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;
        return [
            'title' => $this->faker->words(rand(3, 6), true),
            'description' => rand(0, 1) ? $this->faker->sentence : null,
            'order' => $order++,
            'user_id'=>User::all()->random()->id,
            'status_id' => Status::all()->random()->id,
        ];
    }
}


