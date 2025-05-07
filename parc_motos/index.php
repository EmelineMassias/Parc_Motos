<?php
require "loader.php";

if (empty($_GET)) {
    //Changer pour arriver sur la page de co
    header("Location: index.php?controller=security&action=login");
}
if ($_GET["controller"] == "moto") {
    $controller = new MotoController();

    if ($_GET["action"] == "list") {
        $controller->list();
    }
    if ($_GET["action"] == "detail" && array_key_exists("id", $_GET)) {
        $controller->detail($_GET["id"]);
    }
    if ($_GET["action"] == "delete" && array_key_exists("id", $_GET)) {
        $controller->delete($_GET["id"]);
    }
    if ($_GET["action"] == "add") {
        $controller->add();
    }
    if ($_GET['action'] == 'sortBy' && array_key_exists("type", $_GET)) {
        $controller->sortBy($_GET["type"]);
    }
}
if ($_GET["controller"] == 'security') {
    $controller = new SecurityController();

    if ($_GET["action"] == "login") {
        $controller->login();
    }
    if ($_GET["action"] == "logout") {
        $controller->logout();
    }


}
?>

<p>Prout</p>
