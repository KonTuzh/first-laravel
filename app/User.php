<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
		
	public function articles()
	{
		return $this->hasMany(Article::class);
	}
		
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
		
	public function hasRole(string $role)
	{
		return $this->roles->contains('key', $role);
	}

	public function hasPermission(string $permission)
	{
		foreach ($this->roles as $role) {
			if ($role->permissions->contains('key', $permission)) {
				return true;
			}
		}

		return false;
	}

	public function isAdmin()
	{
		return $this->roles->contains('key', 'admin');
	}
}
