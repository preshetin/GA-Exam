<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TopicsTableSeeder extends Seeder {

    public function run() {

        DB::table('topics')->truncate();

        // id: 1
        App\Topic::create([
            'name'=>'math',
            'title'=>'Mathematics',
            'description'=>'Some basic mathematics questions'
        ]);

        // id: 2
        App\Topic::create([
            'name'=>'music',
            'title'=>'Music & Artists',
            'description'=>'Check yourself how you know musics bands and songs'
        ]);

        // id: 3
        App\Topic::create([
            'name'=>'startups',
            'title'=>'Startups',
            'description'=>'Questions about Silicon Valley startup companies and personalities'
        ]);
    }
}