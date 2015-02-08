<?
namespace Model\Post\Adapter;

class Arrayy
{	private $dataSet = array(
		array(
			'id' => 1,
			'title' => 'Happy New Year',
			'content' => 'ho-ho-ho',
			'created' => '12/31/2014 13:00:00',
			'author' => 2
		),
		array(
			'id' => 11,
			'title' => 'Burn in hell',
			'content' => 'asshole text',
			'created' => '11/30/2013 12:00:00',
			'author' => 32
		),
		array(
			'id' => 3,
			'title' => 'Breaking bad',
			'content' => 'where is my money bitch, bitch where is my money',
			'created' => '10/13/2012 11:10:20',
			'author' => 22
		)
	);

	public function getById($id)
	{    	foreach ($this->dataSet as $record) {    		if ($record['id'] == $id) {    			return $record;    		}    	}

    	return null;	}

}