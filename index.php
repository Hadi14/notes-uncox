<?

require_once("main.php");
$name = $_SESSION['seuname'];
echo $name . "خوش آمدید";
echo "<br>";
echo  "برای خروج " . "<a href=logout.php> اینجا </a>" . "کلیک کنید ";
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
