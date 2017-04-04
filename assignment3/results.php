<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Art</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
$title = $_POST['title'];
$studio = $_POST['studio'];
$link = mysqli_connect('localhost', 'student', 'mmst12009','assignment3');
$query = "SELECT artworks.artwork_id, artworks.studio_id, artworks.artwork_type, artworks.artwork_year, artworks.artwork_price, artworks.artwork_title, studios.studio_name FROM artworks INNER JOIN studios ON artworks.studio_id = studios.studio_id WHERE 1=1";
if ($studio!="any"){
 $query = $query . " AND artworks.studio_id = '$studio'";
}
if ($title!=null){
  $query = $query . " AND artwork_title = '$title'";
}
$result = mysqli_query($link, $query);
mysqli_close($link);
while ($row = mysqli_fetch_array($result)) {
 $art_id = $row['artwork_id'];
 $art_title = $row['artwork_title'];
 $art_studio = $row['studio_name'];
 $art_type = $row['artwork_type'];
 $art_year = $row['artwork_year'];
 $art_price = "$" . $row['artwork_price'];
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