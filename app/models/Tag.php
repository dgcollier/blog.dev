<?php  

class Tag extends BaseModel
{
	protected $table = 'tags';

	/**
	 * Relationships
	 *
	 */
	public function postTag()
	{
	    return $this->belongsToMany('PostTag');
	}

	public static $rules = array(
	    'name'      => 'required|max:16'
	);
}
