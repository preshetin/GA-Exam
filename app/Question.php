<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = ['description', 'topic_id'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

}
