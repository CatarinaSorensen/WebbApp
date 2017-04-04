<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Art</title>
</head>
<body>
<h1>A1 Animation Art - Search</h1>
<p>Search results are presented below.</p>
<table border="1">
 <tr>
 <th>Artwork ID</th>
 <th>Title</th>
 <th>Studio</th>
 <th>Type</th>
 <th>Year</th>
 <th>Price</th>
 </tr>
<?php
$link = mysqli_connect('localhost', 'student', 'mmst12009','assignment3');
$query = "SELECT artwork_id, artwork_title, studio_id, artwork_type, artwork_year, artwork_price FROM artworks";
$result = mysqli_query($link, $query);
mysqli_close($link);
while ($row = mysqli_fetch_array($result)) {
 $art_id = $row['artwork_id'];
 $art_title = $row['artwork_title'];
 $art_studio = $row['studio_id'];
 $art_type = $row['artwork_type'];
 $art_year = $row['artwork_year'];
 $art_price = $row['artwork_price'];
 echo <<<END
 <tr>
 <td>$art_id</td>
 <td>$art_title</td>
 <td>$art_studio</td>
 <td>$art_type</td>
 <td>$art_year</td>
 <td>$art_price</td>
 </tr>
END;
}
?>
</table>
</body>
</html>