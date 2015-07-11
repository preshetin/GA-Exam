<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = ['description', 'topic_id', 'question_type'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public static function getByTopicAndQuestionNumber(Topic $topic, $questionNumber)
    {
        return Question::where('topic_id', '=', $topic->id)->orderBy('created_at', 'DESC')->get()[$questionNumber - 1];
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

    /**
     * Returns an array of all possible question types.
     *
     * @return array
     */
    public static function possibleTypes()
    {
        $type = \DB::select(\DB::raw('SHOW COLUMNS FROM questions WHERE Field = "question_type"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $values = [];
        foreach(explode(',', $matches[1]) as $value){
            $values[] = trim($value, "'");
        }
        return $values;
    }

}
