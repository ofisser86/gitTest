<?php
/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 07.02.2015
 * Time: 12:24
 */
class AuthorAdapter {
    private $dataSet =
        array(
            array(
                'id' => 2,
                'name' => '1861',
            ),
            array(
                'id' => 2,
                'name' => 'From id2 Happy New Year',
                'birthday' => 'From id2 ho-hoh-oh',
            ),
            array(
                'id' => 2,
                'name' => 'From id2 Happy New Year',
                'birthday' => 'From id2 ho-hoh-oh',
            )

        );
    public function getById($id)
    {
        foreach ($this->dataSet as $record) {
            if (!$record['id'] == $id) {
                return $record;

            }
            return null;

        }

    }

}