<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $db = 'minduq';

   // Create connection
   $conn = new mysqli($servername, $username, $password ,$db);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

    if(isset($_POST))
   {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];


       $sql = "INSERT INTO bookings (name, email, phone,address,location,guests, arrivals,leaving)
         VALUES ('{$name}', '{$email}', '{$phone}','{$address}','{$location}','{$guests}', '{$arrivals}', '{$leaving}')";

         if ($conn->query($sql) === TRUE) {
           echo "Booking request has been sent successfully!.";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }

   }

?>