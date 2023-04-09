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
                <span class="error">* <?php echo $userNameErr;?></span><br>

                <div id="passDiv" class="form-group">
                <label for = "password">Password:</label><br>
                <input type = "password" id = "password" name = "password"
                       value="<?php echo $password; ?>"required oninput="return validPassword()"/><br>
                    <span class="error">* <?php echo $passwordErr;?></span><br>

                </div>
                <label for = "confPassword">Confirm Password:</label><br>
                <input type = "password" id = "confPassword" name = "confPassword"
                       value="<?php echo $confPass; ?>" required oninput="return validConfPassword()"/><br>
                <span class="error">* <?php echo $confPassErr;?></span><br>

                <label for = "firstName">First Name:</label><br>
                <input type = "text" id = "firstName" name = "firstName" required oninput="return validFName()"><br>
                <label for = "lastName"> Last Name:</label><br>
                <input type = "text" id = "lastName" name = "lastName" required oninput="return validLName()"><br>

                <label for = "address1">Address Line 1:</label><br>
                <input type = "text" id = "address1" name = "address1" required oninput="return validAddress()"><br>
                <label for = "address2">Address Line 2:</label><br>
                <input type = "text" id = "address2" name = "address2"><br>
                <label for = "city">City:</label><br>
                <input type = "text" id = "city" name = "city" required oninput="return validCity()"><br>
                <label for = "state">  State:</label><br>
                <select name="state" id="state" required oninput="return validState()">
                    <option value=" "></option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select><br>
                <label for = "zipCode">Zip Code:</label><br>
                <input class = "zipCode" type = "text" id = "zipCode" name = "zipCode" required oninput="return validZipcode()"><br>

                <label for="phoneNumber">Phone Number:</label><br>
                <input class = "phoneNumber" type="text" id="phoneNumber" name="phoneNumber" required oninput="return validPhoneNum()"><br>

                <label for = "email">Email:</label><br>
                <input type = "text" id = "email" name = "email" required oninput="return validEmail()"><br>

                <br><label>Gender</label><br>
                <input type = "radio" id="male" name="gender" value="Male" required oninput="return validGender()">
                <label for="male">Male</label><br>
                <input type = "radio" id="female" name="gender" value="Female">
                <label for="female">Female</label><br>
                <input type = "radio" id="other" name="gender" value="Other">
                <label for="other">Other</label><br>

                <br><label>Marital Status</label><br>
                <input type = "radio" id="single" name="maritalStatus" value="Single" required oninput="return validMarry()">
                <label for="single">Single</label><br>
                <input type = "radio" id="married" name="maritalStatus" value="Married">
                <label for="married">Married</label><br>

                <br><label for="birthday">Birthday:</label><br>
                <input type="date" id="birthday" name="birthday" required oninput="return validBirthday()"><br>

                <br><input type="submit" value="Submit"> <input type="reset" value="Reset">
            </form>

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
