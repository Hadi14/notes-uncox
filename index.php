<?

require_once("db.php");
require_once("config.php");
$db = new Db();

$sql = "SELECT * FROM x_note";
$result = $db->doquery($sql);
