<?<php
$_SERVERname ="localhost";
$username"root";
$password="";

$conn =new mysqil($_SERVERname, $username, $password,$dbname);
if($conn->connect_error) {
    die("connect failed:" . $conn-connect_error);
}

if($_SERVER["REQEST_METHOD"]=="POST") {
    $name =mysqil_real_escape_string($conn, $POST['name']);
    $name =mysqil_real_escape_string($conn, $POST['email']);
    $name =mysqil_real_escape_string($conn, $POST['contact']);

    $sql ="INSERT INTO mycontact(name, email, contact) VALUES"('$name','$email', 'contact')";
    
    if($conn->query($ql) == TRUE){
        echo "Data inserted successfully";
    } else {
        echo"Error:".$conn->error;
    }
}
            
    $conn->close();
?>