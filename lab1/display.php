
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto bg-info">
                   <?php 
                    if ($_POST['gender'] =="male") {
                    echo "thanks MR: {$_POST['fname']} {$_POST['lname']}";
                    
                    }else{
                    echo "thanks MISS: {$_POST['fname']} .''.{$_POST['lname']}";
                    }
                    // echo "thanks" .$_POST('fname');
                    echo "<br />";
                    echo "please Review your information"."<br />";

                    echo "User Name: ". $_POST['username'] ."<br/>";
                    echo "Email: ". $_POST['email'] ."<br/>";
                    echo "Address: ". $_POST['address']."<br/>";
                    echo "department: ". $_POST['department']."<br/>";

                    foreach ($_POST['skills'] as $skill) echo "Skill: ". $skill."<br/>";
                    


                    ?>
            </div>
        </div>
    </div>
</body>
</html>


