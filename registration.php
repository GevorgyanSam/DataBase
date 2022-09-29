<?php require "config.php"; ?>
<?php require "validateRegistration.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/regStyle.css">
    <link rel="stylesheet" href="css/regMedia.css">
    <title>Registration</title>
</head>
<body>
    <div class="registrationParent">
        <div class="parent">
            <div>
                <h1>Registration</h1>
            </div>
            <div class="formParent">
                <form action="" method="post" autocomplete="off">
                    <div class="gridParent">
                        <div class="name">
                            <div>
                                <i class="fa-regular fa-user" id="nameIcon"></i>
                                <input type="text" placeholder="Name" id="name" name="name" value="<?=$Name ?>">
                            </div>
                            <div>
                                <p class="errName"><?= $ErrName ?></p>
                            </div>
                        </div>
                        <div class="lastName">
                            <div>
                                <i class="fa-regular fa-user" id="lastNameIcon"></i>
                                <input type="text" placeholder="Last Name" id="lastName" name="lastName" value="<?=$LastName ?>">
                            </div>
                            <div>
                                <p class="errLastName"><?=$ErrLastName ?></p>
                            </div>
                        </div>
                        <div class="email">
                            <div>
                                <i class="fa-regular fa-envelope" id="emailIcon"></i>
                                <input type="email" placeholder="Email" id="email" name="email" value="<?=$Email ?>">
                            </div>
                            <div>
                                <p class="errEmail"><?=$ErrEmail ?></p>
                            </div>
                        </div>
                        <div class="userName">
                            <div>
                                <i class="fa-solid fa-user-plus" id="userNameIcon"></i>
                                <input type="text" placeholder="Login" id="userName" name="userName" value="<?=$UserName ?>">
                            </div>
                            <div>
                                <p class="errUserName"><?=$ErrUserName ?></p>
                            </div>
                        </div>
                        <div class="password">
                            <div>
                                <i class="fa-solid fa-lock" id="passwordIcon"></i>
                                <input type="password" placeholder="New Password" id="password" name="password" value="<?=$Password ?>">
                                <i class="fa-regular fa-eye-slash" id="eye"></i>
                            </div>
                            <div>
                                <p class="errPassword"><?=$ErrPassword ?></p>
                            </div>
                        </div>
                        <div class="password">
                            <div>
                                <i class="fa-solid fa-lock" id="passwordConfirmIcon"></i>
                                <input type="password" placeholder="Confirm Password" id="passwordConfirm" name="passwordConfirm" value="<?=$PasswordConfirm ?>">
                                <i class="fa-regular fa-eye-slash" id="eyeConfirm"></i>
                            </div>
                            <div>
                                <p class="errPasswordConfirm"><?=$ErrPasswordConfirm ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="anotherWay">
                <span>OR</span>
            </div>
            <div class="login">
                <span>
                    Already Have An Account ? <br> 
                    <a href="index.php">Login</a>
                </span>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/regScript.js"></script>
</body>
</html>