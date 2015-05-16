<?php namespace App\Http\Controllers;


use App\Topic;
use App\Question;
use App\Answer;
use App\Reply;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class QuizController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'train']);
    }

    public function train() {

        $topics = Topic::all();

        return view('quiz.train', compact('topics'));
    }

    public function show($topicName, $questionNumber) {

        $topic = Topic::where('name', '=', $topicName)->first();

        // may needs to be refactored, may check sql queries
        $question = Question::getByTopicAndQuestionNumber($topic, $questionNumber);

        $answers = $question->answers()->get();

        return view('quiz.show')->with([
            'questionNumber'   => $questionNumber,
            'topicTitle'       => $topic->title,
            'question'         => $question,
            'answers'          => $answers,
            'nextQuestionLink' => '/train/' . $topicName . '/' . ++$questionNumber
        ]);
    }

    public function reply() {

        $questionId     = Request::get('questionId');
        $chosenAnswerId = Request::get('chosenAnswerId');

        $replyResult = Answer::findOrFail($chosenAnswerId)->is_correct;

        \Auth::user()->replies()->updateOrCreate(['question_id' => $questionId], ['is_correct' => $replyResult]);

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
