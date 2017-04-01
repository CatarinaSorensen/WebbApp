<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Membership fee</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
$cost = 0;
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
if (isset($_POST['memberType'])) {
    $memberType = $_POST['memberType'];
}
else {
    $memberType = "not selected";
}
echo <<<END
<h1> Forestville Fitness Centre - Annual membership fee</h1>
<label>First name: </label>$firstName<br>        
<label>Last name: </label>$lastName<br>        
<label>Phone number: </label>$phoneNumber<br>
<label>Membership type: </label>$memberType
END;
if ($memberType == "Adult"){
   $cost = $cost + 250;
}else{
   $cost = $cost + 150;
}
if (isset($_POST['extra'])) {
 echo "<p>You selected the following extra services:</p>";
 $extra_array = $_POST['extra'];
 echo "<ul>";
 foreach ($extra_array as $extra) {
 $cost = $cost + 50;
 echo "<li>$extra</li>";
 }
 echo "</ul>";
}
else {
 echo "<p>You selected no extra services.</p>";
}
echo "<p>Annual membership fee: $$cost </p>";
?>
</body>
</html>