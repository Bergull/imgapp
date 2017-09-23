<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ErrorController
 *
 * @author dedek
 */
class ErrorController extends Controller{
    //put your code here
    public function zpracuj($parametry) {
         // Hlavička požadavku
        header("HTTP/1.0 404 Not Found");
        // Hlavička stránky
        $this->header['title'] = 'Chyba 404';
        // Nastavení šablony
        $this->view = 'error';       
    }

}
