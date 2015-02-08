<?
/*
*
*  Author Model - setters & getters for vars
*
*/

namespace Model;

class Author
{
	private $id;
	private $name;
	private $birthday;

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

    // name
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	// birthday
	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
	}

	public function getBirthday()
	{
		return $this->$birthday;
	}




}