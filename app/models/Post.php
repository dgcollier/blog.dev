<?php  

class Post extends BaseModel
{
	protected $table = 'posts';

	/**
	 * Relationships
	 *
	 */
	public function user()
	{
	    return $this->belongsTo('User');
	}

	public function tags()
    {
	    return $this->belongsToMany('Tag')->withTimestamps();
    }


	/**
	 * Rules
	 *
	 */
	public static $rules = array(
	    'title'      => 'required|max:64',
	    'sub_title'	 => 'required|max:104',
	    'body'       => 'required|max:10000'
	);
}

?>