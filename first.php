<html>
<body>
<?php
$myfile = fopen("abc.txt", "w") or die("Unable to open file!");
$text=$_POST["title"];
fwrite($myfile,$text);

?>
<h3>TITLE:</h3>
<?php 
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("abc.txt"));
fclose($myfile);
?>

<?php
$myfile = fopen("review.txt", "w") or die("Unable to open file!");
$text=$_POST["review"];
fwrite($myfile,$text);

?>
<h3>REVIEW:</h3>
<?php 
$myfile = fopen("review.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("review.txt"));
fclose($myfile);
?>
<form action="form.html" method="post">
<input type="submit" value="update" >
</form>
</body>

</html>
