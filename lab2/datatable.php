<?php

include 'head.php';
include 'filehandler.php';
$users= get_all_users();

echo "<td> <a href='./regiter.php' class='btn btn-info' >add</a> </td>";
// echo 
?>

<div class="container">
    <h1> All users </h1>
    <table class="table">
        <tr> <td> ID</td> <td> first name </td> <td> last name </td><td> username </td><td> gmail </td><td> address </td><td> country </td><td> department </td><td> Password </td><td> gender </td><td> skill </td><td> show </td><td> edit </td><td> delete </td></tr>
        <?php
            foreach ($users as $user){
                echo "<tr>";
                $userdata = trim($user, "\n");
                $userdata = explode(":", $userdata);
                foreach ($userdata as $field){
                    echo "<td>{$field} </td>";
                }
                echo "<td> <a href='./controller/show.php?id=$userdata[0]' class='btn btn-info' >show info</a> </td>";
                echo "<td> <a href='./controller/$userdata[0]' class='btn btn-warning' >ubdate</a> </td>";
                echo "<td> <a href='./controller/delete.php?id=$userdata[0]' class='btn btn-danger' >delete</a> </td>";
                echo "</tr>";
            }


        ?>

    </table>


</div>

