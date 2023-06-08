<?php 
include "./../head.php";

function get_all_user(){

    $user=false;
    if (file_exists("./../users.txt")){
        $user=file("../users.txt");
        $user=array_filter($user);
    }
    return $user;
}

function get_by_id($id){

   $users= get_all_user();
   if ($users){
foreach ($users as $index => $user) {
    # code...
    $user=trim($user,"/n");
    $user=explode(":",$user);
    if($user[0]==$id){ return [$index=>$user];}
}
   }
   else{
    return false;
   }



}



function save_all($users){
    try{
        if (file_exists("./../users.txt")){
        $fileobject=  fopen("./../users.txt", "w");
        if ($fileobject){
            foreach ($users as $user) {
                $clen_user=trim($user,"/n");
                $user=$clen_user.PHP_EOL;
                // echo $user;
            fwrite($fileobject, $user);
            }
            // fwrite($fileobject, $userdata);
            fclose($fileobject);
            return true;
        }
            }
    }catch (Exception $e){
        return false;
    }
}


function delete_user_id($id){
    $user=get_by_id($id);
    $index=array_keys($user)[0];
    // echo $index;
   $users= get_all_user();
   unset($users[$index]);

   save_all($users);

}





function upadte_by_id($id,$newdata){
    $user=get_by_id($id);
    $index=array_keys($user)[0];
    // echo $index;
   $users= get_all_user();
   $users[$index]=$newdata ;

//    save_all($users);

}

// delete_user_id(2);

// var_dump( get_by_id(2));