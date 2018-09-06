$servername = "localhost";
$username = "pleasureisU0nqx";
$password = "}zg8rO-6P/\$)";
$dbname="pleasureisland";
    
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "connected";
}