<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = ['description', 'topic_id'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public static function getByTopicAndQuestionNumber(Topic $topic, $questionNumber) {
        return Question::where('topic_id', '=', $topic->id)->get()[$questionNumber - 1];
    }

    public function nextQuestionLink(Topic $topic, $questionNumber) {

        $nextQuestionLink = [];

        if (count($topic->questions) != $questionNumber) {
            $nextQuestionLink['url']   = '/train/' . $topic->name . '/' . ++$questionNumber;
            $nextQuestionLink['text']  = 'Следующий вопрос';
            $nextQuestionLink['class'] = 'btn-default';
        } else {
            $nextQuestionLink['url']   = '/';
            $nextQuestionLink['text']  = 'Завершить';
            $nextQuestionLink['class'] = 'btn-primary';
        }

        return $nextQuestionLink;
    }

}
