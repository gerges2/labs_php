<?php

include "../model/user_operation.php";


if(isset($_GET) and !empty($_GET)){
$id = trim($_GET["id"]);

}

//  d  get_by_id(2);


?>
<div class="container">
    <h1> All users by index<?php echo "d"  ?> </h1>
    <table class="table">
        <tr> <td> ID</td> <td> first name </td> <td> last name </td><td> username </td><td> gmail </td><td> address </td><td> country </td><td> department </td><td> Password </td><td> gender </td><td> skill </td></tr>
        <?php
$users= get_by_id($id) ;
foreach ($users as $index=> $user){
                echo "<tr>";
                foreach ($user as $field){
                    echo "<td>{$field} </td>";
                }
                echo "</tr>";
            }


        ?>

    </table>


</div>