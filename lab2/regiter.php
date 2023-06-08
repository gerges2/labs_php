<?php
include "head.php";


$email_error=$password_error=$fname_error=$lname_error=$username_error=$gender_error=$department_error=$address_error=$country_error=$skills_error=$old_email=$old_fname=$old_lname=$old_username=$old_address=$old_country=$old_department=$old_password=$old_gender=$old_skills='';
if(isset($_GET) and !empty($_GET)){
//        var_dump($_GET);
    $errors = json_decode($_GET["errors"],1);
      //  var_dump($errors);
    if(in_array('fname', array_flip($errors))){
        $fname_error = $errors["fname"];
        echo $fname_error;
    }
    if(in_array('lname', array_flip($errors))){
      $lname_error = $errors["lname"];
      echo $lname_error;
  }  if(in_array('username', array_flip($errors))){
        $username_error = $errors["username"];
        echo $username_error;
    }
    if(in_array('email', array_flip($errors))){
      $email_error = $errors["email"];
      echo $email_error;
  }
  if(in_array('address', array_flip($errors))){
    $address_error = $errors["address"];
    echo $address_error;
}
if(in_array('country', array_flip($errors))){
  $country_error = $errors["country"];
  echo $country_error;
}
if(in_array('department', array_flip($errors))){
  $department_error = $errors["department"];
  echo $department_error;
}
if(in_array('password', array_flip($errors))){
  $password_error = $errors["password"];
  echo $password_error;
}
if(in_array('gender', array_flip($errors))){
  $gender_error = $errors["gender"];
  echo $gender_error;
}
if(in_array('skills', array_flip($errors))){
  $skills_error = $errors["skills"];
  // echo "<br /> jnf";
  echo $skills_error;
}

    if(isset($_GET["old"])){
        $old_data= json_decode($_GET["old"],1);
          //  var_dump($old_data);
        if(isset($old_data["fname"])){
            $old_fname = $old_data["fname"];
            echo $old_fname;
        }
        if(isset($old_data["lname"])){
          $old_lname = $old_data["lname"];
          echo $old_lname;
       }
       if(isset($old_data["username"])){
        $old_username = $old_data["username"];
        echo $old_username;
       }
       if(isset($old_data["email"])){
        $old_email = $old_data["email"];
        echo $old_email;
      }
      if(isset($old_data["address"])){
        $old_address= $old_data["address"];
        echo $old_address;
      }
      if(isset($old_data["country"])){
        $old_country = $old_data["country"];
        echo $old_country;
      }
      if(isset($old_data["department"])){
        $old_department = $old_data["department"];
        echo $old_department;
      }
      if(isset($old_data["password"])){
        $old_password = $old_data["password"];
        echo $old_password;
      }
      if(isset($old_data["gender"])){
        $old_gender = $old_data["gender"];
        echo $old_gender;
      }
      if(isset($old_data["skills"])){
        $old_skills = $old_data["skills"];
        // echo $old_skills;
      }





    }


}








?>

<div class="container">
  <h1>Registration Form</h1>
  <form action="savedatafile.php" method="POST">
    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" name="fname" placeholder="Enter your first name"value="<?php echo $old_fname; ?>">
      <div class="text-danger"> <?php  echo $fname_error; ?> </div>
    </div>
    <div class="mb-3">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastName" name="lname" placeholder="Enter your last name" value="<?php echo $old_lname; ?>">
      <div class="text-danger"> <?php  echo $lname_error; ?> </div>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">User Name</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter your first name"value="<?php echo $old_username; ?>">
      <div class="text-danger"> <?php  echo $username_error; ?> </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="<?php echo $old_email; ?>">
      <div class="text-danger"> <?php  echo $email_error; ?> </div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name= "password" placeholder="Enter your password"value="<?php echo $old_password; ?>">
      <div class="text-danger"> <?php  echo $password_error; ?> </div>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
     </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male"  check="<?php echo $old_gender=='male';?>">
        <label class="form-check-label"  for="male">
          Male 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female"check="<?php  echo $old_gender=='famale'; ?>">
        <label class="form-check-label" for="female">
          Female
        </label>
      <div class="text-danger"> <?php  echo $gender_error; ?>

      </div>
      
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter your address" ><?php echo $old_address; ?></textarea>
      <div class="text-danger"> <?php  echo $address_error; ?>
   
    </div>
    <div class="mb-3">
      <label for="country" class="form-label">Country</label>
      <select class="form-select" name="country" id="country">
        <option value="">Select your country</option>
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="UK">UK</option>
        <option value="Australia">Australia</option>
      </select>
      <div class="text-danger"> <?php  echo $country_error; ?>

    </div>
    <div class="mb-3">
      <label for="department" class="form-label">Department</label>
      <input type="text" class="form-control" id="department" name="department" placeholder="Enter your department"value="<?php echo $old_department; ?>">
      <div class="text-danger"> <?php  echo $department_error; ?>
    </div>
    <div class="mb-3">
      <label for="skills" class="form-label">Skills</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="skills[]" value="php" id="php" >
        <label class="form-check-label" for="php">
          PHP
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"name="skills[]" value="mysql" id="mysql">
        <label class="form-check-label" for="mysql">
          MySQL
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"name="skills[]" value="html" id="html">
        <label class="form-check-label" for="html">
          HTML
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"name="skills[]" value="css" id="css">
        <label class="form-check-label" for="css">
          CSS
        </label>
      </div>
      <div class="text-danger"> <?php  echo $skills_error; ?>

    </div>
    <h4>
      123456
    </h4>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
