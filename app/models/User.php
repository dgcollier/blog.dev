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

	public static $rules = array(
	    'first_name'  		=> 'required|max:32|min:2',
	    'last_name'	  		=> 'required|max:32|min:2',
	    'username'    		=> 'required|max:32|min:6',
	    'password'	  		=> 'required|max:32|min:8'
	);

	public static $editRules = array(
	    'first_name'  		=> 'required|max:32',
	    'last_name'	  		=> 'required|max:32',
	    'username'    		=> 'required|max:32',
	    'password'	  		=> 'required|max:32',
	    'newPass'			=> 'max:32', 
	    'newPassConfirm'	=> 'max:32'
	);

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
