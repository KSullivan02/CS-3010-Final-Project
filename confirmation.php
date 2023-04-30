<!DOCTYPE html>
<?php
    include 'PHP/connectionInfo.php';
?>

<html lang="en">
<head>
    <title>Confirmation</title>
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
                <li class="active"><a href="Registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
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
            <h1>Confirmation</h1>
            <p>Register for Alerts about specific vendor items</p>
            <hr>
            <?php
                include 'PHP/selectUserData.php';
            ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="userName">User Name:</label>
                <input disabled id="userName" type="text" name="userName" value="<?php echo $userName; ?>"> <br>

                <label for="password">Password:</label>
                <input disabled id="password" type="text" name="password" value="<?php echo $password; ?>"> <br>

                <label for="firstName">First Name:</label>
                <input disabled id="firstName" type="text" name="firstName" value="<?php echo $firstName; ?>"> <br>

                <label for="lastName">Last Name:</label>
                <input disabled id="lastName" type="text" name="lastName" value="<?php echo $lastName; ?>"> <br>

                <label for="address1">Address 1:</label>
                <input disabled id="address1" type="text" name="address1" value="<?php echo $address1; ?>"> <br>

                <label for="address2">Address 2:</label>
                <input disabled id="address2" type="text" name="address2" value="<?php echo $address2; ?>"> <br>

                <label for="city">City:</label>
                <input disabled id="city" type="text" name="city" value="<?php echo $city; ?>"> <br>

                <label for="state">State:</label>
                <input disabled id="state" type="text" name="state" value="<?php echo $state; ?>"> <br>

                <label for="zipCode">ZipCode:</label>
                <input disabled id="zipCode" type="text" name="zipCode" value="<?php echo $zipCode; ?>"> <br>

                <label for="phone">Phone Number:</label>
                <input disabled id="phone" type="text" name="phone" value="<?php echo $phone; ?>"> <br>

                <label for="email">Email Address:</label>
                <input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"> <br>

                <label for="gender">Gender:</label>
                <input disabled id="gender" type="text" name="gender" value="<?php echo $gender; ?>"> <br>

                <label for="maritalStatus">Marital Status:</label>
                <input disabled id="maritalStatus" type="text" name="maritalStatus" value="<?php echo $maritalStatus; ?>"> <br>

                <label for="dateOfBirth">Date of Birth:</label>
                <input disabled id="dateOfBirth" type="text" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>"> <br>


            </form>


        </div>
    </div>
</div>

</body>
</html>
