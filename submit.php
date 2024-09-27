<?php

$first_name = $_POST ["First_name"];
$last_name = $_POST["Last_name"];
$email = $_POST["Email"];
$password = $_POST["Password"];
$date = $_POST["Date"];
$yearlvl = $_POST["Year-level"];

echo "checkbox" . json_encode ($_POST["checkbox"]);

echo "first name: ". $first_name ."<br>";
echo "last name: ". $last_name ."<br>";
echo "email: ". $email ."<br>";
echo "password:". $password ."<br>";
echo "date: ". $date ."<br>";
echo "yearlvl:". $yearlvl ."<br>";



?>