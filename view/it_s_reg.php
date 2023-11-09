<?php
include "../controller/process_it_s_reg.php";



?>

<!DOCTYPE html>
<html >
<head>

    <title>IT Support  Application Form</title>
</head>
<body>
    <h2 >IT Support Application Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" ></td><td><?php echo $fname_flag; ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" ></td><td><?php echo $lname_flag; ?></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="dob" ></td><td><?php echo $dob_flag; ?></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phone" value="+880" ></td><td><?php echo $phone_flag; ?></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" >Male<br>
                    <input type="radio" name="gender" value="female" > Female</td><td><?php echo $gender_flag; ?>
                </td>
            </tr>
            
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="abc@mail.com"></td><td><?php echo $email_flag; ?></td>
            </tr>

            <tr>
                <td>Picture:</td>
                <td>
                <input type="file" name="pro_pic" accept="image/*">(Passport size Clear Picture)
                </td><td><?php echo $pro_pic_flag; ?></td>
               
            </tr>
            
            <tr>
                <td>Country:</td>
                <td><select name="country">
                    <option value="BD" selected="selected">Bangladesh</option>
                    <option value="INDIA">India</option>
                    <option value="US">United States</option>
                    <option value="CHINA">China</option>
                    <option value="RUSSIA">Russia</option>
                </select></td><td><?php echo $country_flag; ?></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="city" placeholder="Enter City Name"></td><td><?php echo $city_flag; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="addrs" placeholder="Enter the Full Address"></textarea></td><td><?php echo $addrs_flag; ?></td>
                
            </tr>
            <tr>
                <td>Experience:</td>
                <td><textarea name="exp" placeholder="Write Experience Here"></textarea></td><td><?php echo $exp_flag; ?></td>
               
            </tr>
            <tr>
                <td>Education:</td>
                <td><textarea name="edu" placeholder="Enter Education Information"></textarea></td><td><?php echo $edu_flag; ?></td>
               
            </tr>
            <tr>
                <td>Skills:</td>
                <td><textarea name="skill" placeholder="What are the skills you have?"></textarea></td><td><?php echo $skill_flag; ?></td>
               
            </tr>
            <tr>
                <td>Availablity:</td>
                <td><select name="availablity">
                    <option value="morning">6AM to 4PM</option>
                    <option value="morning">4PM to 1PM</option>
                   
                </select></td><td><?php echo $availablity_flag; ?></td>

               
            </tr>
            <tr>
                <td>Why do you want to join our IT support team:</td>
                <td><textarea name="reason" placeholder="Write Here"></textarea></td><td><?php echo $reason_flag; ?></td>
               
            </tr>
            <tr>
                <td>References:</td>
                <td><textarea name="reference" placeholder="Write Here"></textarea><td><?php echo $reference_flag; ?></td></td>
               
            </tr>
            <tr>
                <td>CV:</td>
                <td><input type="file" name="cv" accept=".pdf">Only .pdf Allowed</td>
                <td><?php echo $cv_flag; ?></td>
               
            </tr>
            <tr>
                <td>Academic Qualifications:</td>
                <td>
                    <input type="file" name="aq" accept=".zip, .rar">(make the folder of document to zip)
                </td>
                <td><?php echo $aq_flag; ?></td>
               
            </tr>
            <tr>
                <td>Certificates:</td>
                <td>
                <input type="file" name="cert" accept=".zip, .rar">(make the folder of document to zip)
                </td>
                <td><?php echo $cert_flag; ?></td>
               
            </tr>
            <tr>

            
                
                <td>
                <input type="checkbox" name="terms" value="accepted"> I have read and accept the Terms and Conditions.<?php echo $terms_flag; ?><br>
                    <input type="submit" value="Submit" name="submt">
                    <br>
                    <input type="reset" value="Reset"></td>
             
            </tr>

        </table>
    </form>
    <?php
    echo $jsonfailed;
    ?>
    
</body>
</html>