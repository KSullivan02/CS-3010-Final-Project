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
            <h1>Confirmation</h1>
            <p>Register for Alerts about specific vendor items</p>
            <hr>
            <?php foreach($_POST as $key => $value) {echo "<br/>$key : $value<br/>";} ?>

        </div>
    </div>
</div>

</body>
</html>
