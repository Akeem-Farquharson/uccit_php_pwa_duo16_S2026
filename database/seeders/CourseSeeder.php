<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing courses (safe, only affects this table)
        DB::table('courses')->truncate();

        Course::insert([
            [
                'code' => 'ITT101',
                'name' => 'Sample Course 1',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => 'Placeholder description for course 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT102',
                'name' => 'Sample Course 2',
                'credits' => 3,
                'pre_reqs' => 'ITT101',
                'description' => 'Placeholder description for course 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT103',
                'name' => 'Sample Course 3',
                'credits' => 3,
                'pre_reqs' => 'ITT102',
                'description' => 'Placeholder description for course 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT104',
                'name' => 'Sample Course 4',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => 'Placeholder description for course 4.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT105',
                'name' => 'Sample Course 5',
                'credits' => 3,
                'pre_reqs' => 'ITT104',
                'description' => 'Placeholder description for course 5.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT106',
                'name' => 'Sample Course 6',
                'credits' => 3,
                'pre_reqs' => 'ITT105',
                'description' => 'Placeholder description for course 6.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT107',
                'name' => 'Sample Course 7',
                'credits' => 3,
                'pre_reqs' => 'ITT106',
                'description' => 'Placeholder description for course 7.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT108',
                'name' => 'Sample Course 8',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'Placeholder description for course 8.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT109',
                'name' => 'Sample Course 9',
                'credits' => 3,
                'pre_reqs' => 'ITT108',
                'description' => 'Placeholder description for course 9.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT110',
                'name' => 'Sample Course 10',
                'credits' => 3,
                'pre_reqs' => 'ITT109',
                'description' => 'Placeholder description for course 10.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}