<?
namespace Model\Author\Adapter;

class Arrayy
{
	private $dataSet = array(
		array(
			'id' => 2,
			'name' => 'Mr White',
			'birthday' => '12/12/1950'
		),
		array(
			'id' => 32,
			'name' => 'Jessie',
			'birthday' => '01/01/1980',
		),
		array(
			'id' => 22,
			'name' => 'Saul',
			'birthday' => '05/05/1976'
		)
	);

	public function getById($id)
	{
    	foreach ($this->dataSet as $record) {
    		if ($record['id'] == $id) {
    			return $record;
    		}
    	}

    	return null;
	}


}