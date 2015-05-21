<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {

	protected $fillable = ['question_id', 'is_correct'];

}
