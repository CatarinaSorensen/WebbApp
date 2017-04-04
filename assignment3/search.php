<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Art</title>
</head>
<body>
<h1>A1 Animation Art - Search</h1>
<p>Search our database of animation art by supplying the following details.</p>
<form action="results.php" method="POST">
<label>Title:</label><br>
  <input type="text" name="title" /><br><br>
<label>Studio:</label><br>
<select name="studio">
  <option value="any">Any</option>
<?php
//connect to database
$link = mysqli_connect('localhost', 'student', 'mmst12009','assignment3');
$query = "SELECT studio_id, studio_name FROM studios";
$result = mysqli_query($link, $query);
mysqli_close($link);
//fetching result from database
while ($row = mysqli_fetch_array($result)) {
echo <<<END
<option value={$row['studio_id']}>{$row['studio_name']}</option>
END;
}
?>
</select>
<br><br><label>Type:</label><br>
  <input type="radio" id="cel" name="type" value="Cel"/>
<label>Cel</label><br>
  <input type="radio" id="drawing" name="type" value="Drawing"/>
<label>Drawing</label><br><br>
<label>Year created:</label><br>
  <input type="text" name="year" /><br><br>
<label>Lowest price:</label><br>
  $<input type="text" name="lprice"/><br><br>
<label>Highest price:</label><br>
  $<input type="text" name="hprice"/><br><br>
<input type="submit"/>
<input type="reset"/>
</form>
</body>
</html>