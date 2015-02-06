<?php

/*
post controller class						/?path=post/show&postId=999
*/
require_once(MODEL_DIR . 'Post.php');
require_once(MODEL_DIR . 'PostMapper.php');
//require_once "../Model/Post.php";
//require_once "../Model/PostMapper.php";

class PostController {
	private $mapper;
	public function __construct ()
	{
		$this->mapper = new PostMapper();
		$this->mapper->setAdapter(new PostArrayAdapter());

	}
	public function showAction(Request $request)
	{
		/*
		$id = $request->get('postId', null);
		if (is_null($id)){
			die ('404:Post not found');			
		}
		return "DSome". "$id";
	*/

		$data = array(
			'id' => 1,
			'title'=>'Happy New Year',
			'content' => 'ho-hoh-oh',
			'created' => '12/31/2014 13:00:00',
			'author' => 2
		);
		//var_dump(PostMapper::d2o($data));
		var_dump($this->mapper->getPostById($request->get('id')));
	}


}