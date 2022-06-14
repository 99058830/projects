<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<?php
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  $email = input($_POST["email"]);
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Naam:
  <br>
  <input type="text" name="name">
  <br>
  E-mail:
  <br>
  <input type="email" name="email">
  <br>
  <input type="submit" name="submit">  
</form>

<?php
echo "<h1>De ingevulde gegevens zijn:</h1>";
echo "Naam:", $name;
echo "<br>";
echo "E-mail:", $email;
?>

</body>
</html>