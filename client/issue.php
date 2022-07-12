<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elms";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    echo "";
} else {
    die("Connection failed because " . mysqli_connect_error());
}
error_reporting(0);
?>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>



    <div>
        <form action="issue.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name">

            <label for="issue">Issue</label>
            <input type="text" name="message" placeholder="Issues">
            

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php
    if (!empty($_POST["submit"])) {
        $customer_id = time() / 10;
        $random = (int) $customer_id;
        $customer_id = $random;
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $msg = $_POST['message'];
        

        $d_id = 0;
        $query = "INSERT INTO issues (First_name,Last_name,Message) VALUES ('$fname','$lname','$msg')";

        $data = mysqli_query($conn, $query);

        mysqli_query($conn, $sql);
        if ($data) {
            echo "<p style='color:white;margin-left:600px;font-size:30px;'>Data inserted into the database</p>"; ?>
            <!--<META HTTP-EQUIV="refresh" CONTENT="0; 
URL='http://localhost/ANSS/tester2.php?email_id=<?php echo $email_id ?>&addr=<?php echo $addr ?>&name=<?php echo $name ?>';">-->
    <?php } else {
            echo ("Error description: " . mysqli_error($conn));
        }
    }
    ?>

</body>

</html>