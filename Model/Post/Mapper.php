<?php
/*
*
*  Post Mapper - setter & getter for adapter + hydrate me bitch
*
*/

namespace Model\Post;
use \Model\Registry;

class Mapper
{
	/*private $adapter;

	public function setAdapter($a)
	{		$this->adapter = $a;	}*/

	/*public function getAdapter()
	{		return $this->adapter;	}*/

	public function getPostById($id)
	{		//$data = $this->adapter->getById($id);
		$data = Registry::get('post.adapter')->getById($id);
		return (is_null($data) ? null : $this->d2o($data));	}

	public static function d2o(array $data = array())
	{
		$obj = new \Model\Post($data['id']);

		$obj->setTitle(isset($data['title']) ? $data['title'] : null);
		$obj->setContent(isset($data['content']) ? $data['content'] : null);

		$date = \DateTime::createFromFormat('m/d/Y H:i:s', $data['created']);
		$obj->setCreated($date);

		$author = $data['author'];
		$obj->setAuthor($author);

		return $obj;
	}



}