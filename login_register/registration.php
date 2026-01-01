
<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="text-end"><i class="bi bi-x-lg xbtn" onclick="closePage()"></i></div>
    <div class="container">
        <div class="row  pt-lg-5 pt-md-0 mt-lg-5">
            <div class="col-lg-8  align-self-center">
                <img src="img1.jpg" class="img1">
            </div>
            <div class="col-lg-4 align-self-center">
                <h1 class="text-center pb-3 fw-bold">Sign Up</h1>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                    </div>
                    <div class="form-group">
                        <input type="emamil" class="form-control" name="email" placeholder="Email:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                    </div>
                    <div class="form-btn pb-2">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                    </div>
                </form>
                <div>
                    <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
                </div>
            </div>
        </div>


        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>
    </div>
    <script>
        function closePage(){
            window.location.href ='http://localhost/myphp/voyago%20_%20Copy/voyago_booking/index.php';
        }
    </script> 
</body>
</html>
