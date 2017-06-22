<?php
include 'connection.php';
include 'header.php';



    if (isset($_GET['Start_Point']) && $_GET['Bus_No']  && $_GET['Time'] && $_GET['End_Point'] ==='select') {

    $id = $_GET['id'];
    $start_point = $_GET['Start_Point'];
    $bus_no = $_GET['Bus_No'];
    $time = $_GET['Time'];
    $end_point = $_GET['End_Point'];

        $delete_query = "SELECT FROM information WHERE id = $id";

        $result = mysqli_query($conn, $delete_query);




    }

     $select_query = "SELECT * FROM timetables_routes";

    $result = mysqli_query($conn, $select_query);
?>

    <div class="container">
        <table class="table">
            <thead>

            <tr>
                <td>Id</td>
                <td>Start Point</td>
                <td>Bus No</td>
                <td>Time</td>
                <td>End Point</td>
                <td>Info Slide</td>

            </tr>
            </thead>
            <tbody>

    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['Start_Point'] ?></td>
                <td><?php echo $row['Bus_No'] ?></td>
                <td><?php echo $row['Time'] ?></td>
                <td><?php echo $row['End_Point'] ?></td>

                <td><a href="information.php?timetables_routes_id="<?php echo $row['id']?>>Information</td>




            </tr>
            <?php
        }
    }
    ?>

            </tbody>
        </table>

