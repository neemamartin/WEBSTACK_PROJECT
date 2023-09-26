<?php

include("config.php");
session_start();

if (!isset($_SESSION['admin'])) {
	header("location: admin-login.php");
}

function function_alert($message, $person)
{

	// alert box display 
	echo "<script>alert('$message, $person!');</script>";
}

$sql_insert = "SELECT * FROM studenttt;";

if ($connect = mysqli_query($conn, $sql_insert)) {
	if ($_FLAG['flag'] = 0) {
		function_alert("Welcome to the admin panel", $_SESSION['admin']);
		$_FLAG['flag'] = 1;
	}
} else {
	echo "<script>Error in inserting</script>";
}

$num = mysqli_num_rows($connect);


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

	<title>Admin Panel</title>
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

				<!-- logout button -->
				<div class="col-md-3 text-end">
					<a href="../src/logout.php"><button type="button" class="btn btn-outline-light me-2" href="../src/logout.php">Logout</button> </a>
				</div>
			</div>
		</div>
	</header>
	<!-- nav bar -->


	<div class="table-responsive bg-light p-5 rounded">
		<h1 style="text-align: center;">
			Admin Panel
		</h1>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th scope="col">Username</th>
						<th scope="col">Password</th>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">DOB</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile No.</th>
						<th scope="col">Address</th>
						<th scope="col">City</th>
						<th scope="col">PinCode</th>
						<th scope="col">State</th>
						<th scope="col">Country</th>
						<th scope="col">10th Board</th>
						<th scope="col">Class 10 %</th>
						<th scope="col">Class 10 Year Of Passing</th>
						<th scope="col">12th Board</th>
						<th scope="col">Class 12 %</th>
						<th scope="col">Class 12 Year Of Passing</th>
						<th scope="col">Bachelor College</th>
						<th scope="col">UG GPA</th>
						<th scope="col">Bachelor Year of Passing </th>
						<th scope="col">Masters College</th>
						<th scope="col">Masters GPA</th>
						<th scope="col">Masters Year of Passing </th>
						<th scope="col">Course</th>
						<th scope="col">Gender</th>
						<th scope="col">Github Link</th>
						<th scope="col">LinkedIn Link</th>
						<th scope="col">Delete user</th>


					</tr>
				</thead>
				<tbody>
					<?php
					if ($num > 0) {
						while ($data = mysqli_fetch_assoc($connect)) {
							echo "
								<tr>
									<th scope='row'>" . $data['username'] . "</th>

									<td>" . $data['password'] . "</td>
									
									<td>" . $data['f_name'] . "</td>
									
									<td>" . $data['l_name'] . "</td>
									
									<td>" . $data['dob'] . "</td>
									
									<td>" . $data['email'] . "</td>
									
									<td>" . $data['mob_no'] . "</td>
									
									<td>" . $data['address'] . "</td>

									<td>" . $data['city'] . "</td>

									<td>" . $data['pincode'] . "</td>

									<td>" . $data['state'] . "</td>

									<td>" . $data['country'] . "</td>

									<td>" . $data['x_board'] . "</td>

									<td>" . $data['x_percentage'] . "</td>

									<td>" . $data['x_yop'] . "</td>

									<td>" . $data['xii_board'] . "</td>

									<td>" . $data['xii_percentage'] . "</td>

									<td>" . $data['xii_yop'] . "</td>

									<td>" . $data['ug_college'] . "</td>

									<td>" . $data['ug_gpa'] . "</td>

									<td>" . $data['ug_yop'] . "</td>

									<td>" . $data['pg_college'] . "</td>

									<td>" . $data['pg_gpa'] . "</td>

									<td>" . $data['pg_yop'] . "</td>

									<td>" . $data['course'] . "</td>

									<td>" . $data['gender'] . "</td>

									<td><a href=https://" . $data['github_link'] . "> " . $data['github_link'] . " </a></td>

									<td><a href=https://" . $data['linkeden_link'] . ">" . $data['linkeden_link'] . "</a></td>

									<td><a href='delete.php?id=" . $data['username'] . "'> Delete </a> </td>

								</tr>
                    
                    		";
						}
					}
					?>
				</tbody>
			</table>

		</div>

		<footer class="blog-footer p-5 mb-4 bg-light rounded-3">
			<p style="text-align: center;">InternSearch by Neema, Kousika and Ayushman. Know more at <a href="../src/about.html">About Us Page</a>.</p>
			<p style="text-align: center;">
				<a href="#">Back to top</a>
			</p>
		</footer>

</body>

</html>