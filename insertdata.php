
    <?php
$servername = "localhost";
$username = "u395489161_netbugsdb";
$password = "Netbugs@1402";
$dbname = "u395489161_netbugsdb";

// Create connection
$conn =  mysqli_connect("localhost","u395489161_netbugsdb","Netbugs@1402","u395489161_netbugsdb");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error);
}
       

        // Taking all 5 values from the form data(input) 

        
        $firstname = $_REQUEST['firstname'];
        $middlename = $_REQUEST['middlename'];
        $lastname = $_REQUEST['lastname'];
        $course = $_REQUEST['course'];
        $yearofgraduation = $_REQUEST['yearofgraduation'];
        $status = $_REQUEST['status'];
        $dateofbirth = $_REQUEST['dateofbirth'];
        $gender = $_REQUEST['gender'];
        $phoneno = $_REQUEST['phoneno'];
        $currentaddress = $_REQUEST['currentaddress'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO netbugsRegistration VALUES ('$firstname','$middlename','$lastname','$course','$yearofgraduation','$status','$dateofbirth','$gender','$phoneno','$currentaddress')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$firstname\n $middlename\n $lastname\n "
                . "$gender\n $currentaddress\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    