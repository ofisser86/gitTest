<?php
/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 01.02.2015
 * Time: 12:39
 */
class Post {
    private $id;
    private $title;
    private $created;
    private $content;
    private $author;

    public function  __controller ($id)
    {
       $this->$id = $id;

    }
    public  function getId()
    {
        return $this->id;
    }
    public  function setTitle($title)
    {
        $this->$title =$title;

    }
    public function getTitle(){

        return $this->title;
    }
    public function getCreated(){
        return $this->created;
    }
    public function setContent($content)
    {
        $this->content = $content;

    }
    public function getContent(){
        return $this->content;

    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;

    }
    public function getAuthor()
    {
        return $this->$author;
    }


}