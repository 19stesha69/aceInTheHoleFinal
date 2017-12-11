<!DOCTYPE HTML>

<!--
File Name: returnPageContact.html.php
Date: 12/4/17
Programmer: Stesha Norstrom
-->

<html>
    
<head>
    
<title>Ace in the Hole Multisport Event</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Stesha Norstrom">
    
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700" rel="stylesheet">
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">  
<link href="css/navigation.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.1/less.min.js"></script>-->
    
    
</head>    
    
<body>
    
    <?php include "includes/header.php";?>    

<main id="contactPageReturn">

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
    $users_participationStatus = $_POST['participationStatus'];
    $users_comment = $_POST['comment'];

    //escape vaiables for security
    $users_name = mysqli_real_escape_string($conn, $_POST['firstLastName']);
    $users_email = mysqli_real_escape_string($conn, $_POST['email']);
    $users_participationStatus = mysqli_real_escape_string($conn, $_POST['participationStatus']);
    $users_comment = mysqli_real_escape_string($conn, $_POST['comment']);
        
  
  // At this point, we've grabbed all of the data that we need. We now need
  // to update our SQL query. For example, instead of "John Smith", we'll
  // use $users_name. Below is our updated SQL command:
  $sql = "
  INSERT INTO `contact` (`name`, `email`,
  `participationStatus`, `comment`) VALUES ('$users_name', '$users_email',
  '$users_participationStatus', '$users_comment')";


  if ($conn->query($sql) === TRUE) {
    echo "<p style='font-size: 1.25em'>New record created successfully</p>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }    
        
  echo

    "<p style='font-size: 2em'>Thank you for contacting us, " . $users_name . "!</p><br>
    <p style='font-size: 1.5em'><a href='aceInTheHole_index.html.php'>Return to home page</a></p>";
      
 $conn->close();
        
?>
    
</main>
    
<?php include "includes/footer.php";?>
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/navigation.js"></script>

</body>

</html>
    

   