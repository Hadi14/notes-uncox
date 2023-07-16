<?
require_once('main.php');
$db = Db::getInstance();
$un = $_GET['id'];
$db->update("delete from x_note where noteID='$un'");
header("Location: index.php");
