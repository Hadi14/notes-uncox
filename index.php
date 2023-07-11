<?

require_once("db.php");
require_once("config.php");
require_once("common.php");
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
