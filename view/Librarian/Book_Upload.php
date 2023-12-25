<!DOCTYPE html>
<html>
<head>
    <title>Book Upload</title>
   
</head>
<body>
    <h1 align="center">Book Upload</h1>
    <Form action="" method ="POST">
    <table align="center">
        <tr>
             <td>Book Name:</td>
            <td><input type="text" name="bname"></td>
        </tr>
        <tr>
            <td>Author Name:</td>
            <td><input type="text" name="aname"></td>
        </tr>
        <tr>
            <td>Book types:</td>
            <td><input type="radio" value="Poetry" name="btypes"> Poetry</td>
            <td><input type="radio" value="Triller" name="btypes"> Thriller</td>
            <td><input type="radio" value="Comics" name="btypes">Comics</td>
            <td><input type="radio" value="Horror" name="btypes">Horror</td>
        </tr>
        <tr>
            <td>ISBN:</td>
            <td><input type="text" name="isbn"></td>
        </tr>
        <tr>
            <td>Publication date:</td>
            <td><input type="date" name="pdate"></td>
        </tr>
       
        <tr> 
            <td></td>  
            <td><input type="submit" value="Upload" name="Upload"></td>
            <td><input type="Reset" value="Cancel" name="Cancel"></td>
        </tr>
  
</table>
        
</Form>
            

</body>
</html>






