<?php
include  'connection.php';
include 'header.php';



$BusErr = $RateErr = $DateErr = "";
if($_POST["busNo"] ||$_POST["rating"] || $_POST["date"]) {
//insert a new enquiries info in the table


$busNo = $_POST['busNo'];
$rate = $_POST['rating'];
$date = $_POST['date'];

    if(empty($busNo)) {
        $msgBus = '<span class="error"> Please enter a value</span>';
    } else if(!is_numeric($busNo)) {
        $BusErr = '<span class="error"> Data entered was not numeric</span>';

    } else if(empty($rate)) {
        $msgRate = '<span class="error">Please enter a value</span>';
    } else if(!is_numeric($rate)) {
        $RateErr = '<span class="error"> Data entered was not numeric</span>';



    } else {
        /* Success */
    }


$insert_query = "INSERT INTO  rate (Bus_No,rating, Date)  VALUES ('$busNo','$rate','$date')";
$result = mysqli_query($conn, $insert_query);

}
?>

<div class="container">


    <nav>
            <div class="row">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="columns six">

                    <p><span class="error">* required field.</span></p>
                    <p class="driver">Rate driver:</p>


                    <form>

                        <div class="row">

                            <div class="four columns">
                                <label >Bus No</label>
                                <input class="u-full-width" type="text" name="busNo">
                                <span class="error">* <?php echo $BusErr;?></span>
                            </div>

                            <div class="four columns">
                                <label >Rate out of 5:</label>
                                <input class="u-full-width" type="text" name="rating">
                                <span class="error">* <?php echo $RateErr;?></span>
                            </div>

                            <div class="four columns">
                                <label>Date</label>
                                <input class="u-full-width" type="date" name="date">

                            </div>
                        </div>

                        <input class="button-primary" type="submit" name="submit" value="Submit">
                    </form>

                </div>
                </form>
            </div>
    </nav>
    </div>

<?php
include 'footer.php';
?>


