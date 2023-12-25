<?php
include("../controller/session_handle.php");
include("../controller/process_it_s_list.php");

include("../view/menubar.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>It Support Member List</title>
    <link rel="stylesheet" href="../css/table_data.css">
    <link rel="stylesheet" href="../css/it_s_list.css">
    <link rel="stylesheet" href="../css/Buttons.css">
    <script src="../js/crud.js"></script>
    <script src="../js/jquery/jquery-3.7.1.min.js"></script>

</head>

<body>
<h2 id="titleName">It Support Member List</h2>
   
            <table border="1px" id="it_s_list_table">
                <?php
                echo "<tr><th>Name</th><th>Email</th><th>Country</th><th>Phone</th><th>ID</th><th>Type</th><th>Operation</th></tr>";


                print_its_list();


                ?>

            </table>






            <table id="update">

                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id="fname" name="fname"><span id="fname_flag"></span></td>

                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id="lname" name="lname"><span id="lname_flag"></span></td>

                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" id="dob" name="dob"><span id="dob_flag"></span></td>

                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" id="phone" name="phone" value="+880"><span id="phone"></span></td>

                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" id="gm" name="gender" value="male">Male<br>
                        <input type="radio" id="gf" name="gender" value="female"> Female<span id="gender_flag"></span>
                    </td>

                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email" name="email" placeholder="abc@mail.com"><span
                            id="email_flag"></span></td>

                </tr>

                <tr>
                    <td>Picture:</td>
                    <td>
                        <input type="file" id="pro_pic" name="pro_pic" accept="image/*">(Passport size Clear Picture)
                        <span id="pro_pic_flag"></span>
                    </td>


                </tr>

                <tr>
                    <td>Country:</td>
                    <td><select id="country" name="country">
                            <option value="BD" selected="selected">Bangladesh</option>
                            <option value="INDIA">India</option>
                            <option value="US">United States</option>
                            <option value="CHINA">China</option>
                            <option value="RUSSIA">Russia</option>
                        </select><span id="country_flag"></span></td>

                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id="city" name="city" placeholder="Enter City Name"><span
                            id="city_flag"></span></td>

                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea id="addrs" name="addrs" placeholder="Enter the Full Address"></textarea><span
                            id="addrs_flag"></span></td>


                </tr>
                <tr>
                    <td>Experience:</td>
                    <td><textarea id="exp" name="exp" placeholder="Write Experience Here"></textarea><span
                            id="exp_flag"></span></td>


                </tr>
                <tr>
                    <td>Education:</td>
                    <td><textarea id="edu" name="edu" placeholder="Enter Education Information"></textarea><span
                            id="edu_flag"></span></td>


                </tr>
                <tr>
                    <td>Skills:</td>
                    <td><textarea id="skill" name="skill" placeholder="What are the skills you have?"></textarea><span
                            id="skill_flag"></span></td>

                </tr>
                <tr>
                    <td>Availablity:</td>
                    <td><select id="availablity" name="availablity">
                            <option value="morning">6AM to 4PM</option>
                            <option value="night">4PM to 1PM</option>

                        </select><span id="availability_flag"></span></td>



                </tr>
                <tr>
                    <td>Why do you want to join our IT support team:</td>
                    <td><textarea id="reason" name="reason" placeholder="Write Here"></textarea><span
                            id="reason_flag"></span></td>
                    >

                </tr>
                <tr>
                    <td>References:</td>
                    <td><textarea id="reference" name="reference" placeholder="Write Here"></textarea>

                    </td>

                </tr>


                <td>
                    <div class="">

                        <input type="submit" value="Submit" id="submt" class="btn_success submit" name="submt">

                    </div>
                </td>

                </tr>

            </table>


            

</body>

</html>