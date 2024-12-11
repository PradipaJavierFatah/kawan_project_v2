<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $articles = [
            [
                'photo' => 'artikel/Workout.jpg',
                'title' => 'The Benefits of Regular Exercise',
                'category' => 'Health',
                'content' => 'Engaging in regular physical activity improves mental health, boosts immunity, and reduces the risk of chronic diseases.',
            ],
            [
                'photo' => 'artikel/Healty.jpg',
                'title' => 'Healthy Eating Habits for a Better Life',
                'category' => 'Health',
                'content' => 'A balanced diet with plenty of fruits and vegetables is essential for maintaining overall health and well-being.',
            ],
            [
                'photo' => 'artikel/Mental.jpg',
                'title' => 'Understanding Mental Health',
                'category' => 'Health',
                'content' => 'Raising awareness about mental health can help reduce stigma and encourage people to seek support.',
            ],
        ];

        foreach ($articles as &$article) {
            // Define source and destination paths
            $sourcePath = public_path('asset/' . $article['photo']);
            $destinationPath = 'public/' . $article['photo'];

            // Ensure the storage directory exists and copy the file
            if (file_exists($sourcePath)) {
                Storage::put($destinationPath, file_get_contents($sourcePath));
            }

            // Update the photo path to point to the storage location
            $article['photo'] = $article['photo'];
            $article['created_at'] = now();
            $article['updated_at'] = now();
        }

        // Insert the articles into the database
        DB::table('articles')->insert($articles);
    }
}
