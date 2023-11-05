<!DOCTYPE html>
<html >
<head>

    <title>IT Support  Application Form</title>
</head>
<body>
    <h2 >IT Support Application Form</h2>
    <form action="" method="post">
        <table>
            
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" ></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" ></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><input type="date" name="dob" ></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phone" value="+880" ></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" >Male<br>
                    <input type="radio" name="gender" value="female" > Female
                </td>
            </tr>
            
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" placeholder="abc@mail.com"></td>
            </tr>

            <tr>
                <td>Picture:</td>
                <td>
                <input type="file" name="pro_pic" accept="image/*">(Passport size Clear Picture)
                </td>
               
            </tr>
            
            <tr>
                <td>Country:</td>
                <td><select name="country">
                    <option value="BD">Bangladesh</option>
                    <option value="INDIA">India</option>
                    <option value="US">United States</option>
                    <option value="CHINA">China</option>
                    <option value="RUSSIA">Russia</option>
                </select></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="city" placeholder="Enter City Name"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="addrs" placeholder="Enter the Full Address"></textarea></td>
                
            </tr>
            <tr>
                <td>Experience:</td>
                <td><textarea name="exp" placeholder="Write Experience Here"></textarea></td>
               
            </tr>
            <tr>
                <td>Education:</td>
                <td><textarea name="edu" placeholder="Enter Education Information"></textarea></td>
               
            </tr>
            <tr>
                <td>Skills:</td>
                <td><textarea name="skill" placeholder="What are the skills you have?"></textarea></td>
               
            </tr>
            <tr>
                <td>Availablity:</td>
                <td><select name="availablity">
                    <option value="morning">6AM to 4PM</option>
                    <option value="morning">4PM to 1PM</option>
                   
                </select></td>

               
            </tr>
            <tr>
                <td>Why do you want to join our IT support team:</td>
                <td><textarea name="reason" placeholder="Write Here"></textarea></td>
               
            </tr>
            <tr>
                <td>References:</td>
                <td><textarea name="reference" placeholder="Write Here"></textarea></td>
               
            </tr>
            <tr>
                <td>CV:</td>
                <td><input type="file" name="cv" accept=".pdf">Only .pdf Allowed</td>
               
            </tr>
            <tr>
                <td>Academic Qualifications:</td>
                <td>
                    <input type="file" name="aq" accept=".zip, .rar">(make the folder of document to zip)
                </td>
               
            </tr>
            <tr>
                <td>Certificates:</td>
                <td>
                <input type="file" name="cert" accept=".zip, .rar">(make the folder of document to zip)
                </td>
               
            </tr>
            <tr>

            
                
                <td>
                <input type="checkbox" id="acceptPolicy"> I have read and accept the <a href="terms.html" target="_blank">Terms and Conditions</a><br>
                    <input type="submit" value="Submit" name="submt">
                    <br>
                    <input type="reset" value="Reset"></td>
             
            </tr>

        </table>
    </form>
    
</body>
</html>