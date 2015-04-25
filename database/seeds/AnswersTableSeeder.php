<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AnswersTableSeeder extends Seeder {

    public function run() {

        DB::table('answers')->truncate();

        App\Answer::create([
            'description' => 'one',
            'is_correct'  => false,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => 'Bill Gates',
            'is_correct'  => false,
            'question_id' => 2,
        ]);

        App\Answer::create([
            'description' => 'John Lennon',
            'is_correct'  => false,
            'question_id' => 2,
        ]);

        App\Answer::create([
            'description' => 'four',
            'is_correct'  => true,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => 'five',
            'is_correct'  => false,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => 'Mark Zukerberg',
            'is_correct'  => true,
            'question_id' => 2,
        ]);

    }

}