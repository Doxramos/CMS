<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/8/2016
 * Time: 6:09 PM
 */
if(isset($_POST)) {
    require_once "../../../../config.inc";
    require_once dirname(__file__) . '/index.php';
    switch ($_POST['process']) {
        case "login":
            SetLogin($_POST['loginname'], $_POST['password']);
            break;
        case "logout":
            session_unset($_SESSION['user']['id']); break;
    }
}