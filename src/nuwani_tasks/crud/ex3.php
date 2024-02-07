<?php
$title="Exercise 3:Variable Strings & Operators";
include 'header.php';?>

<h3>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the 
    echo statement to print “Hello [Firstname] 
    [Lastname], You are welcome to my site.” inside an h3 tag. Table & Form Guide</h3>

<form method="post" action="process1.php">
   Firstname:<input type="text" name="Firstname" required> <br><br>
   Lastname:<input type="text" name="Lastname" required><br><br>
   <input type="submit"  value="Submit">
</form>

<h3>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h3>
<?php
    $g1=5;
    $g2=4;
    $g3=5;
    ?> 
<div class="row"></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><?php echo $g1 ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><?php echo $g2 ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><?php echo $g3 ?></td>
    </tr>
  </tbody>
</table>

<h3>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>
<?php
$str1 = "Hello"; 
$str2 = "World";
$joinedString = $str1 . $str2;
echo "Joined String: " . $joinedString . "<br>";
echo "Length of Joined String: " . strlen($joinedString);
?>

<h3>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables 
    to store these numbers and an echo statement to output your answer.</h3>

<?php

$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "Sum of the numbers: " . $sum;
?>

<h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER). 
    Predefined Variables</h3>
<?php 
    echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT']."<br>"; 
?>

<h3>3.8 File Modification Time: Write a PHP script in the footer section of 
    your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & 
    date function to print the date and time Predefined Variables</h3>


<?php include 'footer.php'; ?>