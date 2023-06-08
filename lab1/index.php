<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h1>Registration Form</h1>
  <form action="display.php" method="POST">
    <div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" name="fname" placeholder="Enter your first name">
    </div>
    <div class="mb-3">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastName" name="lname" placeholder="Enter your last name">
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">User Name</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter your first name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password">
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label"  for="male">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">
          Female
        </label>
      </div>
      
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter your address"></textarea>
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
    </div>
    <div class="mb-3">
      <label for="department" class="form-label">Department</label>
      <input type="text" class="form-control" id="department" name="department" placeholder="Enter your department">
    </div>
    <div class="mb-3">
      <label for="skills" class="form-label">Skills</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="skills[]" value="php" id="php">
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
    </div>
    <h4>
      123456
    </h4>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
