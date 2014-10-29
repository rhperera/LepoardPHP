<?php

class Controller
{
    protected $db;

    public function __construct()
    {
        session_start();
    }

    public function getDb()
    {
        return new PDO('mysql:host=hostname','root','password');
    }

    protected function model($model)
    {
        require_once('../app/models/'.$model.'.php');

        return new $model($this->getDb());
    }

    protected function view($view,$data=array())
    {
        require_once('../app/views/'.$view.'.php');

    }
}

