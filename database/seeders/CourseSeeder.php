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
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'This course introduces fundamental programming concepts, focusing on logic development, structured design, testing, and basic programming principles. It serves as a foundation for advanced programming courses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT107',
                'name' => 'Computer Information Essentials',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => 'This course introduces fundamental IT concepts, including computing principles, software applications, and productivity tools. Students gain practical experience using Microsoft Office applications such as Word, PowerPoint, and Excel, while developing a general understanding of IT.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT116',
                'name' => 'Computer Essentials & Troubleshooting I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'This foundational course introduces PC support, covering system building, operating systems, networking, and troubleshooting. Students will develop practical skills in system configuration, security, and maintenance. It also prepares students for the CompTIA A+ Core 1 certification.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT200',
                'name' => 'Object-Oriented Programming Using C++',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => 'This course aims to broaden the student’s knowledge of concepts and features of an object-oriented programming language. Students will be required to use these concepts to design solutions for real world problems.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communications & Networks I',
                'credits' => 3,
                'pre_reqs' => 'ITT107',
                'description' => 'This is designed to give students an understanding of networks and how they can be used in organizations to increase efficiency. It will also introduce IP addressing and subnets and briefly look at security issues in networking.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT208',
                'name' => 'Internet Authoring I',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => 'This course introduces the tools and techniques for designing, developing, and publishing websites. Students will gain hands-on experience with internet authoring tools and learn to create and deploy web pages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT210',
                'name' => 'Database Management Systems',
                'credits' => 3,
                'pre_reqs' => 'ITT103',
                'description' => 'This course covers the design, implementation, and management of databases, focusing on SQL, data modeling, normalization, and database architecture. Students learn to create efficient databases and optimize queries.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT211',
                'name' => 'Computer Data Analysis',
                'credits' => 3,
                'pre_reqs' => 'None',
                'description' => 'This course introduces data analysis using spreadsheets and Python. Students will learn to organize, analyze, and interpret data using statistical methods such as regression, hypothesis testing, and clustering, developing critical thinking for data-driven decision-making.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT307',
                'name' => 'Internet Authoring II',
                'credits' => 3,
                'pre_reqs' => 'ITT208',
                'description' => 'This course builds on Internet Authoring I, expanding into networking technologies, web/UI design, and client-server architecture, while introducing client- and server-side programming, e-commerce, web security, three-tier architecture, web frameworks, mobile web, and multimedia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ITT408',
                'name' => 'Information Assurance & Security',
                'credits' => 3,
                'pre_reqs' => 'ITT208 & ITT210',
                'description' => 'This course introduces principles of information security, including risk management, data protection, and system security. Students learn to identify threats, implement safeguards, and understand security policies and best practices.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
