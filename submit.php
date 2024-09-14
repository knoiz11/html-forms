<?php

$first_name = $_POST ["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$yearlvl = $_POST["year-level"];

echo "checkbox" . json_encode ($_POST["checkbox"]);

echo "first name: ". $first_name ."<br>";
echo "last name: ". $last_name ."<br>";
echo "email: ". $email ."<br>";
echo "password:". $password ."<br>";
echo "date: ". $date ."<br>";
echo "yearlvl:". $yearlvl ."<br>";



?>