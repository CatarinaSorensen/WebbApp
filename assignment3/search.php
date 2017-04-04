<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Art</title>
</head>
<body>
<h1>A1 Animation Art - Search</h1>
<p>Search our database of animation art by supplying the following details.</p>
<label>Title:</label><br>
  <input type="text" name="title" /><br><br>
<label>Studio:</label><br>
<select>
  <option value="any">Any</option>
  <option value="walt">Walt Disney Animation Studios</option>
  <option value="warner">Warner Brothers Animation</option>
  <option value="hannah">Hannah Barbera</option>
  <option value="20">20th Century Fox Television</option>
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
</body>
</html>