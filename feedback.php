<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#submitButton").click(function() {
        var suggestion = $("#feedbackText").val();
        var name = $("#nameInput").val();
        if (name == "") {
          name = "anon";
        };
        //alert("Thank you for your suggestion, " + name + ".");
      });
    });
  </script>
</head>
<body>
  <h2>Feedback</h2>
  <div id="feedback-container">
  <form action="sendmail.php" method="post">
    name: <input type="text" id="nameInput" name="name"><br>
    email: <input type="emailInput" name="email"><br>
    <textarea id="feedbackText" cols="45" rows="5" name="feedback" ></textarea><br>
    <input type="submit" id="submitButton" value="Submit">
  </form>
  </div>
</body>
</html>
