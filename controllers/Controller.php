<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author dedek
 */
abstract class Controller {
    //put your code here
    protected $data = array();
    protected $view = "";
    protected $header = array('title' => '', 'keywords' => '', 'description' => '');
    
    
    abstract function zpracuj($parametry);
    
    public function showView(){
        if($this -> view){
            extract($this -> data);
            require ('views/'.$this -> view.".phtml");
        }
    }
    public function presmeruj($url)
    {
            header("Location: /php/$url");
            header("Connection: close");
            exit;
    }
}
