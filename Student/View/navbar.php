<?php
    include '../Controller/log_out.php';

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="web_project_final";

    $email=$_SESSION['email'];

    $conn=new mysqli($servername,$username,$password,$dbname);

    $q="SELECT first_name, last_name FROM divisioncntrl WHERE email='$email'";

    $result=$conn->query($q);        

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $first_name1=$row["first_name"];
            $last_name1=$row["last_name"];
        }
    }        
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../Model/css/navbar.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
                <div class="sname">
                    <?php echo $first_name1." ".$last_name1;?>
                </div>
                <div class="menubar">
                    <ul>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="Student.php">Student Library</a>
                        </li>
                    </ul>
                </div>
                <div class="logoutbtn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="submit" name="logoutbtn" value="Log Out">
                    </form>
                </div>
            </nav>
        </div>
    </body>
</html>