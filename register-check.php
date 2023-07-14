<?

require_once("main.php");
$db = Db::getInstance();
$user = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if (strlen($pass1) < 3  || strlen($pass2) < 3) {
    $message = "Len Password  is not Strong !!!";
    require_once("fail.php");
    exit;
}
if ($pass1 != $pass2) {
    $message =  "Password Not Matched!!!";
    require_once("fail.php");
    exit;
}
$records = $db->doquery("select  * from x_users where username='$user'");
if ($records) {
    $message = "User Already Exist";
    require_once("fail.php");
    exit;
}

$hashedpass = md5($pass1);

$records = $db->insert("insert into x_users (username,pass) values ('$user','$hashedpass')");
if (!$records) {
    // header("Location: fail.php");
    $message = "Insert Error";
    require_once("fail.php");
    exit;
} else {
    // header("Location: success.php");
    $message = "Insert Success";
    require_once("success.php");
}
