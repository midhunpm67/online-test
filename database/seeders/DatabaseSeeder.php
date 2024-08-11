<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Designation;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::insert(
            [
                [
                    'name' => 'HR',
                    'slug' => 'hr',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PHP',
                    'slug' => 'php',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Accounts',
                    'slug' => 'accounts',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Application Development',
                    'slug' => 'application_development',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Sales And Marketing',
                    'slug' => 'sales_and_marketing',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );

        Designation::insert(
            [
                [
                    'name' => 'HR Manager',
                    'slug' => 'sales_and_marketing',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Software Developer',
                    'slug' => 'software_developer',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Marketing Manager',
                    'slug' => 'marketing_manager',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Mobile Application Dev',
                    'slug' => 'mobile_application_dev',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );

        User::insert(
            [
                [
                    'name' => 'John Doe',
                    'fk_department' => Department::where('slug', 'sales_and_marketing')->first()->id,
                    'fk_designation' => Designation::where('slug', 'marketing_manager')->first()->id,
                    'phone_number' => '1234567890',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Tommy Mark',
                    'fk_department' => Department::where('slug', 'application_development')->first()->id,
                    'fk_designation' => Designation::where('slug', 'mobile_application_dev')->first()->id,
                    'phone_number' => '1122334455',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Micheal',
                    'fk_department' => Department::where('slug', 'php')->first()->id,
                    'fk_designation' => Designation::where('slug', 'software_developer')->first()->id,
                    'phone_number' => '1234567890',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Tommy Mark',
                    'fk_department' => Department::where('slug', 'accounts')->first()->id,
                    'fk_designation' => Designation::where('slug', 'marketing_manager')->first()->id,
                    'phone_number' => '1122334455',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
