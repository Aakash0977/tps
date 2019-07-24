 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

echo "<script language = 'javascript'> location.href = 'index.php'; </script>";
?>

</body>
</html> 