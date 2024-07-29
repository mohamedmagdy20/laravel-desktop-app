<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name'=>'لواء اح'
            ],
            [
                'name'=>'لواء'
            ],
            [
                'name'=>'عميد اح'
            ],
            [
                'name'=>'عميد'
            ],
            [
                'name'=>'عقيد اح'
            ],
            [
                'name'=>'عقيد'
            ],
            [
                'name'=>'مقدم اح'
            ],
            [
                'name'=>'مقدم'
            ],
            [
                'name'=>'رائد'
            ],
            [
                'name'=>'نقيب'
            ],
            [
                'name'=>'ملازم اول'
            ],

            [
                'name'=>'ملازم'
            ],
            [
                'name'=>'رائد شرف'
            ],
            [
                'name'=>'نقيب شرف'
            ],
            [
                'name'=>'ملازم اول شرف'
            ],
            [
                'name'=>'ملازم شرف'
            ],
            [
                'name'=>'مساعد أ',
                'type'=>2
            ],
            [
                'name'=>'مساعد',
                'type'=>2
            ],
            [
                'name'=>'رقيب أ',
                'type'=>2
            ],
            [
                'name'=>'رقيب',
                'type'=>2
            ],
            [
                'name'=>'عريف',
                'type'=>2
            ],
        ];

        foreach($data as $d)
        {
            Degree::createOrFirst($d);
        }
    }
}
