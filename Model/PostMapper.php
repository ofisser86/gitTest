<?php

/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 01.02.2015
 * Time: 13:03
 */
class PostMapper
{
    private $adapter; //get and set

    public function setAdapter($adapter)
    {
        $this->$adapter = $adapter;

    }

    public function getAdapter()
    {
        return $this->adapter;

    }

    public function  getPostById($id)
    {

        $data = $this->adapter->getById($id);
        return is_null($data) ? null : $this->d2o($data);

    }

    public function d2o(array $data = array())
    {
        $obj = new Post($data['id']);
        $obj = setTitle(isset($data['title']) ? $data['title'] : null);
        $obj = setContent(isset($data['content']) ? $data['content'] : null);
        $data = DateTime::createFromFormat('m/d/Y H:i:S', $data['create']);
        $obj->Created($data);
        return $obj;

    }

}