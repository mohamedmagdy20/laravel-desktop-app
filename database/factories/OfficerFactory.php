<?php

namespace Database\Factories;

use App\Models\Officer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Officer>
 */
class OfficerFactory extends Factory
{
    protected $model = Officer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'department_id'=>1,
            'degree_id'=>1,
            'job_name'=>$this->faker->sentence(5),
            'date_upgrade'=>Carbon::now(),
            'religion'=>'Muslim',
            'city'=>'Alex',
            'phone'=>$this->faker->phoneNumber(),
            'weapon_name'=>'مشاة',
            'status'=>'exist'
        ];
    }
}
