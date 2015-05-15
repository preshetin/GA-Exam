<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {

	protected $fillable = ['user_id', 'question_id', 'is_correct'];

}
