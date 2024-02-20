<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['logid'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "root";
    $DB_NAME = "adv";
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT logid FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['logid'] = $row['logid'];
        $intended_page = isset($_SESSION['intended_page']) ? $_SESSION['intended_page'] : 'index.php';

        header("Location: $intended_page");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="login_form_container">
        <div class="login_form">
            <h2>Login</h2>
            <?php
            if(isset($error_message)) {
                echo "<p style='color: red;'>$error_message</p>";
            }
            ?>
            <form method="post" action="">
                <div class="input_group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" placeholder="Username" class="input_text" autocomplete="off" />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" name="password" placeholder="Password" class="input_text" autocomplete="off" />
                </div>
                <div class="button_group" id="login_button">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="footer">
                <a href="register.php">Don't Have any account? Register</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="login.js"></script>
</body>
</html>
