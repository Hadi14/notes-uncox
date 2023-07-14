<?

require_once("main.php");

$db = Db::getInstance();
$user = $_POST['user'];
$pass = $_POST['pass'];
$records = $db->doquery("select  * from x_users where username='$user' and pass='$pass'");
if (!$records) {
    $message = "login Failed";
    require_once("fail.php");
    exit;
} else {
    $message = "login Success";
    require_once("success.php");
    $_SESSION['seuname'] = $user;
    exit;
}
