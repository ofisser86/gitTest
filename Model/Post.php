<?
/*
*
*  Post Model - setters & getters for vars + get author obj
*
*/

namespace Model;

class Post
{	private $id;
	private $title;
	private $created;
	private $content;
	private $author;

	public function __construct($id)
	{		$this->id = $id;	}

	public function getId()
	{		return $this->id;	}

    // title
	public function setTitle($title)
	{		$this->title = $title;	}

	public function getTitle()
	{
		return $this->title;
	}

	// content
	public function setContent($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	// author
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getAuthor()
	{
		if (!$this->author instanceof Author && is_numeric($this->author)) {			$mapper = new \Model\Author\Mapper();
			$adapter = new \Model\Author\Adapter\CArray();
			$mapper->setAdapter($adapter);
			$this->author = $mapper->getAuthorById($this->author);		}
		return $this->author;
	}

	// created
	public function setCreated($created)
	{
		$this->created = $created;
	}

	public function getCreated()
	{		return $this->created;	}



}