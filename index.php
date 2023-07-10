<?

require_once("db.php");
require_once("config.php");
require_once("common.php");
$db = new Db();

$sql = "SELECT * FROM x_note";
$result = $db->doquery($sql);
dump($result);
