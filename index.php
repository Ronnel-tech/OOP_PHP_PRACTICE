<?php 

require('creating_classes.php');
?>
<?php 
$names = new Product();

$first_name = $names -> fname;
$last_name = $names -> lname;

echo($first_name . ' '. $last_name);

?>