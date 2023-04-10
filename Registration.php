<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/mySheet.css">

    <style>

        input {
            color: black;
        }

        label {
            display: inline-block;
            width:130px;
        }

        select {
            color: black;
            padding: 1px 2px;
            height: 26px;
            width: 178px;
        }

        body {
            background-image: url("images/witchQueen.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-color:black;
        }

    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homePage.html"> <img src = "images/destiny2logo.png" alt = "Destiny Logo" width = "25" height = "25"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="homePage.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="animations.html">Animations</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="Registration.html"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="lostSector.html">Lost Sectors</a></p>
            <p><a href="wellSpring.html">Wellspring Weapon</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-middle">
            <h1>Registration</h1>
            <p>Register for Alerts about specific vendor items</p>
            <?php
            include 'PHP/inputValidate.php';
            ?>
            <hr>
            <form id = "myForm" method="POST" novalidate onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for = "userName">User Name:</label><br>
                <input type = "text" id = "userName" name = "userName"
                       value="<?php echo $userName; ?>" required oninput="return validUsername()"/><br>
                <span class="error"><?php echo $userNameErr;?></span><br>

                <div id="passDiv" class="form-group">
                <label for = "password">Password:</label><br>
                <input type = "password" id = "password" name = "password"
                       value="<?php echo $password; ?>"required oninput="return validPassword()"/><br>
                    <span class="error"><?php echo $passwordErr;?></span><br>

                </div>
                <label for = "confPassword">Confirm Password:</label><br>
                <input type = "password" id = "confPassword" name = "confPassword"
                       value="<?php echo $confPass; ?>" required oninput="return validConfPassword()"/><br>
                <span class="error"><?php echo $confPassErr;?></span><br>

                <!--First Name-->
                <label for = "firstName">First Name:</label><br>
                <input type = "text" id = "firstName" name = "firstName"
                       value="<?php echo $fName; ?> "required oninput="return validFName()"/><br>
                <span class="error"><?php echo $fNameErr;?></span><br>

                <!--Last Name-->
                <label for = "lastName"> Last Name:</label><br>
                <input type = "text" id = "lastName" name = "lastName"
                       value="<?php echo $lName; ?> " required oninput="return validLName()"/><br>
                <span class ="error"><?php echo $lNameErr;?> </span><br>

                <label for = "address1">Address Line 1:</label><br>
                <input type = "text" id = "address1" name = "address1"
                       value="<?php echo $address; ?> " required oninput="return validAddress()"><br>
                <span class ="error"><?php echo $addressErr;?> </span><br>

                <label for = "address2">Address Line 2:</label><br>
                <input type = "text" id = "address2" name = "address2"
                       value="<?php echo $addTwo; ?> "><br>
                <span class ="error"><?php echo $addTwoErr;?> </span><br>

                <label for = "city">City:</label><br>
                <input type = "text" id = "city" name = "city"
                       value="<?php echo $city; ?> "required oninput="return validCity()"><br>
                <span class ="error"><?php echo $cityErr;?> </span><br>


                <label for = "state">  State:</label><br>
                <select name="state" id="state"value="<?php echo $state ?? '';?>">
                    <option hidden value="">Chose State</option>
                    <option value="AL"<?php echo $state === 'AL' ? 'selected' : ''; ?>> Alabama </option>
                    <option value="AK"<?php echo $state === 'AK' ? 'selected' : ''; ?>> Alaska </option>
                    <option value="AZ"<?php echo $state === 'AZ' ? 'selected' : ''; ?>> Arizona</option>
                    <option value="AR"<?php echo $state === 'AR' ? 'selected' : ''; ?>> Arkansas</option>
                    <option value="CA"<?php echo $state === 'CA' ? 'selected' : ''; ?>> California</option>
                    <option value="CO"<?php echo $state === 'CO' ? 'selected' : ''; ?>>Colorado</option>
                    <option value="CT"<?php echo $state === 'CT' ? 'selected' : ''; ?>>Connecticut</option>
                    <option value="DE"<?php echo $state === 'DE' ? 'selected' : ''; ?>>Delaware</option>
                    <option value="DC"<?php echo $state === 'DC' ? 'selected' : ''; ?>>District Of Columbia</option>
                    <option value="FL"<?php echo $state === 'FL' ? 'selected' : ''; ?>>Florida</option>
                    <option value="GA"<?php echo $state === 'GA' ? 'selected' : ''; ?>>Georgia</option>
                    <option value="HI"<?php echo $state === 'HI' ? 'selected' : ''; ?>>Hawaii</option>
                    <option value="ID"<?php echo $state === 'ID' ? 'selected' : ''; ?>>Idaho</option>
                    <option value="IL"<?php echo $state === 'IL' ? 'selected' : ''; ?>>Illinois</option>
                    <option value="IN"<?php echo $state === 'IN' ? 'selected' : ''; ?>>Indiana</option>
                    <option value="IA"<?php echo $state === 'IA' ? 'selected' : ''; ?>>Iowa</option>
                    <option value="KS"<?php echo $state === 'KS' ? 'selected' : ''; ?>>Kansas</option>
                    <option value="KY"<?php echo $state === 'KY' ? 'selected' : ''; ?>>Kentucky</option>
                    <option value="LA"<?php echo $state === 'LA' ? 'selected' : ''; ?>>Louisiana</option>
                    <option value="ME"<?php echo $state === 'ME' ? 'selected' : ''; ?>>Maine</option>
                    <option value="MD"<?php echo $state === 'MD' ? 'selected' : ''; ?>>Maryland</option>
                    <option value="MA"<?php echo $state === 'MA' ? 'selected' : ''; ?>>Massachusetts</option>
                    <option value="MI"<?php echo $state === 'MI' ? 'selected' : ''; ?>>Michigan</option>
                    <option value="MN"<?php echo $state === 'MN' ? 'selected' : ''; ?>>Minnesota</option>
                    <option value="MS"<?php echo $state === 'MS' ? 'selected' : ''; ?>>Mississippi</option>
                    <option value="MO"<?php echo $state === 'MO' ? 'selected' : ''; ?>>Missouri</option>
                    <option value="MT"<?php echo $state === 'MT' ? 'selected' : ''; ?>>Montana</option>
                    <option value="NE"<?php echo $state === 'NE' ? 'selected' : ''; ?>>Nebraska</option>
                    <option value="NV"<?php echo $state === 'NV' ? 'selected' : ''; ?>>Nevada</option>
                    <option value="NH"<?php echo $state === 'NH' ? 'selected' : ''; ?>>New Hampshire</option>
                    <option value="NJ"<?php echo $state === 'NJ' ? 'selected' : ''; ?>>New Jersey</option>
                    <option value="NM"<?php echo $state === 'NM' ? 'selected' : ''; ?>>New Mexico</option>
                    <option value="NY"<?php echo $state === 'NY' ? 'selected' : ''; ?>>New York</option>
                    <option value="NC"<?php echo $state === 'NC' ? 'selected' : ''; ?>>North Carolina</option>
                    <option value="ND"<?php echo $state === 'ND' ? 'selected' : ''; ?>>North Dakota</option>
                    <option value="OH"<?php echo $state === 'OH' ? 'selected' : ''; ?>>Ohio</option>
                    <option value="OK"<?php echo $state === 'OK' ? 'selected' : ''; ?>>Oklahoma</option>
                    <option value="OR"<?php echo $state === 'OR' ? 'selected' : ''; ?>>Oregon</option>
                    <option value="PA"<?php echo $state === 'PA' ? 'selected' : ''; ?>>Pennsylvania</option>
                    <option value="RI"<?php echo $state === 'RI' ? 'selected' : ''; ?>>Rhode Island</option>
                    <option value="SC"<?php echo $state === 'SC' ? 'selected' : ''; ?>>South Carolina</option>
                    <option value="SD"<?php echo $state === 'SD' ? 'selected' : ''; ?>>South Dakota</option>
                    <option value="TN"<?php echo $state === 'TN' ? 'selected' : ''; ?>>Tennessee</option>
                    <option value="TX"<?php echo $state === 'TX' ? 'selected' : ''; ?>>Texas</option>
                    <option value="UT"<?php echo $state === 'UT' ? 'selected' : ''; ?>>Utah</option>
                    <option value="VT"<?php echo $state === 'VT' ? 'selected' : ''; ?>>Vermont</option>
                    <option value="VA"<?php echo $state === 'VA' ? 'selected' : ''; ?>>Virginia</option>
                    <option value="WA"<?php echo $state === 'WA' ? 'selected' : ''; ?>>Washington</option>
                    <option value="WV"<?php echo $state === 'WV' ? 'selected' : ''; ?>>West Virginia</option>
                    <option value="WI"<?php echo $state === 'WI' ? 'selected' : ''; ?>>Wisconsin</option>
                    <option value="WY"<?php echo $state === 'WY' ? 'selected' : ''; ?>>Wyoming</option>
                </select><br/>
                <span class="error" ><?php echo $stateErr ?? ''; ?></span><br>

                <label for = "zipCode">Zip Code:</label><br>
                <input class = "zipCode" type = "text" id = "zipCode" name = "zipCode"
                       value="<?php echo $zip;?> "required oninput="return validZipcode()"><br>
                <span class="error"><?php echo $zipErr;?> </span><br>

                <label for="phoneNumber">Phone Number:</label><br>
                <input class = "phoneNumber" type="text" id="phoneNumber" name="phoneNumber"
                       value="<?php echo $phone;?> "required oninput="return validPhoneNum()"><br>
                <span class="error"><?php echo $phoneErr;?> </span><br>

                <label for = "email">Email:</label><br>
                <input type = "text" id = "email" name = "email"
                       value="<?php echo $email;?> "required oninput="return validEmail()"><br>
                <span class="error"><?php echo $emailErr;?> </span>

                <br><label>Gender</label><br>
                <input type = "radio" id="male" name="gender" <?php if ($gender=="Male") {echo "checked";}?> value="Male" required oninput="return validGender()">
                <label for="male">Male</label><br>
                <input type = "radio" id="female" name="gender" <?php if ($gender=="Female") {echo "checked";}?> value="Female">
                <label for="female">Female</label><br>
                <input type = "radio" id="other" name="gender" <?php if ($gender=="Other") {echo "checked";}?>value="Other">
                <label for="other">Other</label><br>
                <span class="error"><?php echo $genderErr;?></span><br>

                <br><label>Marital Status</label><br>
                <input type = "radio" id="single" name="maritalStatus" <?php if ($marital=="Single") {echo "checked";}?> value="Single" required oninput="return validMarry()">
                <label for="single">Single</label><br>
                <input type = "radio" id="married" name="maritalStatus" <?php if ($marital=="Married") {echo "checked";}?> value="Married">
                <label for="married">Married</label><br>
                <span class="error"><?php echo $maritalErr;?></span><br>

                <br><label for="birthday">Birthday:</label><br>
                <input type="date" id="birthday" name="birthday"
                       value="<?php echo $birth;?> "required oninput="return validBirthday()"><br>
                <span class="error"><?php echo $birthErr;?></span><br>

                <br><input type="submit" value="Submit"> <input type="reset" value="Reset">
            </form>

            <?php
                if ($isValid) {
            ?>
            <form id="hiddenForm" name="hiddenForm" method="POST" action="confirmation.php">
                <?php
                    foreach($_POST as $key => $value) {
                        ?>
                    <input name="<?php echo $key;?>" value="<?php echo $value?>" type="hidden"/>
                        <?php
                    }
                    ?>
            </form>
            <script>document.createElement('form').submit.call(document.getElementById('hiddenForm'));</script>
                <?php
            }
            ?>

            <br><br><br>
        </div>
        <div class="col-sm-2 sidenav">

        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <p><a href="https://www.youtube.com/">Youtube</a> | <a href="https://app.destinyitemmanager.com">Destiny Item Manager</a></p>
</footer>

<!-- <script src="js/validateReg.js"></script> -->
</body>
</html>
