<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >
<li>Book ID:</li><li><input type="text" name="bookid" /></li>
<li>Book Name:</li><li><input type="text" name="book_name" /></li>
<li>Author:</li><li><input type="text" name="author" /></li>
<li>Publisher:</li><li><input type="text" name="publisher" /></li>
<li>Date of publication:</li><li><input type="text" name="dop" /></li>
<li>Price (USD):</li><li><input type="text" name="price" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body>
</html>
<?php
/*$connect_url = 'host='. $_GET['dbhost'] . ' port=' . $_GET['dbport'] . ' dbname=' . $_GET['dbname'] . ' user=' . $_GET['dbuser'] . ' password=' . $_GET['dbpass'];
*/
$connect_url = 'host=mycluster.crunchydata.svc port=5432 dbname=userdb user=postgres password=SLh6Guv0qa'
echo "<br><br>Query URL = '$connect_url' <br><br>";

$db = pg_connect($connect_url);
$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
'$_POST[author]','$_POST[publisher]','$_POST[dop]',
'$_POST[price]')";
$result = pg_query($query); 
?>
