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
    <title>Logi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="text-end"><i class="bi bi-x-lg xbtn" onclick="closePage()" ></i></div>
    <div class="container">
        <div class="row pt-lg-5 pt-md-0 mt-lg-5">
            <div class="col-lg-8 align-self-center">
                <img src="img2.jpg" class="img1">
            </div>

            <div class="col-lg-4 align-self-center">
                <?php
                if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                    require_once "database.php";

                    // Fetch user from the database based on email
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    if ($user) {
                        // Check if the entered password matches the hashed password in the database
                        if (password_verify($password, $user["password"])) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: index.php");
                            die();
                        } else {
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Email does not match</div>";
                    }
                }
                ?>
                <h1 class="text-center pb-3 fw-bold">Login</h1>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                    </div>
                    <div class="form-btn pb-2">
                        <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
                </form>
                <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
            </div>
        </div>
    </div>
    <script>
        function closePage(){
            window.location.href ='http://localhost/myphp/voyago%20_%20Copy/voyago_booking/index.php';
        }
    </script>
 
</body>
</html>
