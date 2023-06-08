<?php

include "../model/user_operation.php";


if(isset($_GET) and !empty($_GET)){
$id = trim($_GET["id"]);

}

//  d  get_by_id(2);

 delete_user_id($id) ;
// foreach ($users as $index=> $user){
//                 echo "<tr>";
//                 foreach ($user as $field){
//                     echo "<td>{$field} </td>";
//                 }
//                 echo "</tr>";
//             }

header("Location:./../datatable.php");

        ?>

    <!-- </table> -->


<!-- </div> -->