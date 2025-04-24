#Multi-line Comments
<!DOCTYPE html>
<html>
<body>

<?php
/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";
?>
 
</body>
</html>


#Multi-line Comments to Ignore Code
<!DOCTYPE html>
<html>
<body>

<?php
/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!";
?>
 
</body>
</html>


#Comments in the Middle of the Code
<!DOCTYPE html>
<html>
<body>

<p>Using comments to ignore parts of a code line:</p>
 
<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>
 
</body>
</html>
