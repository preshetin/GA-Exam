<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $fillable = ['name', 'title', 'description'];

    public function questions() {
        return $this->hasMany('App\Question');
    }

}
