<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | InternSearch</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../style/cstyle.css">
    <link rel="stylesheet" href="../style/style.css">
    
</head>
<body>
    
<div class="container">

<header>
    <div id="menu" class="fas fa-bars"></div>

    <div class="menu-bar">
        <a href="../index.html"
            ><img src="../assets/logo.png" alt="logo"
        /></a>

        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faq.html">FAQs</a></li>
            <li><a href="./courses.html">Courses</a></li>
            <li><a href="login-form.html">Login</a></li>
            <li>
                <a href="register.html"
                    >Register <i class="ri-arrow-drop-down-line"></i
                ></a>
            <div class="dropdown-register">
                <ul>
                    <li><a href="student-registration.html">As a Student</a></li>
                    <li><a href="./register.html">As an Employer</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </div>

</header>

<h1 class="heading">  courses </h1>

<!-- course section  -->

<section class="course">

    <div class="box">
        <span class="amount">
            <?php
            $conn = new mysqli("13.126.251.61","work","kouneeman","internsearch");
            $conn1=new mysqli("13.126.251.61","work","kouneeman","internsearch");
            $sql1="SELECT * FROM courses where course_id='100001'";
            $result = $conn1->query($sql1);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    
                    echo "<br>Price: ".$row['price'];
                }
            }
            $conn1->close();
        ?></span>
        <img src="../assets/course-1.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">$59.99</span>
        <img src="../assets/course-2.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">$59.99</span>
        <img src="../assets/course-3.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">$59.99</span>
        <img src="../assets/course-4.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">$59.99</span>
        <img src="../assets/course-5.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

    <div class="box">
        <span class="amount">$59.99</span>
        <img src="../assets/course-5.jpg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ullam omnis odit accusamus doloremque? Cum aliquid unde nulla. Vitae, adipisci?</p>
        <a href="#" class="btn">learn more</a>
        <div class="icons">
            <p> <i class="far fa-clock"></i> 2 hours </p>
            <p> <i class="far fa-calendar"></i> 6 months </p>
            <p> <i class="fas fa-book"></i> 12 modules </p>
        </div>
    </div>

</section>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>