<?php

include('config.php');

$f_name = $_GET["First_Name"];
$l_name = $_GET["Last_Name"];
$b_day = $_GET["Birthday_day"];
$b_month = $_GET["Birthday_Month"];
$b_year = $_GET["Birthday_Year"];

$d = mktime(0, 0, 0, $b_month, $b_day, $b_year);
$dob = date("Y/m/d", $d);
$email = $_GET["Email_Id"];
$mob_no = $_GET["Mobile_Number"];
$gender = $_GET["Gender"];
$address = $_GET["Address"];
$city = $_GET["City"];
$pincode = $_GET["Pin_Code"];
$state = $_GET["State"];
$country = $_GET["Country"];
$x_board = $_GET["ClassX_Board"];
$x_percentage = $_GET["ClassX_Percentage"];
$x_yop = $_GET["ClassX_YrOfPassing"];
$xii_board = $_GET["ClassXII_Board"];
$xii_percentage = $_GET["ClassXII_Percentage"];
$xii_yop = $_GET["ClassXII_YrOfPassing"];
$ug_clg = $_GET["Graduation_Board"];
$ug_gpa = $_GET["Graduation_Percentage"];
$ug_yop = $_GET["Graduation_YrOfPassing"];
$pg_clg = $_GET["Masters_Board"];
$pg_gpa = $_GET["Masters_Percentage"];
$pg_yop = $_GET["Masters_YrOfPassing"];
$course = $_GET["Course"];
$github_link = $_GET["Github_link"];
$linkedin_link = $_GET["Linkedin_link"];
$username = $_GET["Username"];
$password = $_GET["Password"];



$sql = "insert into studenttt values('$f_name','$l_name','$dob','$mob_no','$email','$address','$city','$pincode','$state','$country','$x_board','$x_percentage','$x_yop','$xii_board','$xii_percentage','$xii_yop','$ug_clg','$ug_gpa','$ug_yop','$pg_clg','$pg_gpa','$pg_yop','$course','$gender','$github_link','$linkedin_link','$username','$password')";
if (mysqli_query($conn, $sql)) {
    echo "NEW RECORD INSERTED SUCCEFULLY";
}



?>



<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- makes site responsive -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <title>InternSearch</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />

    <title>Student Registration</title>
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
                            <a class="dropdown-item active" href="../src/student-registration.php">Intern Registration</a>
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
        <h1 style="text-align:center; padding-bottom: 30px;">Intern Registration</h1>
        <hr>
        <form class="row g-3" method="post" action="">
            <!-- changed to post -->

            <!-- First name -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>First Name</strong></label>
                <input type="text" class="form-control" name="First_Name" id="validationTooltip01" placeholder="John" required>
            </div>

            <!-- Last name -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>Last Name</strong></label>
                <input type="text" class="form-control" name="Last_Name" id="validationTooltip01" placeholder="Doe" required>
            </div>

            <!-- username -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label"><strong>Username</strong></label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    <input type="text" class="form-control" name="user_name" id="validationTooltipUsername" placeholder="johndoe" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>

            <!-- password -->
            <div class="password">
                <label><strong>Password</strong></label>
                <div class="input-group" id="show_hide_password">
                    <input class="form-control" type="pass_word" name="pass_word" id="companyPassword" required>
                </div>
            </div>



            <!-- Email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong></label>
                <input type="email" class="form-control" name="Email_Id" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <!----- Date Of Birth -------------------------------------------------------->
            <tr>
                <td><strong>Date Of Birth</strong></td>

                <td>

                    <select class="form-select" name="Birthday_day" id="Birthday_Day" aria-label="Default select example" required>
                        <option value="-1">Day:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>

                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>

                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>

                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>

                        <option value="31">31</option>
                    </select>


                    <select class="form-select" id="Birthday_Month" name="Birthday_Month" aria-label="Default select example" required>
                        <option selected>Month</option>
                        <option value="-1">Month:</option>
                        <option value="January">Jan</option>
                        <option value="February">Feb</option>
                        <option value="March">Mar</option>
                        <option value="April">Apr</option>
                        <option value="May">May</option>
                        <option value="June">Jun</option>
                        <option value="July">Jul</option>
                        <option value="August">Aug</option>
                        <option value="September">Sep</option>
                        <option value="October">Oct</option>
                        <option value="November">Nov</option>
                        <option value="December">Dec</option>
                    </select>


                    <select class="form-select" name="Birthday_Year" id="Birthday_Year" aria-label="Default select example" required>
                        <option value="-1">Year:</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>

                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>

                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </select>
                </td>
            </tr>




            <hr>
            <div class="col-md-6 position-relative">
                <label for="validationTooltipUsername" class="form-label"><strong>Gender:</strong> </label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                </div>
            </div>
            <hr>


            <!-- mobile number -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label"><strong>Mobile Number</strong></label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" name="Mobile_Number" id="validationTooltipUsername" placeholder="+91111111111" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>

            <br>
            <br>
            <br><br>

            <!-- House Number -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>House Number</strong></label>
                <input type="number" class="form-control" name="House_Number" id="validationTooltip01" placeholder="12" required>
            </div>


            <!-- Street -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>Street Name</strong></label>
                <input type="text" class="form-control" name="Street_Name" id="validationTooltip01" placeholder="Doe" required>
            </div>


            <!-- City -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>City Name</strong></label>
                <input type="text" class="form-control" name="City" id="validationTooltip01" placeholder="Delhi" required>
            </div>


            <!-- State -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>State Name</strong></label>
                <input type="text" class="form-control" name="State" id="validationTooltip01" placeholder="Delhi" required>
            </div>


            <!-- Country -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>Country Name</strong></label>
                <input type="text" class="form-control" name="Country" id="validationTooltip01" placeholder="India" required>
            </div>

            <!-- Pin Code -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>Pin Code</strong></label>
                <input type="number" class="form-control" name="Pin_Code" id="validationTooltip01" placeholder="321312" required>
            </div>

            <hr>


            <!----- Qualification---------------------------------------------------------->
            <tr>
                <br><br>
                <td><strong>QUALIFICATION</strong> </td>

                <br>

                <td>
                    <table>

                        <tr>
                            <td align="center"><b>Sl.No.</b></td>
                            <td align="center"><b>Examination</b></td>
                            <td align="center"><b>Board</b></td>
                            <td align="center"><b>Percentage</b></td>
                            <td align="center"><b>Year of Passing</b></td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Class X</td>
                            <td><input type="text" name="ClassX_Board" maxlength="30" /></td>
                            <td><input type="number" name="ClassX_Percentage" maxlength="30" /></td>
                            <td><input type="number" name="ClassX_YrOfPassing" maxlength="30" /></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Class XII</td>
                            <td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
                            <td><input type="number" name="ClassXII_Percentage" maxlength="30" /></td>
                            <td><input type="number" name="ClassXII_YrOfPassing" maxlength="30" /></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Graduation</td>
                            <td><input type="text" name="Graduation_Board" maxlength="30" /></td>
                            <td><input type="number" name="Graduation_Percentage" maxlength="30" /></td>
                            <td><input type="number" name="Graduation_YrOfPassing" maxlength="30" /></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Masters</td>
                            <td><input type="text" name="Masters_Board" maxlength="30" /></td>
                            <td><input type="number" name="Masters_Percentage" maxlength="30" /></td>
                            <td><input type="number" name="Masters_YrOfPassing" maxlength="30" /></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td align="center">(10 char max)</td>
                            <td align="center">(upto 2 decimal)</td>
                        </tr>
                    </table>

                </td>
            </tr>

            <hr>


            <!-- Course -->
            <label><strong>Courses Applied for</strong></label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="Course_BCA" value="BCA">
                <label class="form-check-label" for="exampleRadios1">
                    BCA
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="Course_BCom" value="BCom">
                <label class="form-check-label" for="exampleRadios2">
                    B.Com
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="Course_BSc" value="BSc">
                <label class="form-check-label" for="exampleRadios1">
                    B.Sc
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="Course_BA" value="BA">
                <label class="form-check-label" for="exampleRadios2">
                    B.A
                </label>
            </div>

            <hr>

            <!-- Github Link -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>Github Link</strong></label>
                <input type="url" class="form-control" name="Github_Link" id="validationTooltip01" placeholder="https://github.com/internsearch" required>
            </div>

            <!-- LinkedIn Link -->
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"><strong>LinkedIn Link</strong></label>
                <input type="url" class="form-control" name="Linkedin_Link" id="validationTooltip01" placeholder="https://linkedin.com/in/internsearch" required>
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
                <button class="btn btn-secondary" type="Reset">Reset Form</button>
            </div>

            <div class="col-12">
                <button class="btn btn-secondary" onclick="document.location='student-login.php'">Login</button>
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