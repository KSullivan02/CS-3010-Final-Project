<?php
// Define variables
$lastNameErr = $userNameErr = $firstNameErr = $emailErr = $genderErr = $passwordErr = $confPassErr = $address1Err = $address2Err = $zipErr = $cityErr = $stateErr = $phoneErr = $maritalErr = $birthErr = "";
$lastName = $userName = $firstName = $email = $gender = $password = $confPass = $address1 = $address2 = $zipCode = $city = $state = $phone = $maritalStatus = $dateOfBirth = "";
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

    $nameRegex = "/^[a-zA-Z0-9]{0,50}$/";
    $firstName = clean_input($_POST["firstName"]);
    if (empty($firstName)) {
        $firstNameErr = "First Name is Required";
        $isValid = false;
    } else {
        if (!preg_match($nameRegex , $firstName)) {
            $firstNameErr = "First Name must be less than 50 characters";
            $isValid = false;
        }
    }

    $lastName = clean_input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastNameErr = "Last Name is Required";
        $isValid = false;
    } else {
        if (!preg_match($nameRegex, $lastName)) {
            $lastNameErr = "Last Name must be less than 50 characters";
            $isValid = false;
        }
    }

    $addRegex = "/^[a-zA-Z0-9\s]{0,100}$/";
    $address1 = clean_input($_POST["address1"]);
    if (empty($address1)) {
        $address1Err = "Address is Required";
        $isValid = false;
    } else {
        if (!preg_match($addRegex, $address1)) {
            $address1Err = "Address must be less than 100 characters, please use address line two if needed";
            $isValid = false;
        }
    }

    $address2 = clean_input($_POST["address2"]);
    if (!preg_match($addRegex, $address2)) {
        $address2ErrErr = "Address must be less than 100 characters, please use address line two if needed";
        $isValid = false;
        }

    $cityRegex = "/^[a-zA-Z0-9\s]{0,50}$/";
    $city = clean_input($_POST["city"]);
    if(empty($city)) {
        $cityErr = "City is Required";
        $isValid = false;
    } else {
        if(!preg_match($cityRegex , $city)) {
            $cityErr = "City must be less than 50 characters";
            $isValid = false;
        }
    }


    $state = clean_input($_POST["state"]);
    if (empty($state)) {
        $stateErr = "Please select a state";
    } else {
        if(strlen($state) > 52) {
            $stateErr = "State must be less than 52 characters";
            $isValid = false;
        }
    }

    $zipRegex = "/^[0-9]{5}(-[0-9]{4})?$/";
    $zipCode = clean_input($_POST["zipCode"]);
    if (empty($zipCode)) {
        $zipErr = "Please enter a Zipcode";
        $isValid = false;
    } else {
        if(!preg_match($zipRegex , $zipCode)) {
            $zipErr = "Zipcode must be in the format of xxxxx or xxxxx-xxxx";
            $isValid = false;
        }
    }

    $phoneRegex = "/^[0-9]{3}(-[0-9]{3})(-[0-9]{4})?$/";
    $phone = clean_input($_POST["phoneNumber"]);
    if (empty($phone)) {
        $phoneErr = "Please enter a phone number";
        $isValid = false;
    } else {
        if(!preg_match($phoneRegex , $phone)) {
            $phoneErr = "Please enter a valid phone number with format of xxx-xxx-xxxx";
            $isValid = false;
        }
    }

    $emailRegex = "/\S+@\S+\.\S+/";
    $email = clean_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Please enter an email address";
        $isValid = false;
    } else {
        if(!preg_match($emailRegex , $email)) {
            $emailErr = "Please enter a valid email address";
            $isValid = false;
        }
    }

    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $isValid = false;
        } else {
            if (strlen($gender) > 50) {
                $genderErr = "Gender must be less than 50 characters";
                $isValid = false;
            }
        }
    } else {
        $genderErr = "Gender is required";
        $isValid = false;
    }

    if (isset($_POST["maritalStatus"])) {
        $maritalStatus = clean_input($_POST["maritalStatus"]);
        if (empty($_POST["maritalStatus"])) {
            $maritalErr = "Marital Status is required";
            $isValid = false;
        } else {
            if (strlen($maritalStatus) > 50) {
                $maritalErr = "Marital Status must be less than 50 characters";
                $isValid = false;
            }
        }
    } else {
        $maritalErr = "Marital Status is required";
        $isValid = false;
    }

    // Couldn't figure this out no matter what I did, and swapping to the confirmation page undoes my attempt at reformatting useing the Date function
    $dateOfBirth = clean_input($_POST["birthday"]);
    if (!empty($dateOfBirth)) {
        $dateOfBirth = date("m-d-y" , strtotime($dateOfBirth));
    }
    if (empty($dateOfBirth)) {
        $birthErr = "Please select a date of birth";
        $isValid = false;
    }

}

function clean_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data); }



