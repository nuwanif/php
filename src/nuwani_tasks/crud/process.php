<?php

//what to do with the data.isset will take only added info.it will check before sumitting are there oxes empty
if (isset($_POST['submit'])) {

 $fname = $_POST['fname'];//code name
 $lname = $_POST['lname'];
 $city = $_POST['city'];
 $groupid = $_POST['groupid'];

// connect to the database server .refer db.php
include 'db.php';

//write a sql statement to insert data
$sql = "insert into studentinfo (first_name,last_name,city,groupId)  
       values ('$fname','$lname','$city','$groupid')";  //same as local host 85 the one created table


       
if ($conn->query($sql)=== TRUE) {

    echo "Your data was recorded";

}
else {
   echo "Error"; $sql . "<br>" .$conn->error;
}
//close the database connection connection


$conn->close();
}




?>