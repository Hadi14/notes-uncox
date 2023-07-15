<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
        $un = $_SESSION['seuname'];
        $sql = "SELECT * FROM x_note where username='$un'";
        $result = $db->doquery($sql);
        dump($result);
        // echo $result[0]['noteTitle'];
        ?>
        <table>
            <tr>
                <th>کد نت</th>
                <th>عنوان نت</th>
                <th>متن نت</th>
                <th>زمان نت</th>
                <th>ویرایش</th>
            </tr>
            <? foreach ($result as $row) {
                $t = $row['noteTitle'];
                // $t = 'عنوان1';
            ?>
                <tr>
                    <td><?= $row['noteID'] ?></td>
                    <td><?= $row['noteTitle'] ?></td>
                    <td><?= $row['noteText'] ?></td>
                    <td><?= $row['noteTime'] ?></td>
                    <td><a href="edit.php?id=<?= $row['noteID'] ?>&title=<?= $t ?>"><i class="bi bi-pencil-square"></i></a></td>
                </tr>
            <?
            }
            ?>

        </table><br>
        <button>درج نت</button>
    <?
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