<?php
/*
*
*  Author Mapper - setter & getter for adapter + hydrate me bitch
*
*/

namespace Model\Author;
use \Model\Registry;

class Mapper
{
	/*private $adapter;

	public function setAdapter($a)
	{
		$this->adapter = $a;
	}

	public function getAdapter()
	{
		return $this->adapter;
	}
    */

	// search in raw data using adapter and convert to object
	public function getAuthorById($id)
	{
		//$data = $this->adapter->getById($id);
		$data = Registry::get('author.adapter')->getById($id);
		return (is_null($data) ? null : $this->d2o($data));
	}

	// array  to  object
	public static function d2o(array $data = array())
	{
		$obj = new \Model\Author($data['id']);
		$obj->setName(isset($data['name']) ? $data['name'] : null);
		$obj->setBirthday(isset($data['birthday']) ? $data['birthday'] : null);

		return $obj;
	}}