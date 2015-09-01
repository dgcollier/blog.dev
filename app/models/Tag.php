<?php  

class Tag extends BaseModel
{
	protected $table = 'tags';

	/**
	 * Relationships
	 *
	 */
	public function posts()
    {
        return $this->belongsToMany('Post')->withTimestamps();
    }

	public static $rules = array(
	    'name'      => 'required|max:16'
	);
}
