<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuestionsTableSeeder extends Seeder {

    public function run() {

        DB::table('questions')->truncate();

        // id: 1
        App\Question::create([
            'description' => '2 x 2 = ?',
            'topic_id' => 1
        ]);

        // id: 2
        App\Question::create([
            'description' => 'Who is the founder of Facebook?',
            'topic_id' => 3
        ]);

        // id: 3
        App\Question::create([
            'description' => '3 x 3 = ?',
            'topic_id' => 1
        ]);

        // id: 4
        App\Question::create([
            'description' => '4 x 6 = ?',
            'topic_id' => 1
        ]);

        // id: 5
        App\Question::create([
            'description' => 'Who is NOT a Beatles team member?',
            'topic_id' => 2
        ]);

        // id: 6
        App\Question::create([
            'description' => 'Specify the song that was created by Nirvana?',
            'topic_id' => 2
        ]);

        // id: 7
        App\Question::create([
            'description' => 'Who is the founder of Groupon?',
            'topic_id' => 3
        ]);

    }

}