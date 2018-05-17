<!DOCTYPE html>
<html>
<body>

name: <?php echo $_POST["name"]; ?><br>
email: <?php echo $_POST["email"]; ?><br>
feedback: <?php echo $_POST["feedback"]; ?><br>

<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $feedback = $_POST["feedback"];
  /* send email */
  $status = mail("jonathan.yu.94@gmail.com","feedback",$feedback);
  if ($status) {
    echo "Email was delivered.<br>";
  } else {
    echo "Error occurred when trying to send email.<br>";
  }
?>

</body>
</html>
