<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "root";
$DB_NAME = "adv";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobilenum = $_POST['mobilenum'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];


   $sql = "INSERT INTO login (username, firstname, lastname, password, email, mobilenum, age, gender, hobbies) VALUES ('$username', '$firstname', '$lastname', '$password', '$email', '$mobilenum', '$age','$gender', '$hobbies')";

   if ($conn->query($sql) === TRUE) {
       $message = "Registration successful!";
   } else {
       $message = "Error: " . $sql . "<br>" . $conn->error;
   }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="register_form_container">
        <div class="register_form">
            <h2>Register</h2>
            <form method="post" action="">
                <div class="input_group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="Username" class="input_text" autocomplete="off" required />
                </div>
                <div class="input_group">
    <i class="fa fa-user"></i>
    <input type="text" name="firstname" placeholder="Firstname" class="input_text" autocomplete="off" required maxlength="50" pattern="[A-Za-z\s]{1,50}" />
</div>
<div class="input_group">
    <i class="fa fa-user"></i>
    <input type="text" name="lastname" placeholder="Lastname" class="input_text" autocomplete="off" required maxlength="50" pattern="[A-Za-z\s]{1,50}" />
</div>
                <div class="input_group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" class="input_text" autocomplete="off" required maxlength="50" />
                </div>

                <div class="input_group">
    <i class="fa fa-mobile"></i>
    <input type="tel" name="mobilenum" placeholder="Mobile Number" class="input_text" autocomplete="off" required pattern="0\d{10}" maxlength="11" />
</div>

                <div class="input_group">
                    <i class="fa fa-child"></i>
                    <input type="number" name="age" placeholder="Age" class="input_text" autocomplete="off" required />
                </div>

                <div class="input_group">
                <i class="fa fa-venus-mars"></i>
                    <select name="gender" type="combobox" class="input_text">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="input_group">
                    <i class="fa fa-magic"></i>
                    <!-- <input type="text" name="hobbies" placeholder="Hobbies" class="input_text" autocomplete="off" required /> -->
                    <textarea class="input_text" name="hobbies" rows="10" placeholder="Hobbies" required></textarea>

                </div>

            <div class="input_group">
    <i class="fa fa-unlock-alt"></i>
    <input type="password" name="password" id="password" placeholder="Password" class="input_text" autocomplete="off" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,}" />
</div>

<div class="input_group">
    <i class="fa fa-unlock-alt"></i>
    <input type="password" name="conpass" id="conpass" placeholder="Confirm Password" class="input_text" autocomplete="off" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,}" />
</div>

<script>
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('conpass');

    confirmInput.addEventListener('input', function() {
        if (confirmInput.value === passwordInput.value) {
            confirmInput.setCustomValidity('');
        } else {
            confirmInput.setCustomValidity('Passwords do not match');
        }
    });
</script>

                <p><?php echo $message; ?></p>
                <div class="button_group" id="login_button">
                    <button type="submit">Register</button>
                </div>
          
           
        
            </form>
            <div class="footer">
                <a href="login.php">Go back to Login</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="login.js"></script>

</body>
</html>
