<?php  

class Post extends Eloquent
{
	protected $table = 'posts';

	public static $rules = array(
	    'title'      => 'required|max:64',
	    'sub_title'	 => 'required|max:104',
	    'author'	 => 'required|max:32',
	    'body'       => 'required|max:10000'
	);
}

?>