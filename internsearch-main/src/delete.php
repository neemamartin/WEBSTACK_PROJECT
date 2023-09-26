<?php

require('config.php');

function function_alert($message)
{

	// alert box display 
	echo "<script>alert('$message!');</script>";
}


if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sql_delete = "DELETE FROM `studenttt` WHERE username = '$id'";

   if (mysqli_query($conn, $sql_delete)) {
      function_alert("Record deleted!");
	   $_FLAG['flag'] = 1;

      header('location: admin.php');
   } else {
      echo "record not deleted. Error: " . mysqli_error($conn);
   }
}
