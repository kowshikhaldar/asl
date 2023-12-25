<!DOCTYPE html>
<html >
<head>
     <title>Aiub Library</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $formdata = array(
        "FirstName" => $_POST["fn"],
        "LastName" => $_POST["ln"],
        "Username" => $_POST["un"],
        "Pn Number" => $_POST["pn"],
        "E-mail" => $_POST["em"],
        "Password" => $_POST["p"],
        "File" => $_POST["uf"],
        "id" => $_POST["id"]
    );
    
    $phpdata[] = $formdata;
    $jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);
    
    if(file_put_contents("data.json", $jsondata)) {
        echo "Data successfully saved";
    }
    else{
        echo "no data saved";
    }
}
?>    
</body>
</html>