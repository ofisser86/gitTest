<?php

/*
index controller class
*/

class IndexController
{	public function indexAction(Request $request)
	{
  		var_dump($request->get('path'), $request->get('id'));
  		return "This is index action";	}}