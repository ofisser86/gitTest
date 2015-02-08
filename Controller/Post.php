<?php
/*
*
*  Post Controller
*
*/

namespace Controller;

class Post
{
	public function __construct()
	{
		$this->mapper = new \Model\Post\Mapper();
		// set data adapter
		$postAdapter = new \Model\Post\Adapter\CArray();
		//$postAdapter = new \Model\Post\Adapter\CFile();
		//$postAdapter->setDataSet(FILES_DIR . 'PostData.txt');
		$this->mapper->setAdapter($postAdapter);


	public function showAction(\Model\Request $request)
	{
		$id = $request->get('postId', null);

        // check if ID is set formally
		if (is_null($id)) {

        // use method from mapper to search in data array
  		$postById = $this->mapper->getPostById($id);

  		// check if post with given ID exists
  		if (is_null($postById)) {

  		// data out
  		echo "<pre>";
  		print_r($postById);
        print_r($postById->getAuthor());
        echo "</pre>";
  		// action/controller sign
		return "This is show action from post controller, ID = {$id}";



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