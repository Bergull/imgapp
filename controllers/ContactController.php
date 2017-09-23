<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactController
 *
 * @author dedek
 */
class ContactController extends Controller {

//put your code here
    public function zpracuj($parametry) {
        $this->header = array("title" => 'Contactform', "description" => "contact form desc", "keywords" => "contact form words");

        if (isset($_POST["email"])) {
            if ($_POST['rok'] == date("Y")) {
                $odesilacEmailu = new MailSender();
                $odesilacEmailu->odesli("admin@adresa.cz", "Email z webu", $_POST['zprava'], $_POST['email']);
            }
        }

        $this->view = 'contact';
    }

}
