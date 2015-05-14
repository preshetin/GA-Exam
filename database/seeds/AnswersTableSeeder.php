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

        App\Answer::create([
            'description' => 'nine',
            'is_correct'  => true,
            'question_id' => 3,
        ]);

        App\Answer::create([
            'description' => 'ninty nine',
            'is_correct'  => false,
            'question_id' => 3,
        ]);

        App\Answer::create([
            'description' => '23',
            'is_correct'  => false,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => '24',
            'is_correct'  => true,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => '25',
            'is_correct'  => false,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => 'Paul McCartney',
            'is_correct'  => false,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => 'George Harrison',
            'is_correct'  => false,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => 'Keith Richards',
            'is_correct'  => true,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => 'Ringo Starr',
            'is_correct'  => false,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => 'Big in Japan',
            'is_correct'  => false,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'I heard love is blind',
            'is_correct'  => false,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'Smells like teen spirit',
            'is_correct'  => true,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'Larry Page',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'Peter Thiel',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'Andrew Mason',
            'is_correct'  => true,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'Richard Branson',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'Tim Cook',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

    }

}