<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of routerController
 *
 * @author dedek
 */
class RouterController extends Controller {

    //put your code here
    protected $controller;

    public function zpracuj($parametry) {
        // print_r($parametry);
        $parametryURL = $this->parseURL($parametry[0]);
        //$controllerClass = $this -> pomlckyDoVelbloudiNotace(array_shift($parametryURL))."Controller";
//        echo('<br /> parametryURL ');
//        print_r($parametryURL);
        if (empty($parametryURL[0])) {
            $this->presmeruj('php/uvod');
        }
        $controllerClass = $this->pomlckyDoVelbloudiNotace(array_shift($parametryURL)) . "Controller";
//        var_dump($controllerClass);
//        exit;
        if (file_exists('controllers/' . $controllerClass . '.php')) {
            $this->controller = new $controllerClass;
        } else {
            $this->presmeruj('error');
        }
        
        
        $this->controller->zpracuj($parametryURL);

        $this->data['title'] = $this->controller->header['title'];
        $this->data['description'] = $this->controller->header['description'];
        $this->data['keywords'] = $this->controller->header['keywords'];
        // Nastavení hlavní šablony
        $this->view = 'rozlozeni';
    }

    private function parseURL($url) {
        $naparsovanaURL = parse_url($url);
        $naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], "/");
        $naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], "php/");
        $naparsovanaURL["path"] = trim($naparsovanaURL["path"]);

        $rozdelenaCesta = explode("/", $naparsovanaURL["path"]);
        return $rozdelenaCesta;
    }

    private function pomlckyDoVelbloudiNotace($text) {
        $veta = str_replace('-', ' ', $text);
        $veta = ucwords($veta);
        $veta = str_replace(' ', '', $veta);
        return $veta;
    }

}
