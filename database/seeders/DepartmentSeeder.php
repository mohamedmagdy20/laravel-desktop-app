<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name'=>'شئون ضباط'
            ],
            [
                'name'=>'ادارة محلية'
            ],
            [
                'name'=>'الرماية'
            ],
            [
                'name'=>'مكتب سكرتارية رئيس اركان المشاة'
            ],
            [
                'name'=>'مكتب المدير'
            ],
            [
                'name'=>'مكتب مساعد المدير'
            ],
            [
                'name'=>'النظم'
            ],
            [
                'name'=>'الافراد'
            ],
            [
                'name'=>'التخطيط'
            ],
            [
                'name'=>'التدريب و التاهيل'
            ],
            [
                'name'=>'العمليات'
            ],
            [
                'name'=>'الاشارة'
            ],
            [
                'name'=>'الامن'
            ],
        ];

        foreach($data as $d)
        {
            Department::createOrFirst($d);
        }
    }
}
