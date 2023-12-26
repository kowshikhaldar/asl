<?php
    session_start();
	include '../Controller/Registration_validation.php';
?>

<html>
    <head>
        <title>Create an account</title>
        <link rel="stylesheet" href="../Model/css/registration.css?v<?php echo time(); ?>">
    </head>
    <body>
        <section id="container">
            <div class="boxarea">
                <div class="boxtext">
                    <h3>Create a new account.</h3>
                </div>

                <div class="underline">

                </div>

                <div>
                    <?php
						if($isPost==true && $account==true)
							echo "<span style='color:red;font-size:16px;text-align:left;padding:20px;'>Already registed</span>";
						?>
                </div>

                <div class="formbox">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="username">
                            <div class="fname">
                                <input type="text" id="fname" name="fname" placeholder="First Name">
								<?php
									if($isPost==true && $firstName=="")
									echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
								?>
                            </div>

                            <div class="lname">
                                <input type="text" id="lname" name="lname" placeholder="Last Name">
								<?php
									if($isPost==true && $lastName=="")
									echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
								?>
                            </div>

                        </div>

                        <div class="email">
                            <input type="email" id="email" name="email" placeholder="E-mail Address">
							<?php
								if($isPost==true && $email=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>
                        <div id="echeck"></div>

                        <div class="phonenumber">
                            <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number">
							<?php
								if($isPost==true && $pnumber=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="password">
                            <input type="password" id="passwrd" name="passwrd" placeholder="Password">
							<?php
								if($isPost==true && $passwrd=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="district">
                            <select name="dstrct">
                                <option value="Select a district">Controlling Division</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Mymensingh">Mymensingh</option>
                            </select>
							<?php
								if($isPost==true && $dstrct=="Select a district")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="upzilla" >
                            <select name="upzlla">
                                <option value="Select Designation">Select Designation</option>
                                <option value="CGA">CGA</option>
                                <option value="Division Controller">Division Controller</option>
                                <option value="Aditor">Aditor</option>
                            </select>
							<?php
								if($isPost==true && $upzla=="Select an Upzilla")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="address">
                            <input type="text" id="address" name="address" placeholder="Road & House No.">
							<?php
								if($isPost==true && $address=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="gender">
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
                        </div>

                        <div class="dob">
                            <input type="date"  id="dob" name="dob">
							<?php
								if($isPost==true && $dob=="")
								 echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
							?>
                        </div>

                        <div class="termcon">
                            <p>
                                By clicking Sign Up, you agree to our Terms, Data Policy and 
                                Cookie Policy. You may receive SMS notifications from us 
                                and can opt out at any time.
                            </p>
                        </div>

                        <div class="sellerbtn">
                            <input type="submit" name="sellerbtn" value="Sign Up">
                        </div>
                    </form>

                    <div class="backindex">
                        <a href="Index.php">Already have an account?</a>
                    </div>

                    <?php
                        if($accountC==true){
                            echo "<p style='color:green;text-decoration: none;font-weight: bold;font-size:14px;text-align:center;padding-bottom:10px;padding-top:10px;'>Account Create successfully done!<a href='Index.php' style='color:green;text-decoration: none;font-weight: bold;'> GO Back Log in Page!</a></p>";
                        }
                    ?>

                </div>

            </div>

        </section>

    </body>
    
</html>