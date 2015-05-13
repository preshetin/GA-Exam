<?php namespace App\Http\Controllers;


use App\Question;
use App\Answer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class QuizController extends Controller {

	public function show($id) {

        $question = Question::find($id);

        $answers = $question->answers()->get();

        return view('quiz.show')->with([
            'question' => $question,
            'answers'  => $answers
        ]);
    }

    public function reply($questionId) {

        $chosenAnswerId = Request::get('chosenAnswerId');

        $replyResult = Answer::findOrFail($chosenAnswerId)->is_correct;

        // save/update user answer to this question to 'replies' table

        $answers = Question::find($questionId)->answers();

        $correctAnswerId = $answers->where('is_correct','=', true)->first()->id;

        return response()->json([
            'correctAnswerId' => $correctAnswerId,
            'chosenAnswerId' => $chosenAnswerId,
            'replyResult'=> $replyResult,
            'answers'    => $answers->get()
        ]);

    }
}
