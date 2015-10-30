<?php

class Role extends \Eloquent {
	protected $table = 'roles';

	/**
	 * Relationships
	 *
	 */
	public function users()
	{
	    return $this->hasMany('User');
	}
}