<?php
    if ($isValid) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",
                $dbusername, $dbpassword);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2,  city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
			VALUES (:userName, :password, :firstName, :lastName, :address1,
			'', :city, :state, :zipCode, :phone , :email, :gender, :maritalStatus, :date)");

            $sql->bindParam('userName' , $userName);
            $sql->bindParam('password' , $password);
            $sql->bindParam('firstName' , $firstName);
            $sql->bindParam('lastName' , $lastName);
            $sql->bindParam('address1' , $address1);
            $sql->bindParam('city' , $city);
            $sql->bindParam('state' , $state);
            $sql->bindParam('zipCode' , $zipCode);
            $sql->bindParam('phone' , $phone);
            $sql->bindParam('email' , $email);
            $sql->bindParam('gender' , $gender);
            $sql->bindParam('maritalStatus' , $maritalStatus);
            $sql->bindParam("date" , $dateOfBirth);


            $sql->execute();

            $last_id = $conn->lastInsertId();
            $_SESSION["last_id"] = "$last_id";

            header("Location: confirmation.php");
        }

        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }