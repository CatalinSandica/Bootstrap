<?php
//$q = intval($_GET['q']);
//$p = intval($_GET['p']);

$con = mysqli_connect('localhost','root','','exampledb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user WHERE id = '".$q."'";

$sql = "SELECT id, nume, prenume FROM user WHERE nume='{$_GET['q']}' AND parola='{$_GET['p']}'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo "1";

} else {
echo "0";
}

mysqli_close($con);
?>
