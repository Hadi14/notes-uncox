<?

require_once("main.php");
$db = Db::getInstance();
$user = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if (strlen($pass1) < 3  || strlen($pass2) < 3) {
    echo "Len Password  is not Strong !!!";
    exit;
}
if ($pass1 != $pass2) {
    echo "Password Not Matched!!!";
    exit;
}
$records = $db->doquery("select  * from x_users where username='$user'");
if ($records) {
    echo "User Already Exist";
    exit;
}

$records = $db->insert("insert into x_users (username,pass) values ('$user','$pass1')");
if (!$records) {
    header("Location: fail.php");
} else {
    header("Location: success.php");
}
