<?php
/*
*
*  Post Controller
*
*/

namespace Controller;
use Model\Registry;

// registerring mapper & adapter
Registry::set('post.mapper', new \Model\Post\Mapper());
Registry::set('post.adapter', new \Model\Post\Adapter\CArray());

// set data adapter
//Registry::get('post.mapper')->setAdapter(Registry::get('post.adapter'));

class Post extends \Model\Controller
{
	//private $mapper;
	public function __construct()
	{
		// correcponding mapper
		//$this->mapper = new \Model\Post\Mapper();
		// set data adapter
		//$postAdapter = new \Model\Post\Adapter\CArray();
		//$postAdapter = new \Model\Post\Adapter\CFile();
		//$postAdapter->setDataSet(FILES_DIR . 'PostData.txt');
		//$this->mapper->setAdapter($postAdapter);

	}

	public function showAction(\Model\Request $request)
	{
		$id = $request->get('postId', null);

        // check if ID is set formally
		if (is_null($id)) {
			die("404: post ID is not set or is empty");
		}

        // use method from mapper to search in data array
  		//$postById = $this->mapper->getPostById($id);
		try {
			$postById = Registry::get('post.mapper')->getPostById($id);

			// check if post with given ID exists
			//if (is_null($postById)) {
			//	die("404: post with ID = {$id} not found");
			//}

			// data out
			echo "<pre>";
			print_r($postById);
			print_r($postById->getAuthor());
		}catch (\Model\Post\Exception\NotFoundException $e)
		{
			var_dump("Post{$id} not found");
			throw $e;

		}catch(\Model\Author\Exception\NotFoundException $e)
		{
			var_dump("author for {$id} not found");
			// для того чтобы обнулить автора и кетч для автора больше не запускался,
			$postById->setAuthor(null);

		}

		$postById->getAuthor();
		$class = __CLASS__;
		return $this->render(__FUNCTION__,array_pop(explode('\\',$class), array('post'=>$postById, 'author'=>$postAuthor)));
        echo "</pre>";
  		// action/controller sign
		return "This is show action from post controller, ID = {$id}";
	}
}



/*
trash
  require_once(MODEL_DIR . 'Post.php');
require_once(MODEL_DIR . 'PostMapper.php');
require_once(MODEL_DIR . 'PostArrayAdapter.php');
require_once(MODEL_DIR . 'PostFileAdapter.php');
require_once(MODEL_DIR . 'AuthorArrayAdapter.php');
require_once(MODEL_DIR . 'Author.php');
require_once(MODEL_DIR . 'AuthorMapper.php');

*/