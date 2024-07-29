<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Officer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Officer::create([
            'name'=>'محمد مجدي محمد ابراهيم الدربي',
            'department_id'=>1,
            'degree_id'=>1,
            'job_name'=>'test',
           
        ]);
        // \App\Models\Officer::factory(10)->create();
        // $this->call([
        //     DegreeSeeder::class,
        //     DepartmentSeeder::class
        // ]);
    }
}
