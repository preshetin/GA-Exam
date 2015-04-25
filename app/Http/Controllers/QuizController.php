<?php namespace App\Http\Controllers;


use App\Question;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuizController extends Controller {

	public function show($id) {

        $question = Question::find($id);

        $answers = $question->answers()->get();

        return view('quiz.show')->with([
            'question' => $question,
            'answers'  => $answers
        ]);
    }
}
