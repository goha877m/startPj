<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view("bhf");
    }

    /**
    * 百化分练习
    */
    public function bhf(){
    	return view();
    }
}
