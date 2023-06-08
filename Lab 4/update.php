<?php
    session_start();
    require_once 'DataBase.php';
    global $db;

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $room = $_POST['room'];
    $ext = $_POST['ext'];
    $image = $_FILES['image']['name'];
    $target = "images/";

    // validate the form
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }
    if (empty($password)) {
        $errors[] = "Password is required";
    }else{
        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters";
        }
    }
    if (empty($confirm_password)) {
        $errors[] = "Confirm Password is required";
    }else{
        if (strlen($confirm_password) < 8) {
            $errors[] = "Confirm Password must be at least 8 characters";
        }
        if ($password != $confirm_password) {
            $errors[] = "Password and Confirm Password must be the same";
        }
    }
    if (empty($room)) {
        $errors[] = "Room is required";
    }else{
        if (!is_numeric($room)) {
            $errors[] = "Room must be a number";
        }
    }
    if (empty($ext)) {
        $errors[] = "Ext is required";
    }

    if (isset($image) && !empty($image)){
        $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $errors[] = "Sorry, only JPG, JPEG, PNG files are allowed.";
        }
    }
    // check if email is already taken
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $db->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row && $row['id'] != $id) {
        $errors[] = "Email is already taken";
    }

    // if there are errors, redirect back to the create page
    if (count($errors) > 0) {
        $_SESSION['edit_errors'] = $errors;
        header("Location: edit.php?id=$id");
        exit();
    }

    $password = md5($password);
    // if there are no errors, update the user in the database
    unset($_SESSION['edit_errors']);
    // if have image give image a unique name
    if ($image) {
        $image = time().'_'.$image;
        move_uploaded_file($_FILES['image']['tmp_name'], $target.$image);
        // remove old image
        $query = "SELECT * FROM users WHERE id = '$id'";
        $result = $db->query($query);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $old_image = $row['image'];
        unlink($target.$old_image);

        $query = "UPDATE users SET name = '$name', email = '$email', password = '$password', room = '$room', ext = '$ext', image = '$image' WHERE id = '$id'";
    } else {
        $query = "UPDATE users SET name = '$name', email = '$email', password = '$password', room = '$room', ext = '$ext' WHERE id = '$id'";
    }
    $db->exec($query);

    header("Location: index.php");
    exit();
?>





