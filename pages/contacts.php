<!DOCTYPE html>

<html lang="en-US">

<head>
<meta charset="UTF-8">

<title>Prima</title>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

	<div class="top"> 
	<h1>Prima</h1>
	<p class="slogan">Value first.</p>
	</div>

	<ul class="navbar">
	<li><a href="../index.html">Home</a></li>
	<li><a href="services.html">Services</a></li>
	<li><a href="contacts.html">Contact</a></li>
	</ul>
<div>
	<h2><i class="fa fa-user-circle"></i>Name</h2>
	<p><i class="fa fa-phone"></i>555-5555</p>
	<p><i class="fa fa-envelope"></i>name@email.com</p>
</div>

<div>
	<h2><i class="fa fa-user-circle"></i>Name</h2>
	<p><i class="fa fa-phone"></i>555-5555</p>
	<p><i class="fa fa-envelope"></i>name@email.com</p>
</div>

<div>
	<h2><i class="fa fa-user-circle"></i>Name</h2>
	<p><i class="fa fa-phone"></i>555-5555</p>
	<p><i class="fa fa-envelope"></i>name@email.com</p>
</div>

<div class="form">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    

  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["answer"])) {
    $answerErr = "Answer is required";
  } else {
    $answer = test_input($_POST["answer"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Get in Touch!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Receive mail updates from us for deals and promotions:
  <input type="radio" name="answer" <?php if (isset($answer) && $answer=="Yes!") echo "checked";?> value="Yes!">Yes!
  <input type="radio" name="answer" <?php if (isset($answer) && $answer=="No thanks") echo "checked";?> value="No thanks">No thanks
  <span class="error">* <?php echo $answerErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $answer;
?>
</div>
<div class="footer">
<footer>
	<p class="footertext"><u>Address</u>:<br> 12345 123 Street NE, <br>Kinshasa, Democratic Republic of the Congo</p>
	<p class="footertext"><u>Business email</u>:<br> prima@mail.com</p>
	<ul class="social">
	<li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
	<li><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>
	<li><a href="https://www.google.com" class="fa fa-google"></a></li>
	<li><a href="https://www.linkedin.com" class="fa fa-linkedin"></a></li>
	<li><a href="https://www.youtube.com" class="fa fa-youtube"></a></li>
	<li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
	</ul>
	</footer>
	
</body>

</html>

