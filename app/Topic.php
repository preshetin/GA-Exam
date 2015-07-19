<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $fillable = ['name', 'title', 'description', 'base_topic_id'];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function replies()
    {
        return $this->hasManyThrough('App\Reply', 'App\Question');
    }

    public function baseTopic()
    {
        return $this->belongsTo('App\BaseTopic');
    }

}
