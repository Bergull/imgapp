<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author Martin
 */
class UvodController extends Controller{
    //put your code here
    public function zpracuj($parametry) {
         $this->header = array("title" => 'Picuploader app', "description" => "picture uploader app", "keywords" => "picture uploader app");
         $this->view = "uvod";
    }

}
