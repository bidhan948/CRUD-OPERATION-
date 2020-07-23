<?php

include 'dbconn.php';
$id = $_GET['id'];

$selectquery = " select * from staffreport where Cid = $id";
$query = mysqli_query($con, $selectquery);
$result = mysqli_fetch_assoc($query);

$deletequery = "Delete from staffreport where Cid = $id  ";

$query = mysqli_query($con,$deletequery);

if ($query) {
?>
    <script>
        alert('डिलिट भयो');
    </script>
<?php
   

} else {
?>
    <script>
        alert('डिलिट भएन ');
    </script>
<?php
}

header('location:display.php');



?>