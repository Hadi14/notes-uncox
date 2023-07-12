<?

require_once("main.php");
$db = Db::getInstance();
$user = 'hadi';
$pass = '1233';
$records = $db->doquery("select  * from x_users where username='$user' and pass='$pass'");
if (!$records) {
    header("Location: fail.php");
} else {
    header("Location: success.php");
}
