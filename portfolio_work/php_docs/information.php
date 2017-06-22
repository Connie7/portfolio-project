<?php

include "connection.php";
include 'header.php';

$id = $_GET['timetables_routes_id'];

 $select_query = "SELECT * FROM information WHERE timetables_routes_id = '$id'";

$result = mysqli_query($conn, $select_query);

if (mysqli_num_rows($result) > 0) {
// output data of each row
    while ($row = mysqli_fetch_assoc($result)) { ?>

<div class="container">



    <?php echo $row['Information'] ?>

</div>


    <?php }


}







