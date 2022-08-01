<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => appcb
    $conn = mysqli_connect("localhost","root","","appcb");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    // Taking all 5 values from the form data(input)
    $first_name     = $_REQUEST['first_name'];
    $last_name      = $_REQUEST['last_name'];
    $address        = $_REQUEST['address'];
    $mobile         = $_REQUEST['mobile'];
    $email          = $_REQUEST['email'];
    $date_of_birth  = $_REQUEST['date_of_birth'];


    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO proforma ('$first_name','$last_name','$address','$mobile','$email','$date_of_birth') VALUES (?,?,?,?,?,?) ";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$first_name\n $last_name\n "
            . "$address\n $mobile\n $email\n $date_of_birth");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>