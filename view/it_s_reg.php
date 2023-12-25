<?php
include "../controller/process_it_s_reg.php";



?>

<!DOCTYPE html>
<html>

<head>

    <title>IT Support Application Form</title>
    <link rel="icon" href="../images/aiub-logo.svg" type="image/svg+xml">
    <script src="../js/registration_validation.js"></script>
    <link rel="stylesheet" href="../css/Buttons.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap">
</head>

<body>
    <div class="main">
        <h2>IT Support Application Form</h2>

        <form action="" method="post" enctype="multipart/form-data" onsubmit="return  formValidate()">
            <table>

                <tr>
                    <td>First Name:</td>
                    <td><input type="text" id="fname" name="fname"><span id="fname_flag"></span></td>
                    <td>
                        <?php echo $fname_flag; ?>
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" id="lname" name="lname"><span id="lname_flag"></span></td>
                    <td>
                        <?php echo $lname_flag; ?>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" id="dob" name="dob"><span id="dob_flag"></span></td>
                    <td>
                        <?php echo $dob_flag; ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" id="phone" name="phone" value="+880"><span id="phone"></span></td>
                    <td>
                        <?php echo $phone_flag; ?>
                    </td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" id="gm" name="gender" value="male">Male<br>
                        <input type="radio" id="gf" name="gender" value="female"> Female<span id="gender_flag"></span>
                    </td>
                    <td>
                        <?php echo $gender_flag; ?>
                    </td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email" name="email" placeholder="abc@mail.com"><span
                            id="email_flag"></span></td>
                    <td>
                        <?php echo $email_flag; ?>
                    </td>
                </tr>

                <tr>
                    <td>Picture:</td>
                    <td>
                        <input type="file" id="pro_pic" name="pro_pic" accept="image/*">(Passport size Clear Picture)
                        <span id="pro_pic_flag"></span>
                    </td>
                    <td>
                        <?php echo $pro_pic_flag; ?>
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
                    <td>
                        <?php echo $country_flag; ?>
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" id="city" name="city" placeholder="Enter City Name"><span
                            id="city_flag"></span></td>
                    <td>
                        <?php echo $city_flag; ?>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea id="addrs" name="addrs" placeholder="Enter the Full Address"></textarea><span
                            id="addrs_flag"></span></td>
                    <td>
                        <?php echo $addrs_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Experience:</td>
                    <td><textarea id="exp" name="exp" placeholder="Write Experience Here"></textarea><span
                            id="exp_flag"></span></td>
                    <td>
                        <?php echo $exp_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Education:</td>
                    <td><textarea id="edu" name="edu" placeholder="Enter Education Information"></textarea><span
                            id="edu_flag"></span></td>
                    <td>
                        <?php echo $edu_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Skills:</td>
                    <td><textarea id="skill" name="skill" placeholder="What are the skills you have?"></textarea><span
                            id="skill_flag"></span></td>
                    <td>
                        <?php echo $skill_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Availablity:</td>
                    <td><select id="availablity" name="availablity">
                            <option value="morning">6AM to 4PM</option>
                            <option value="night">4PM to 1PM</option>

                        </select><span id="availability_flag"></span></td>
                    <td>
                        <?php echo $availablity_flag; ?>
                    </td>


                </tr>
                <tr>
                    <td>Why do you want to join our IT support team:</td>
                    <td><textarea id="reason" name="reason" placeholder="Write Here"></textarea><span
                            id="reason_flag"></span></td>
                    <td>
                        <?php echo $reason_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>References:</td>
                    <td><textarea id="reference" name="reference" placeholder="Write Here"></textarea>
                    <td>
                        <?php echo $reference_flag; ?>
                    </td>
                    </td>

                </tr>
                <tr>
                    <td>CV:</td>
                    <td><input type="file" id="cv" name="cv" accept=".pdf">Only .pdf Allowed</td>
                    <td>
                        <?php echo $cv_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Academic Qualifications:</td>
                    <td>
                        <input type="file" id="aq" name="aq" accept=".zip, .rar">(make the folder of document to zip)
                    </td>
                    <td>
                        <?php echo $aq_flag; ?>
                    </td>

                </tr>
                <tr>
                    <td>Certificates:</td>
                    <td>
                        <input type="file" id="cert" name="cert" accept=".zip, .rar">(make the folder of document to
                        zip)
                    </td>
                    <td>
                        <?php echo $cert_flag; ?>
                    </td>

                </tr>
                <tr>



                    <td>
                        <div class="termsdesign">
                            <input type="checkbox" id="terms" name="terms" value="accepted"> I have read and accept the
                            Terms and Conditions.
                            <?php echo $terms_flag; ?><br>
                        </div>
                        <div class="">

                            <input type="submit" value="Submit" id="submt" class="btn_success submit" name="submt">
                            <input type="reset" value="Reset" class="btn_secondary submit">
                        </div>
                    </td>

                </tr>

            </table>
        </form>
    </div>
    <?php
    echo $jsonfailed;
    ?>

</body>

</html>