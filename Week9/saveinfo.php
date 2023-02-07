<?php
$fullName = filter_input(INPUT_POST, 'fullname');
$emailUsed = filter_input(INPUT_POST, 'email');

if (!empty($fullName)){
    if (!empty($emailUsed)){

        $host = "localhost";
        $dbusername = "webprogmi211";
        $dbpassword = "webprogmi211";
        $dbname = "webprogmi211";

        // connections are inputted below //

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}else{
    $sql = "INSERT INTO anvillaflor_MyGuests (fullname, email,)
    values ('$fullname', '$email')";
    if ($conn->query($sql)){
        echo "New Record has been added.";
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    } 
    $conn->close();
    }

    }else{
        echo "Email is EMPTY, Please TRY AGAIN.";
        die();
    }
}else{
    echo"Name is REQUIRED, Please TRY AGAIN.";
}
?>