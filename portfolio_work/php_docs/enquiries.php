
<?php
include 'connection.php';
include 'header.php';

$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
        if (preg_match("/[^A-Za-z'-]/",$_POST['name'])) {

        }
        echo "invalid name , please re-enter your name.";
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
// check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    

}

    $insert_query = "INSERT INTO  enquiries (Name, Email, Message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn, $insert_query);


?>


<div id="wrapper" class="cc-content-parent">

    <div class = "container">

        <div class="row">

            <div class="one-half column">


            </div>
            <div class="one-half column">


                <div id="cc-m-5530606413" class="j-module n j-text "><p>
                    <p>
                        <strong><span style="color: #00a631;">Feedback and Enquiries: <span style="color: #333333;">0800 65 64 63</span></span></strong>
                    </p>


                    <p>
                        <span style="color: #00a631;"><strong>If you would like us to get back to you via email, please fill in the form below</strong></span>
                    </p></div><div id="cc-m-5662142713" class="j-module n j-formnew ">

                    <p><span class="error">* required field.</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="cc-m-form-loading"></div>

                        <form class="cc-m-form-view-sortable">
                            <div class="cc-m-form-view-element cc-m-form-text " data-action="element">

                                <label for="m904f093f8f22fda00">
                                    <div>Name</div>
                                </label>
                                <div class="cc-m-form-view-input-wrapper">
                                    <input type="text" name="name" value=""  style="width: 50%;"/>
                                    <span class="error">* <?php echo $nameErr;?></span>
                                    <br><br>
                                </div>

                            </div>

                            <div class="cc-m-form-view-element cc-m-form-email cc-m-required" data-action="element">
                                <label for="m904f093f8f22fda01">
                                    <div>Email Address</div>
                                </label>
                                <div class="cc-m-form-view-input-wrapper">
                                    <input type="email" autocorrect="off" autocapitalize="off" name="email" value="" style="width: 50%;" id="m904f093f8f22fda01"/>
                                    <span class="error">* <?php echo $emailErr;?></span>
                                    <br><br
                                </div>
                            </div>

                            <div class="cc-m-form-view-element cc-m-form-textarea cc-m-required" data-action="element">
                                <label for="m904f093f8f22fda02">
                                    <div>Message</div>
                                </label>
                                <div class="cc-m-form-view-input-wrapper">
                                    <textarea name="message" rows="6" style="width: 100%;" ></textarea>
                                    <span class="error">* <?php echo $messageErr;?></span>
                                    <br><br>
                                </div>

                            </div>
                            <input type="submit" class="btn btn-success" name="submit" value="Submit">
                        </form>
                </div>

            </div>
        </div>

        </div>
        <?php
        include 'footer.php';
        ?>







