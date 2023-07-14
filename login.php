<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?
    require_once("main.php");
    if (isset($_SESSION['seuname'])) {
        header("Location: index.php");
    }
    ?>
    <form action="login-check.php" method="post">
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>ورود</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>ورود با نام کاربری و کلمه عبور</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">
                <!--   user name -->
                <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                </span>
                <!--   user name Input-->
                <input name="user" class="form-input" id="txt-input" type="text" placeholder="@UserName" required>
                <br>
                <!--   Password -->
                <span class="input-item">
                    <i class="fa fa-key"></i>
                </span>
                <!--   Password Input-->
                <input name="pass" class="form-input" type="password" placeholder="Password" id="pwd" required>
                <br>
                <button class="log-in"> ورود </button>
            </div>
            <!--   other buttons -->
            <div class="other">
                <!--      Forgot Password button-->
                <button class="btn submits frgt-pass">فراموشی رمز عبور</button>
                <!--     Sign Up button -->
                <button class="btn submits sign-up">ثبت نام
                    <!--         Sign Up font icon -->
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                <!--      End Other the Division -->
            </div>
            <!--   End Conrainer  -->
        </div>
        <!-- End Form -->
    </form>
</body>

</html>