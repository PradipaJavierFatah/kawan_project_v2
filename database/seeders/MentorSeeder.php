<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('mentors')->insert([
        [
            'name' => 'Syarifah Pangestu',
            'picture' => '/asset/payment/mentor1.jpg', // Assume images are stored in `public/images/mentors`
            'age' => 28,
            'description' => 'Expert in personal development with 10 years of experience.',
        ],
        [
            'name' => ' Desca Nurhazrati',
            'picture' => '/asset/payment/mentor2.jpg',
            'age' => 30,
            'description' => 'Specializes in financial mentoring and career growth.',
        ],
        [
            'name' => 'Miriam Nustantomo',
            'picture' => '/asset/payment/mentor3.jpg',
            'age' => 25,
            'description' => 'Career strategy, job search tactics, resume building, and interview preparation.',
        ],
        [
            'name' => 'Abdul Yuliasti',
            'picture' => '/asset/payment/mentor4.jpg',
            'age' => 29,
            'description' => 'Budgeting, investing, retirement planning, and financial goal setting.',
        ],
        [
            'name' => 'Timothy Tambunan',
            'picture' => '/asset/payment/mentor5.jpg',
            'age' => 31,
            'description' => 'Starting a business, scaling a startup, and managing finances in entrepreneurial ventures.',
        ],
    ]);
}

}
