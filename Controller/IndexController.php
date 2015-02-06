<?php

/*
index controller class
*/

class IndexController
{
    /**
     * @param Request $request
     * @return string
     */
    public function indexAction(Request $request)
    {
        var_dump($request->get('path'), $request->get('id'));
        echo "<pre>";
        echo $_SERVER[REQUEST_METHOD];
        echo "<pre>";
        return "This is index action";
    }
}