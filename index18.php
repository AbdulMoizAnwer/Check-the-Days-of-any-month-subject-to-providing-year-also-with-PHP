<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month in Days</title>
</head>
<body>
    <!-- Write a program in php to read any Month Number in integer and display the number of days for this month. Go to the editor
    Test Data :
    7
    Expected Output :
    Month have 31 days -->
    <h1>Find Any Month Containing How Many Number of Days.</h1>
    <form action="#" method="POST">
        <label>Enter Month in the number form.</label>
        <input type="text" name="n1">
        <label>Enter Year.</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $month = cal_days_in_month(CAL_GREGORIAN, $n1, $n2);
    echo "The number of days in the provided month and year is " . $month;    
        }
?>
