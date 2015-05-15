<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = ['description', 'topic_id'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public static function getByTopicAndQuestionNumber(Topic $topic, $questionNumber) {
        return Question::where('topic_id', '=', $topic->id)->get()[$questionNumber - 1];
    }

}
