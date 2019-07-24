<?php 

	include 'app/database.php';
  session_start();
  $userInfo = $_SESSION["user"];
  $sql = "SELECT * FROM `adminlogin` WHERE `u_email` = $userInfo";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["name"]. " - Name: ";
    }
} else {
    echo "0 results";
}
?>