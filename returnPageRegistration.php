<?php

    $servername = "localhost:3306";
    $username = "steshano_19stesha69";
    $password = "aceInHole17";
    $dbname = "steshano_aceInTheHole";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    
    // ASSIGN DATA TO VARIABLES FOR EASIER HANDLING
    $users_name = $_POST['firstLastName'];
    $users_email = $_POST['email'];
    $users_phoneNumber = $_POST['phoneNumber'];
    $users_emergencyPhoneNumber = $_POST['emergencyPhoneNumber'];
    $users_eventSaturday = $_POST['eventSaturday'];
    $users_eventSunday = $_POST['eventSunday'];

    //escape vaiables for security
    $users_name = mysqli_real_escape_string($conn, $_POST['firstLastName']);
    $users_email = mysqli_real_escape_string($conn, $_POST['email']);
    $users_phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $users_emergencyPhoneNumber = mysqli_real_escape_string($conn, $_POST['emergencyPhoneNumber']);
        
  
  // At this point, we've grabbed all of the data that we need. We now need
  // to update our SQL query. For example, instead of "John Smith", we'll
  // use $users_name. Below is our updated SQL command:
  $sql = "
  INSERT INTO `registration` (`name`, `email`, `phoneNumber`, `emergencyContactPhoneNumber`,
  `eventSaturday`, `eventSunday`) VALUES ('$users_name', '$users_email', '$users_phoneNumber', '$users_emergencyPhoneNumber',
  '$users_eventSaturday', '$users_eventSunday' )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
   }    
        
  echo

    "<h1>Thank you for registering with us, " . $users_name . "!</h1><br>
    <h2><a href='aceInTheHole_index.html.php'>Return to home page</a></h2>";
      
  $conn->close();
        
?>

   