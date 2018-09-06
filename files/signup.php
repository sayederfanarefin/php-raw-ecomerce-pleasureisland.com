<?php
    

    $servername="ap-cdbr-azure-southeast-a.cloudapp.net";
    $username="b7ef716311213b";
    $dbname="PleasureIsland";
    $password="e4719998";
    
    //$servername = "localhost";
    //$username = "pleasureisU0nqx";
    //$password = "}zg8rO-6P/\$)";
    //$dbname="pleasureisland";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "connected";
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
 
    $sql = "INSERT INTO users (name, password, email)
            VALUES ('$name', '$pass', '$email')";
    

    if(mysqli_query($conn, $sql)){

        $er = $conn->query($sql);
        header ('Location: /2index.php');
    }
    else{
        header ('Location: /index.php');
    }

    mysql_close($conn);
?>
