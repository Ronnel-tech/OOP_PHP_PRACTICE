<?php 

require('creating_classes.php');
?>
<?php 
$names = new Product();

$first_name = $names -> fname;
$last_name = $names -> lname;

echo($first_name . ' '. $last_name);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="first_name" placeholder="Enter your First name"> <br>

        <br>
    
        <input type="text" name="last_name" placeholder="Enter your last name"> 

        <button ></button>
    </form>
</body>
</html>