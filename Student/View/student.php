<?php
    session_start();
    include '../Controller/user_validation.php';
?>
<html>
    <head>
        <title>student</title>
        <link rel="stylesheet" href="../Model/css/student.css?v<?php echo time(); ?>">
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

                <div class="selleradd" id="main">
                <br>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="text" id="fname" name="fname" placeholder="First Name">
                        <?php
                            if($isPost==true && $firstName=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>

                        <input type="text" id="lname" name="lname" placeholder="Last Name">
                        <?php
                            if($isPost==true && $lastName=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>
                                
                        <input type="email" id="email" name="email" placeholder="E-mail Address">
                        <?php
                            if($isPost==true && $email=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>
                            
                        <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number">
                        <?php
                            if($isPost==true && $pnumber=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>
                        
                        <input type="password" id="passwrd" name="passwrd" placeholder="Password">
                        <?php
                            if($isPost==true && $passwrd=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>
            
                        <br>
                        <br>
                            <select name="dstrct">
                            <option value="Select a district">Select a district</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                        <?php
                            if($isPost==true && $dstrct=="Select a district")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>
                            
                        <select name="upzlla">
                            <option value="Book Type">Book Type</option>
                            <option value="Saving Book">Saving Book</option>
                            <option value="Bussiness Book">Bussiness Book</option>
                        </select>
                        <?php
                            if($isPost==true && $upzla=="Book Type")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>

                        <br>
                        <br>
                            
                        <input type="text" id="address" name="address" placeholder="Road & House No.">
                        <?php
                            if($isPost==true && $address=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>
                            
                        <br>
                        <br>
                            
                        <select name="gender">
                            <option value="Select Gender">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Custom">Custom</option>
                        </select>
                        <?php
                            if($isPost==true && $gender=="Select Gender")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>
                            
                        <br>
                        <br>
                            
                        <input type="date"  id="dob" name="dob">
                        <?php
                            if($isPost==true && $dob=="")
                                echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                        ?>
                            
                        <br>
                        <br>
                                                
                        <input type="submit" name="sellerAddbtn" value="ADD">
                        
                    </form>
                    <br>
                    <?php
                            if($addSeller==true)
                                echo "<p style='color:green;font-size:14px;text-align:center;'>Add Successfull</p>";                        
                    ?>
                    <br>
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