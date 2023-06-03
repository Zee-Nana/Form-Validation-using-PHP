<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form validation</title>
</head>
<body>
    <?php
//define variable and set to empty values
        $fullname= $email= $gender= $number= $age = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = test_input($_POST["fullname"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $number = test_input($_POST["number"]);
            $age = test_input($_POST["age"]);
        }
    
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>Form Vallidation</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="name" name="fullname" class="form-control" id="name"> <br>
          </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" name="email" class="form-control" id="email"> <br>
        </div>
        <div class="form-group">
          <label for="pwd">Gender:</label>
          <input type="radio" name="gender" value="Female" class="form-control" id="gender"> Female
          <input type="radio" name="gender" value="Male" class="form-control" id="gender"> Male
        </div>
        <div class="form-group">  
            <label for="number">P.Number:</label>
            <input type="phone" name="number" class="form-control" id="number"> <br>
          </div>
          <div class="form-group">
          <label for="pwd">Age</label>
          <input type="text" name="age" class="form-control" id="age">
        </div>
        <button type="submit" class="btn btn-default">Register</button>
      </form>

      <?php
         echo "<h2>Your Input:</h2>";
         echo "$fullname";
         echo "</br>";
         echo "$email";
         echo "</br>";
         echo "$gender";
         echo "</br>";
         echo "$number";
         echo "</br>";
         echo "$age";

        ?>

        
</body>
</html>