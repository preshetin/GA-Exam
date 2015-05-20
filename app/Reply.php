<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {

    // SECURITY! Needs refactor: should not be fillable user_id
	protected $fillable = ['user_id', 'question_id', 'is_correct'];

}
