<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailSender
 *
 * @author dedek
 */
class MailSender {
    //put your code here
        // Odešle email jako HTML, lze tedy používat základní HTML tagy a nové
        // řádky je třeba psát jako <br /> nebo používat odstavce. Kódování je
        // odladěno pro UTF-8.
        public function odesli($komu, $predmet, $zprava, $od)
        {
                $hlavicka = "From: " . $od;
                $hlavicka .= "\nMIME-Version: 1.0\n";
                $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
                return mb_send_mail($komu, $predmet, $zprava, $hlavicka);
        }
}
