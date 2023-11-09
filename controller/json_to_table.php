<?php 

function jsonToTable($jsonloc)
{
    $jsonfile=file_get_contents($jsonloc);
    $phpjson = json_decode($jsonfile,true);
    echo "<tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Username</th>
        <th>Type</th>
        <tr>";
    foreach ($phpjson as $data) {
        
        echo "<tr>";
        echo "<td>";
        echo $data['lname'].",".$data['fname'];
        echo "</td>";
        echo "<td>";
        echo $data['email'];
        echo "</td>";
        echo "<td>";
        echo $data['country'];
        echo "</td>";
        echo "<td>";
        echo $data['phone'];
        echo "</td>";
        echo "<td>";
        echo $data['uname'];
        echo "</td>";
        echo "<td>";
        echo $data['type'];
        echo "</td>";
        echo "</tr>";

    }


}

?>