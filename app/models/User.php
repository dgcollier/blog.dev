<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Relationships
	 *
	 */
	public function posts()
	{
	    return $this->hasMany('Post');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Password hashing
	 *
	 */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	/**
	 * Username standard as lowercase for comparison
	 *
	 */
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

}
