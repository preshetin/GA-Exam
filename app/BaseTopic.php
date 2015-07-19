<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseTopic extends Model {

	protected $fillable = ['name', 'title', 'description', 'image', 'is_published'];

    public function topics() {
        return $this->hasMany('App\Topic');
    }

    // Working?
    public function scopePublished($query) {
        return $query->where('is_published', '=', true);
    }

}
