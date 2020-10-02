
<?php

include("connect.php");


$errors = [];
$message = "";
if (isset($_POST['submit'])) {
    $sql = "SELECT * FROM admin where id=1";
    $x = $connection->query($sql);
    $fetchos = mysqli_fetch_array($x, MYSQLI_ASSOC);
    if($_POST['password']==$fetchos['password']){
     header('Location: dashboard.php');
     session_start();
     $_SESSION['password'] = $fetchos['password'];
    }
    else
    echo'<center><p style="color:red">mot de passe incorrect</p></center>';
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
 <div class="login-box"> 
  <h1>Login</h1>

  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p class="errors">
                <?php
                if (!empty($errors)) :
                    echo $errors;
                else :
                    echo $message;
                endif;
                ?>
                <hr style="width: 23rem;">
            </p>

            <input  style="color:#460843;font-size:20px ;width: 200px;margin: 12px 0;"class="pass" type="password" lang="en" name="password" maxlength="16" placeholder="Password" />
            <div class="remdiv">
                <span class="forgot">
                </span>
            </div>
            <input style="color:#460843;font-size:20px ;width: 200px;margin: 12px 0;" class="submit" type="submit" name="submit" value="Connexion" />
        </form>

    </div>
  </body>
</html>