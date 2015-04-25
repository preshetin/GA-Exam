<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuestionsTableSeeder extends Seeder {

    public function run() {

        DB::table('questions')->truncate();

        App\Question::create([
            'description' => '2x2 = ?'
        ]);


        App\Question::create([
            'description' => 'Who is the founder of Facebook?'
        ]);

    }

}