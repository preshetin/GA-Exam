<?php namespace App\Http\Controllers;

use App\Topic;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        // Needs to be refactored!
        $topics = \DB::table('topics')
            ->select('topics.id as topic_id',
                     'topics.name as topic_name',
                     'topics.title as title',
                     \DB::raw('count(questions.id) as total_questions,
                               count(case when replies.is_correct = 1 then is_correct end) as correct_replies,
                               count(case when replies.is_correct = 0 then is_correct end) as incorrect_replies'
                     )
            )
            ->leftJoin('questions', 'topics.id', '=', 'questions.topic_id')
            ->leftJoin('replies', 'replies.question_id', '=', 'questions.id')
            ->whereNull('user_id')
            ->orWhere('user_id', \Auth::user()->id)
            ->groupBy('topics.id')
            ->get();

		return view('home')->with([
            'topics' => $topics,
        ]);

	}

}
