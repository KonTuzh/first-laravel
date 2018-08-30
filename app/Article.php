<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = ['title', 'slug', 'description_short', 'description', 'thumbnail', 'thumbnail_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'viewed', 'created_by', 'modified_by'];
	
	//Polymorphic relationship with categories
	public function categories()
	{
		return $this->morphToMany('App\Category', 'categoryable');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}


