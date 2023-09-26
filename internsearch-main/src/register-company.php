<?php

include("config.php");


function function_alert($message)
{

    // alert box display 
    echo "<script>alert('$message');</script>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Taking all values from the form data from register.html

    $username = trim($_POST["username"]);
    $name = trim($_POST["name"]);
    $password = trim($_POST["password"]);
    $about = trim($_POST["about"]);

    // $errors = array();


    $user_check_query = "SELECT * FROM company_reg WHERE c_id='$username'";
    $result = mysqli_query($conn, $user_check_query);
    //$user = mysqli_fetch_assoc($result);

    $num = mysqli_num_rows($result);


    if ($num == 1) {
        //if ($user['username'] === $username) {
        //array_push($errors, "Username already exists");
        function_alert("Username already exists!");
    }


    // Finally, register user if there are no errors in the form
    else {
        $sql = "INSERT INTO company_reg (c_id, c_name, c_password, c_about) VALUES ('$username', '$name','$password','$about')";

        if (mysqli_query($conn, $sql)) {
            // $_SESSION['username'] = $_POST['username'];
            // $_SESSION['loggedin'] = true;
            function_alert("You have successfully registered!");
        } else {
            echo "ERROR: Sorry $sql. " . mysqli_error($conn);
        }
    }
}

?>


<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <title>Employer Registration</title>
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

                <!-- login button -->
                <div class="text-end">
                    <button class="btn dropdown-toggle me-3 btn-outline-info px-4 fw-bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <button class="btn btn-primary dropdown-toggle btn-outline-light me-2" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Register
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                        <li>
                            <a class="dropdown-item" href="../src/student-registration.php">Intern Registration</a>
                        </li>
                        <li>
                            <a class="dropdown-item active" href="../src/register-company.php">Company Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- nav bar -->


    <!-- Registration section -->
    <div class="container mt-4 col-lg-6 mx-auto">
        <h1 style="text-align:center; padding-bottom: 30px;">Company Registration</h1>
        <hr>
        <form class="row g-3" method="post" action="">
            <!-- changed to post -->

            <!-- name -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="validationTooltip01" placeholder="John Doe" required>
            </div>

            <!-- username -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    <input type="text" class="form-control" name="username" id="validationTooltipUsername" placeholder="johndoe" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>


            <!-- password -->
            <div class="password">
                <label>Password</label>
                <div class="input-group" id="show_hide_password">
                    <input class="form-control" type="password" name="password" id="companyPassword" required>
                </div>
            </div>

            <!-- About the company text area -->
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">About Employer</label>
                <textarea class="form-control" name="about" id="validationTextarea" placeholder="Enter about yourself/company" required></textarea>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>

            <div class="col-12">
                <a href="../src/login-company.php"><button type="button" class="btn btn-secondary">Login as a Company</button> </a>
            </div>
        </form>

        <br><br><br>

        <h4>Terms and Conditions</h4>

        <?php
        $colors = array("User should be registered with NBIC India.", "Company should have a registered office in India.", "if company fails to provide internship, then it will suffer consequences in this platform.");
        foreach ($colors as $terms) {
            echo "- $terms <br>";
        }
        ?>

        <br>
        <br>
        <br>

        <h4>Privacy Policy</h4>
        <?php


        // constant arrays

        define("policy", [
            "We use cookies to get to know our users, how they use this platform.",
            "We never sell your data to any third party companies.",
            "Your data only gets shared between the interhsip providing companies."
        ]);

        $length = count(policy);
        $i = 0;

        while ($i < $length) {
            echo "- " . policy[$i] . "<br>";
            $i++;
        }
        ?>

    </div>


    <footer class="blog-footer p-5 mb-4 bg-light rounded-3">
        <p style="text-align: center;">InternSearch by Neema, Kousika and Ayushman. Know more at <a href="../src/about.html">About Us Page</a>.</p>
        <p style="text-align: center;">
            <a href="#">Back to top</a>
        </p>
    </footer>

</body>

</html>