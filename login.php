<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form>
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
                <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>

                <br>

                <!--   Password -->

                <span class="input-item">
                    <i class="fa fa-key"></i>
                </span>
                <!--   Password Input-->
                <input class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>

                <!--      Show/hide password  -->
                <span>
                    <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                </span>


                <br>
                <!--        buttons -->
                <!--      button LogIn -->
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