<?php


class Controller
{
    protected $request;
    protected $view;

    function __construct()
    {
    }

    function view($file, $variables = null)
    {
        if (empty($this->view)) {
            $this->view = new View();
        }
        return $this->view->render($file, $variables);
    }

    function getRequest(){
        return $this->request;
    }

    function setRequest(){
        return $this->request;
    }
}
