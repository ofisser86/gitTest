<?php
/*
*
*  Index Controller
*
*/

namespace Controller;


class Index extends \Model\Controller
{
	public function indexAction(\Model\Request $request)
	{
  		//var_dump($request->get('path'), $request->get('id'));
  		//return "This is index action from index controller";
	}
}