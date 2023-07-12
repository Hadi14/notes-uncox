<?

require_once("main.php");

// $db = new Db();
$db = Db::getInstance();
$db = Db::getInstance();
$db = Db::getInstance();

$sql = "SELECT * FROM x_note";
$db = Db::getInstance();
$result = $db->first($sql);
$db = Db::getInstance();
dump($result);
$db = Db::getInstance();
