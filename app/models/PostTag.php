<?php  

class PostTag extends BaseModel
{
	protected $table = 'post_tags';

	/**
	 * Relationships
	 *
	 */
	public function post()
	{
	    return $this->belongsTo('Post');
	}

	public function tag()
	{
	    return $this->belongsToMany('Tag');
	}
}

?>