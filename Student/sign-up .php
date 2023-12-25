<?php

$fullnameMsg = $emailMsg = $phoneMsg = $addressMsg =  $dobMsg =  $religionMsg =  $usernameMsg = $passwordMsg =  $cpasswordMsg =  '';

if (isset($_GET['err'])) {

  $err_msg = $_GET['err'];
  
  switch ($err_msg) {
    case 'fullnameEmpty': {
        $fullnameMsg = "Fullname can not be empty.";
        break;
      }
    case 'phoneEmpty': {
        $phoneMsg = "Phone number can not be empty.";
        break;
      }
    case 'addressEmpty': {
        $addressMsg = "Address can not be empty.";
        break;
      }
    case 'emailEmpty': {
        $emailMsg = "Email can not be empty.";
        break;
      }
    case 'dobEmpty': {
        $dobMsg = "Date of birth can not be empty.";
        break;
      }
    case 'religionEmpty': {
        $religionMsg = "Religion can not be empty.";
        break;
      }
    case 'usernameEmpty': {
        $usernameMsg = "Username can not be empty.";
        break;
      }
    case 'passwordEmpty': {
        $passwordMsg = "Password can not be empty.";
        break;
      }
    case 'cpasswordEmpty': {
        $cpasswordMsg = "Confirm password can not be empty.";
        break;
      }
    case 'fullnameInvalid': {
        $fullnameMsg = "Fullname is not valid.";
        break;
      }
    case 'phoneInvalid': {
        $phoneMsg = "Phone number is not valid.";
        break;
      }
    case 'emailInvalid': {
        $emailMsg = "Email is not valid.";
        break;
      }
    case 'emailExists': {
        $emailMsg = "Email already exists.";
        break;
      }
    case 'usernameInvalid': {
        $usernameMsg = "Username is not valid.";
        break;
      }
    case 'passwordInvalid': {
        $passwordMsg = "Password is not valid.";
        break;
      }
    case 'passwordMismatch': {
        $cpasswordMsg = "Passwords do not match.";
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
    <title>Sign Up</title>
</head>
<body>

    <table width="27%" border="1" cellspacing="0" cellpadding="25" align="center">
        <tr>
            <td>
                <form method="post" action="sign-up-controller.php" novalidate autocomplete="off">
                    <h1>Sign Up</h1>
                    Fullname
                    <input type="text" name="fullname" size="43px">
                    <?php if (strlen($fullnameMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $fullnameMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Phone
                    <input type="text" name="phone" size="43px">
                    <?php if (strlen($phoneMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $phoneMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Email
                    <input type="email" name="email" size="43px">
                    <?php if (strlen($emailMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $emailMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Address
                    <input type="text" name="address" size="43px">
                    <?php if (strlen($addressMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $addressMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Date Of Birth &nbsp;&nbsp;&nbsp;
                    <input type="date" name="dob" size="43px">
                    <?php if (strlen($dobMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $dobMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Religion &nbsp;&nbsp;&nbsp;
                    <select name="religion">
                        <option disabled selected hidden value="Not Selected">Choose Your Religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                    </select>
                    <?php if (strlen($religionMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $religionMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Username
                    <input type="text" name="username" size="43px">
                    <?php if (strlen($usernameMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $usernameMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Password
                    <input type="password" name="password" size="43px">
                    <?php if (strlen($passwordMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $passwordMsg ?></font>
                    <?php } ?>
                    <br><br>
                    Confirm Password
                    <input type="password" name="cpassword" size="43px">
                    <?php if (strlen($cpasswordMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $cpasswordMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <button>Create Account</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>