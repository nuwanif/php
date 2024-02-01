<?php
$title="Exercise 4:Control flow and loops";
include 'header.php';?>

<div class="row"></div> <br><br>

<h3>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is 
    eligible for voting. (18 or more than 18 years is eligible for voting).</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age ">Age:</label>
        <input type="number" id="age" name="age" required>

        <button type="submit">Check Eligibility</button>
    </form>
    <!-- #region -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($age >= 18) {
            // Check eligibility
 
            echo "<p>Hello, You are eligible for voting </p>";
        } else {
            echo "<p>You are not eligible for voting</p>";
        }
    }

    ?>
    <h3>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the 
        following responses, depending on whether it's August or not:</h3>
    <?php
    $currentMonth = date("F");
    switch ($currentMonth) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth so I don't have any holidays.";
        break;
    }
    ?>
    
    <h3>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n).</h3>

<form method="POST"> 
            Enter a number:  
            <input type="text" name="number"> 
              
            <input type="Submit" 
                value="Get Multiplication Table"> 
</form> 
  
<?php 
if($_POST) { 
    $num = $_POST["number"]; 
  
    echo nl2br("<p style='text-align: center;'> 
        Multiplication Table of $num: </p> 
    "); 
          
    for ($n= 1; $n<= 10; $n++) { 
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$n" . " = " 
            . $num * $n . "</p> 
        "); 
    } 
} 
?>

<h3>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n.</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Print Numbers</button>
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $n = isset($_POST["number"]) ? intval($_POST["number"]) : 0;
        echo "<ul>";

        $i = 1;
        while ($i <= $n) {
            echo "<li>$i</li>";
            $i++;
        }

        echo "</ul>";
    }

    ?>

    <h3>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>

    <?php 
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

// Display all elements of the array using a foreach loop
echo "<p>Array elements:</p>";
echo "<ul>";

foreach ($myarray as $element) {
    echo "<li>$element</li>";
}

echo "</ul>";
?>


<?php include 'footer.php'; ?>