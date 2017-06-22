<?php


$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "buses_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT id, start_point, time , end_point, FROM timetables_routes";
// echo $result = mysqli_query($conn, $sql);
//
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["id"]. " - Start_Point: " . $row["start_point"]. " " . $row["time"]." ".$row["end_point"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//
//$select_query = "SELECT * FROM buses_info";
//
//$result = mysqli_query($conn, $select_query);


?>