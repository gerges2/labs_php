<?php

include "../model/user_operation.php";


if(isset($_GET) and !empty($_GET)){
$id = trim($_GET["id"]);

}


 upadte_by_id($id,$data) ;
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