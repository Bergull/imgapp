<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Martin
 */
class User {
    //put your code here
    
    private $username = "";
    private $privillege = "";
    
    function __construct($username, $privillege) {
        $this->username=$username;
        $this->privillege=$privillege;
    }
}
