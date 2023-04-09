<?php
// Define variables
$lNameErr = $userNameErr = $fNameErr = $emailErr = $genderErr = $passwordErr = $confPassErr = $addressErr = $addTwoErr = $zipErr = $cityErr = $stateErr = $phoneErr = $maritalErr = $birthErr = "";
$lName = $userName = $fName = $email = $gender = $password = $confPass = $address = $addTwo = $zip = $city = $state = $phone = $marital = $birth = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    $userName = clean_input($_POST["userName"]);
    if (empty($userName)) {
        $userNameErr = "Username is required";
        $isValid = false;
    } else {
        if (strlen($userName) < 6 || strlen($userName) > 50) {
            $userNameErr = "Please make your User Name greater than 6 characters and less than 50";
            $isValid = false;
        }
    }

    $passwordRegex = "^\S*(?=\S{8,50})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$^";
    $password = clean_input($_POST["password"]);
    if (empty($password)) {
        $passwordErr = "Password is required.";
        $isValid = false;
    } else {
        if (!preg_match($passwordRegex, $password)) {
            $passwordErr = "Must contain at least 8 characters.
                                Must Be less than 50 characters.Must contain a capital letter, 
                                lowercase letter, one digit, and one special character.";
            $isValid = false;
        }
    }

    $confPass = clean_input($_POST["confPassword"]);
    if(empty($confPass)) {
        $confPassErr = "Please confirm your password!";
        $isValid = false;
    } else {
        if($confPass !== $password) {
            $confPassErr = "Passwords do not match";
            $isValid = false;
        }
    }


}

function clean_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data); }



