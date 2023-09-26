<?php

session_start();

if (isset($_SESSION["admin"])) {
    header("location: admin.php");
    exit;
}


require_once "config.php";

$username = $password = "";
$err = "";

function function_alert($message)
{

    // alert box display 
    echo "<script>alert('$message');</script>";
}

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT user, pass FROM admin WHERE user = '$username' and pass = '$password'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        session_start();
        $_SESSION["admin"] = $username;
        $_SESSION["loggedin"] = true;
    	$_FLAG['flag'] = 0;


        header("location: admin.php");
    } else {
        function_alert("Username or Password is wrong!");
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Login</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- nav bar -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="../assets/logo.svg" width="40" height="32" alt="" srcset="" />
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="../index.html" class="nav-link px-2 text-white">Home</a>
                    </li>

                    <li>
                        <a href="../src/faq.html" class="nav-link px-2 text-white">FAQs</a>
                    </li>
                    <li>
                        <a href="../src/about.html" class="nav-link px-2 text-white">About</a>
                    </li>
                </ul>

                <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input
                            type="search"
                            class="form-control form-control-dark"
                            placeholder="Search..."
                            aria-label="Search"
                        />
                    </form> -->

                <!-- login button -->
                <div class="text-end">
                    <button class="btn btn-primary dropdown-toggle me-3 px-4 fw-bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="../src/student-login.php">Student Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../src/login-company.php">Company Login</a>
                        </li>
                    </ul>
                </div>

                <!-- Register button -->
                <div class="text-end">
                    <button class="btn dropdown-toggle btn-outline-light me-2" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Register
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                        <li>
                            <a class="dropdown-item" href="../src/student-registration.php">Intern Registration</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../src/register-company.php">Company Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- nav bar -->


    <!-- Registration section -->
    <div class="container mt-4 col-lg-6 mx-auto">
        <h1 style="text-align:center; padding-bottom: 30px;">Admin Login</h1>
        <hr>
        <form class="row g-3" action="" method="post">


            <!-- username -->
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label"><strong>Username</strong></label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" name="username" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>

            <!-- password -->
            <div class="col-md-4">
                <label><strong>Password</strong></label>
                <div class="input-group" id="show_hide_password">
                    <input class="form-control" name="password" type="password">
                </div>
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>

    <footer class="blog-footer p-5 mb-4 bg-light rounded-3">
        <p style="text-align: center;">InternSearch by Neema, Kousika and Ayushman. Know more at <a href="../src/about.html">About Us Page</a>.</p>
        <p style="text-align: center;">
            <a href="#">Back to top</a>
        </p>
    </footer>


</body>


</html>