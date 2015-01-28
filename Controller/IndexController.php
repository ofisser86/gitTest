<?php

/*
index controller class
*/

class IndexController
{
	public function indexAction(Request $request)
	{
  		var_dump($request->get('path'), $request->get('id'));
		echo "<pre>";
		echo $_SERVER[HTTP_ACCEPT_CHARSET];
		echo "<pre>";
		return "This is index action";

	}
}