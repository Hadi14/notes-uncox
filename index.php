<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/base.css">
</head>

<body>
    <?

    require_once("main.php");
    if (isset($_SESSION['seuname']) != null) {
        $name = $_SESSION['seuname'];
    ?>
        <div class="header">
            <img src="images/profile.png" alt="profile pic" width="20px">
            <span>جناب <?= $name ?> عزیز خوش آمدید</span>
            <div> برای خروج <a href=logout.php> اینجا </a>کلیک کنید </div>
        </div>
    <?
        $db = Db::getInstance();
        $sql = "SELECT * FROM x_note";
        $result = $db->first($sql);
        dump($result);
    } else {
    ?>
        <div class="header">
            <img src="images/profile.png" alt="profile pic" width="20px">
            <span>کاربر میهمان خوش آمدید</span><br>
            <a href="login.php"> ورود</a>
        </div>
    <?
    }

    ?>
    <h1>Hello Welcom To Index Page</h1>


</body>

</html>