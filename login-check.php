<?

// echo md5("123");
// $m = md5("123");
// if (md5("123") == "202cb962ac59075b964b07152d234b70") {
//     echo " Matched";
// }
// exit;



require_once("main.php");

$db = Db::getInstance();
$user = $_POST['user'];
$pass = $_POST['pass'];
$hashedpass = md5($pass);
$records = $db->doquery("select  * from x_users where username='$user' and pass='$hashedpass'");
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
