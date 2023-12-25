<?php

include("../model/itsdb/it_s_db.php");

function print_its_list()
{
    $obj = new ItsDb();
    $con = $obj->connectDb();
    $res = $obj->getAlluser($con, "itsdb");
    $count=0;
    foreach ($res as $data) {

        $id=$data['id'];

        
        echo '<tr id="'.$count.'">';
        echo "<td>";
        echo $data['lname'] . "," . $data['fname'];
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
        echo $data['id'];
        echo "</td>";
        echo "<td>";
        echo $data['type'];
        echo "</td>"; 
        echo "<td class='td_actions'>";
        echo '<div class="actionlist btn_success" onclick="member_profile('."'$id',$count".')" >Profile</div>';
        echo '<div class="actionlist btn_danger"  onclick="data_Delete('."'$id',$count".')">Delete</div>';
        echo '<div class="actionlist btn_warning " onclick="data_Update('."'$id',$count".')" >Update</div>';
        echo "</td>";
        echo "</tr>";
        echo "</span>";
        $count++;
       
    

    }

}





?>