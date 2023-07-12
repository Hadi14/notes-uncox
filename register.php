<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="register-check.php" method="post">
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>ثبت نام</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>برای ثبت نام اطلاعات زیر را وارد کنید </p>
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
                <input name="pass1" class="form-input" type="password" placeholder="Password" id="pwd" name="password">
                <br>
                <input name="pass2" class="form-input" type="password" placeholder="Confirm Password" id="pwd" name="password">
                <br>
                <button class="log-in"> ثبت نام </button>
            </div>
            <!--   other buttons -->

            <!--   End Conrainer  -->
        </div>
        <!-- End Form -->
    </form>
</body>

</html>