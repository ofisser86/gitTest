<?php

/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 01.02.2015
 * Time: 13:26
 */
class PostArrayAdapter
{
    private $dataSet =
        array(
            array(
                'id' => 2,
                'title' => 'From id2 Happy New Year',
                'content' => 'From id2 ho-hoh-oh',
                'created' => '12/31/2014 15:00:00',
                'author' => 2
            ),
            array(
                'id' => 3,
                'title' => 'From id3  Happy New Year',
                'content' => 'From id3 ho-hoh-oh',
                'created' => '12/31/2014 19:00:00',
                'author' => 3
            ),
            array(
                'id' => 4,
                'title' => 'From id4  Happy New Year',
                'content' => 'From id4 ho-hoh-oh',
                'created' => '12/31/2014 20:00:00',
                'author' => 4
            )

        );

    /**
     * @param $id
     * @return null
     */
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