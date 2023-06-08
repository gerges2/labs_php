<?php
include "head.php";
include 'filehandler.php';
echo "<div class='container display-5'> ";

// var_dump($_POST);

##### take data from post ---> save it to the file ?
#################### operation validate data before saving ?

$errors= [];
$old_data=[];

$fname = trim($_POST["fname"]);
$lname = trim($_POST["lname"]);
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$address = trim($_POST["address"]);
$country = trim($_POST["country"]);
$department = trim($_POST["department"]);
$password= trim($_POST["password"]);
$gender=($_POST["gender"]);
$skills[]= $_POST["skills"];

// $skill= implode(" ", $skills[0]);
// $skill= implode(" ", $skills[0]);


//var_dump(!(empty($email) and empty($fname)));
//exit();
// if ((empty($email) or isset($password))){
//    header("Location:regiter.php");
// }




if (isset($fname) and !empty($fname)){
    $old_data["fname"] = $fname;
}else{
$errors["fname"] = "fname not valid";
}

if (isset($lname) and !empty($lname)){
    $old_data["lname"] = $lname;
}else{
$errors["lname"] = "lname not valid";
}

if (isset($username) and !empty($username)){
    $old_data["username"] = $username;
}else{
$errors["username"] = "username not valid";
}
if (isset($password) and !empty($password)){
    $old_data["password"] = $password;
}else{
$errors["password"] = "password not valid";
}

if (isset($email) and !empty($email)){
    $old_data["email"] = $email;
}else{
$errors["email"] = "email not valid";
}

if (isset($gender) and !empty($gender)){
    $old_data["gender"] = $gender;
}else{
$errors["gender"] = "gender not valid";
}

if (isset($address) and !empty($address)){
    $old_data["address"] = $address;
}else{
$errors["address"] = "address not valid";
}

if (isset($country) and !empty($country)){
    $old_data["country"] = $country;
}else{
$errors["country"] = "country not valid";
}
if (isset($department) and !empty($department)){
    $old_data["department"]= $department;
}else{ $errors["department"] = "department not valid";}


if (isset($skills[0]) and !empty($skills[0])){
    $old_data["skills"]= $skills[0];
$skill= implode(" ", $skills[0]);

}else{ $errors["skills"] = "skills not valid";}

// var_dump($errors);

if(count($errors)){

// //     ### convert errors to json string
    $string_errors = json_encode($errors);
    $url = "Location:regiter.php?errors={$string_errors}";
    if(count($old_data)){
        $old_data_string = json_encode($old_data);
        $url.="&old={$old_data_string}";
    }
    header($url);
}
else {
    // var_dump($old_data);
// }

// ##############################
    $id = get_new_id();
    $userdata = "{$id}:{$fname}:{$lname}:{$username}:{$email}:{$address}:{$country}:{$department}:{$password}:{$gender}:{$skill}\n";
    echo $userdata;

//     ## save data to the file ?
    $saved = save_new_user($userdata);
    var_dump($saved);
    header("Location:datatable.php");



}