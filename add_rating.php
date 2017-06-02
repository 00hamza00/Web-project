<?php
if(!empty($_POST["rating"]) && !empty($_POST["id"])) {
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="UPDATE games SET rating='" . $_POST["rating"] . "' WHERE game_id='" . $_POST["id"] . "'";
$result = $db_handle->updateQuery($query);
}
?>