<?php  

class PostTag extends BaseModel
{
	protected $table = 'post_tag';

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
	    return $this->belongsTo('Tag');
    }

}

?>