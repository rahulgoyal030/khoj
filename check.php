<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khoj";
session_start();


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `check`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        if($_POST['answer']==$row['answer']&&$row['id']==1)   // write the question name
        {
           
          $_SESSION["count"] = 2;
          //echo "hellooo";
          header('Location: level2.php'); 
        }
        


    }
                 // header('Location: level1.php');


}
 else {
             

}

mysqli_close($conn);
?>