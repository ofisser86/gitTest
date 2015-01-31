<?php

class Request
{	private $get = array();
	private $post = array();
	private $server = array();

	public function __construct(array $get = array(), array $post = array(), array $server = array())
	{    	unset($get['path']);
    	$this->get = $get;
    	$this->post = $post;
    	$this->server = $server;	}

	private function getKey($from, $key, $default = null)
	{  		$arrThisFrom = $this->$from;
  		return (!empty($arrThisFrom[$key]) ? $arrThisFrom[$key] : $default);	}

	public function get($key, $default = null)
	{		return $this->getKey('get', $key, $default);	}

	public function post($key, $default = null)
	{
		return $this->getKey('post', $key, $default);
	}

	public function server($key, $default = null)
	{
		return $this->getKey('server', $key, $default);
	}

	public function isPost()
	{		$requestMethod = $this->server('REQUEST_METHOD', 'get');
		return (strtolower($requestMethod) == 'post');	}

}