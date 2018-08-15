<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];
	
	//Get children category 
	public function children()
	{
		return $this->hasMany(self::class, 'parent_id');
	}
}
