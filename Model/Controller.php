<?php
/**
 * Created by PhpStorm.
 * User: Valentain
 * Date: 15.02.2015
 * Time: 13:11
 */
namespace Model;
abstract class Controller
{
    protected function render($viewName, $controller, array $arguments=array())
    {
        $path = VIEW_DIR . $controller . DS . $viewName . '.phtml';

        if (!file_exists($path)){
            throw new \Model\Exception\NotFoundException('View not found');

        }
        extract($arguments);
        echo "<pre>";
        //print_r($post);
        //print_r($author);
        echo "</pre>";
        ob_start();
        require $path;
        return ob_get_clean();
        //var_dump($viewName,$controller,$arguments);

    }

}