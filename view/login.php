<?php



include("../controller/process_login.php");

?>


<!DOCTYPE html>
<html>

<head>

    <title>ASL Login</title>
    <link rel="icon" href="../images/aiub-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/Buttons.css">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <div id="body">



        <img src="https://www.aiub.edu/Files/Templates/NewAIUB/assets/images/aiub-logo.svg" alt="aiub-logo"  >
        <h3  >It Support Login</h3>
        <form action="" method="post">
            <table >
                <td colspan="2" id="warn">
                    <div>

                        <?php echo $login_flag; ?>
                    </div>
                </td>
                <tr>
                    <td class="table_label">ID:</td>
                    <td><input type="text" name="userid" value="<?php echo $cookuid; ?>"></td>

                </tr>
                <tr>
                    <td class="table_label" >Password:</td>
                    <td><input type="password" name="pass"></td>

                </tr>
                <tr>

                    <td><input type="checkbox" name="remem" value="remember">Remember me</td>

                </tr>
                <tr>

                    <td colspan="2" id="submit"><input type="submit" name="sbmt" class="btn_success" value="Login"></td>

                </tr>
            </table>
        </form>

        <a   href="it_s_reg.php">Apply for IT support?</a>


    </div>

</body>

</html>