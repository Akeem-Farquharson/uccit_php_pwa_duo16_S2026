<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('courses')->truncate();

        Course::insert([
            [
                'code' => 'ITT107',
                'name' => 'Computer Information Essentials',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT208',
                'name' => 'Internet Authoring I',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communication & Networks I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT210',
                'name' => 'Database Management Systems',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT307',
                'name' => 'Internet Authoring II',
                'credits' => 3,
                'pre_reqs' => 'ITT208',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT116',
                'name' => 'Computer Essentials & Troubleshooting I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT310',
                'name' => 'Systems Analysis & Design',
                'credits' => 3,
                'pre_reqs' => 'ITT210',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT408',
                'name' => 'Information Assurance & Security',
                'credits' => 3,
                'pre_reqs' => 'ITT208 & ITT210',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT403',
                'name' => 'Data Communication & Networks II',
                'credits' => 3,
                'pre_reqs' => 'ITT201',
                'description' => '...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
