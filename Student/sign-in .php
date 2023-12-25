<?php

$error_msg = '';

if (isset($_GET['err'])) {

  $err_msg = $_GET['err'];
  
  switch ($err_msg) {
    case 'mismatch': {
        $error_msg = "Wrong username or password.";
        break;
      }
    case 'accessDenied': {
        $error_msg = "You need to sign in first.";
        break;
      }
    case 'bannedUser': {
        $error_msg = "Your account is currently banned.";
        break;
      }
    case 'empty': {
        $error_msg = "Field(s) can not be empty.";
        break;
      }
  }
}

$success_msg = '';

if (isset($_GET['success'])) {

  $s_msg = $_GET['success'];

  switch ($s_msg) {
    case 'created': {
        $success_msg = "Account creation successful. Please sign in.";
        break;
      }
    case 'changed': {
        $success_msg = "Password change successful. Please sign in.";
        break;
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
<br><br>
    <table width="30%" border="1" cellspacing="0" cellpadding="25" align="center">
        <tr>
            <td>
                <form method="post" action="sign-in-controller.php" novalidate autocomplete="off">
                    <h1>Sign In</h1>
                    Email
                    <input type="email" name="email" size="43px">
                    <br><br>
                    Password
                    <input type="password" name="password" size="43px">
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot-password.php">Forgot Password?</a>
                    <br>
                    <?php if (strlen($error_msg) > 0) { ?>
                        <br>
                        <font color="red" align="center"><?= $error_msg ?></font>
                        <br><br>
                    <?php } ?>
                    <?php if (strlen($success_msg) > 0) { ?>
                        <br>
                        <font color="green" align="center"><?= $success_msg ?></font>
                        <br><br>
                    <?php } ?>
                    <button size="250px" name="submit">Sign In</button>
                    <br><br>
                    </form>
                    <hr width="auto">
                    Dont have an account?
                    <br><br>
                    <a href="sign-up.php"><button>Sign Up</button></a>
            </td>
        </tr>
    </table>
  
</body>
</html>