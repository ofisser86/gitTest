<?
/*
*
*  Array  Adapter - simple given array
*
*/

namespace Model\Post\Adapter;

class CArray
{	private $dataSet = array(
		array(
			'id' => 1,
			'title' => 'Pink Floyd',
			'content' => 'REALLY, Pink Floyd? Because anyone with an education would understand that its grammatically incorrect to use double negatives. Only one line in, and youve already disproved your own damn argument.',
			'created' => '10/16/2001 12:01:23',
			'author' => 3
		),
		array(
			'id' => 11,
			'title' => 'some kind of monster',
			'content' => 'qwerty dsdf sdfsdfqwerty dsdf sdfsdfqwerty dsdf sdfsdfqwerty dsdf sdfsdfqwerty dsdf sdfsdfqwerty dsdf sdfsdfqwerty dsdf sdfsdf',
			'created' => '10/10/1998 15:30:00',
			'author' => 32
		),
		array(
			'id' => 19,
			'title' => 'breakn bad',
			'content' => 'where is my money bitch bitch where is my money, where is my money bitch bitch where is my money, where is my money bitch bitch where is my money, where is my money bitch bitch where is my money',
			'created' => '08/11/2011 09:45:01',
			'author' => 51
		)
	);

	public function getById($id)
	{    	foreach ($this->dataSet as $record) {    		if ($record['id'] == $id) {    			return $record;    		}    	}

    	return null;	}

}