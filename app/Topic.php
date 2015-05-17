<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $fillable = ['name', 'title', 'description'];

    public function questions() {
        return $this->hasMany('App\Question');
    }

    public function userCorrectRepliesPercentage() {
        return round( (count($this->userCorrectReplies) * 100) / count($this->questions) );
    }

    public function userIncorrectRepliesPercentage() {
        return round( (count($this->userIncorrectReplies) * 100) / count($this->questions) );
    }

    protected function userReplies() {
        return $this->hasManyThrough('App\Reply', 'App\Question')->where('user_id', '=', \Auth::user()->id);
    }

    protected function userCorrectReplies() {
        return $this->userReplies()->where('is_correct', '=', '1');
    }

    protected function userIncorrectReplies() {
        return $this->userReplies()->where('is_correct', '=', '0');
    }

}
