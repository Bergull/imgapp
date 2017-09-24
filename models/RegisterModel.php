<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author Martin
 */
class RegisterModel {

    //session_start();
    function registerUser($username, $password) {
        session_start();
        if (!isset($_SESSION['usr_id'])) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $db->prepare("INSERT INTO users(username,password) VALUES(?, ?)");
            try {
                $stmt->execute(array($username, $passwordHash));
                header('Location: index.php');
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    //echo 'Tento uživatel již existuje';
                } else {
                    //echo 'An error has occured, please try again later.';
                }
            }
        } else {
            session_destroy();
            header('Location: login.php');
        }
    }

}
