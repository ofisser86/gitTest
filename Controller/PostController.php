<?php

/*
index controller class						/?path=post/show&postId=999
*/

class PostController {
	
	public function showAction(Request $request)
	{
		$id = $request->get('postId', null);
		if (!is_null($id)){
			die ('404:Post not found');			
		}
		
	}
	
	
}