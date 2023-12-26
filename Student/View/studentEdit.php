<?php
    session_start();
    include '../Controller/ProfileEdit.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_SESSION['email']; ?></title>
        <link rel="stylesheet" href="../Model/css/student.css?v<?php echo time(); ?>">
        <link rel="stylesheet" href="../Model/css/studentEdit.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
            <?php
                include 'navbar.php';
            ?>
            </nav>
            <section id="sectionbar">
            <div class="ssectionbody">
                    <div class="profilemenubar">
                                <ul>
                                    <li>
                                    <a href="student.php">Add Book</a>
                                    </li>
                                    
                                    <li>
                                    <a id="load">Show all Book</a>
                                    </li>
                                </ul>
                        </div>
                        <div id="main">
                        <div class="srch">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input class="srchbox" type="text" name="srchemail" placeholder="Enter Email">
                                <input class="srchbtn" type="submit" name="sellerSrch" value="Search">
                            </form>
                        </div>
                        <div class="profileinfo">
                            <form action="" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <th>
                                            <p>Email: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="eemail" value="<?php echo $email1; ?>" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>First Name: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="efname" value="<?php echo $first_name; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Last Name: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="elname" value="<?php echo $last_name; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Phone Number: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="epnumber" value="<?php echo $phone_number; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Address: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="eaddress" value="<?php echo $address; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>District: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="edstrct" value="<?php echo $district; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Account Type: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="eupzlla" value="<?php echo $upzilla; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Gender: </p>
                                        </th>
                                        <td>
                                        <input type="text" name="egender" value="<?php echo $gender ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Date of Birth: </p>
                                        </th>
                                        <td>
                                            <input type="text" name="edob" value="<?php echo $dob; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input class="esavee" type="submit" name="srchsavebtn" value="SAVE">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input class="esavee" type="submit" name="srchdeletebtn" value="Delete">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        </div>
                    </div>
            </section>
        </div>
        <script src="../Controller/js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("#load").on("click",function(e){
                    $.ajax({
                        url:"studentShow.php",
                        type:"POST",
                        success:function(data){
                            $("#main").html(data);
                        }
                    });
                });
            });
        </script> 
    </body>
</html>