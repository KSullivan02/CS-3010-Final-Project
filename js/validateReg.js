function validateForm() {
    // Get the values of all form inputs
    const userName = document.getElementById("userName").value;
    const password = document.getElementById("password").value;
    const confPassword = document.getElementById("confPassword").value;
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const address1 = document.getElementById("address1").value;
    const address2 = document.getElementById("address2").value;
    const city = document.getElementById("city").value;
    const state = document.getElementById("state").value;
    const zipCode = document.getElementById("zipCode").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const email = document.getElementById("email").value;
    const gender = document.getElementById("gender").value;
    const maritalStatus = document.getElementById("maritalStatus").value;
    const birthday = document.getElementById("birthday").value;

    // Validate user name
    if (!validUsername()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }


    // Validate password
    if (!validPassword()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }

    // Validate confirm password
    if (!validConfPassword()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }

    // Validate first name
    if (!validFName()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }


    // Validate last name
    if (!validLName()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }

    // Validate address line 1
    if (!validAddress()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }

    // Validate city
    if (!validCity()) {
        event.preventDefault()
        console.log("FALSE");
        return false;
    }

    // Validate state
    if (!validState()) {
        console.log("FALSE");
        return false;
    }

    // Validate zip code
    if (!validZipcode()) {
        console.log("FALSE");
        return false;
    }

    // Validate phone number
    if (!validPhoneNum()) {
        console.log("FALSE");
        return false;
    }

    // Validate email
    if (!validEmail()) {
        console.log("FALSE");
        return false;
    }

    // Validate gender
    if(!validGender()) {
        console.log("FALSE");
        return false;
    }

    if(!validMarry()) {
        console.log("FALSE");
        return false;
    }

    if(!validBirthday()) {
        console.log("FALSE");
        return false;
    }

    // If all inputs are valid, submit the form
    alert("Form submitted successfully!");
    console.log("CRIT FALSE");
    return true;
}

function validUsername() {
    const userName = document.getElementById("userName").value;

    // Validate user name
    if (userName.length < 6) {
        alert("Please enter a username with 6 or more characters.");
        return false;
    }

    else if(userName.length > 50) {
        alert("Please enter a username with less than 50 characters");
        return false;
    }

}

function validPassword() {
    const password = document.getElementById("password").value;
    function validatePassword(password) {
        const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,50}$/;
        return passwordRegex.test(password);
    }

    if (password === '') {
        alert("Please enter a password.");
        return false;
    } else if (!validatePassword(password)) {
        alert("Password must between 8 and 50 characters long, contain at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.");
        return false;
    }

}

function validConfPassword() {
    const password = document.getElementById("password").value;
    const confPassword = document.getElementById("confPassword").value;

    if (confPassword === "") {
        alert("Please confirm your password.");
        return false;
    } else if (confPassword !== password) {
        alert("Passwords do not match.");
        return false;
    }

}

function validFName() {
    const firstName = document.getElementById("firstName").value;

    if (firstName === "") {
        alert("Please enter your first name.");
        return false;
    }
    else if(firstName.length > 50) {
        alert("Please input a first name with less than 50 characters.");
        return false;
    }


}

function validLName() {
    const lastName = document.getElementById("lastName").value;

    if (lastName === "") {
        alert("Please enter your last name.");
        return false;
    }
    else if(lastName.length > 50) {
        alert("Please input a last name with less than 50 characters.");
        return false;
    }

}

function validAddress() {
    const address1 = document.getElementById("address1").value;
    if (address1 === "") {
        alert("Please enter your city.");
        return false;
    }
    else if (address1.length > 100) {
        alert("Please enter a valid address that is less than 100 characters");
        return false;
    }

}

function validCity() {
    // Validate city
    const city = document.getElementById("city").value;
    if (city === "") {
        alert("Please enter your city.");
        return false;
    }
    else if(city.length > 50) {
        alert("Please enter a valid city with less than 50 characters");
        return false;
    }

}

function validState() {
    const state = document.getElementById("state").value;

    if (state === " ") {
        alert("Please select a state.");
        return false;
    }
    else if (state.length > 52) {
        alert("Invalid state field, please input a state with less than 52 characters");
    }

}

function validZipcode() {
    const zipCode = document.getElementById("zipCode").value;
    if (zipCode === "") {
        alert("Please enter your zip code.");
        return false;
    }
    else if(zipCode.length > 10 || zipCode.length < 5) {
        alert("Zipcode must be minimum of 5 with a max of 10 characters");
    }

}

function validPhoneNum() {
    const phoneNumber = document.getElementById("phoneNumber").value;

    if (phoneNumber === "") {
        alert("Please enter your phone number.");
        return false;
    }
    else if(phoneNumber.length > 12) {
        alert("Phone numbers are a max of 12 characters");
        return false;
    }

}

function validEmail() {
    const email = document.getElementById("email").value;

    if (email === "") {
        alert("Please enter your email address.");
        return false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

}

function validGender() {
    const gender = document.getElementById("gender").value;
    if (gender < 1 || gender > 50) {
        return false;
    }

}

function validMarry() {
    const maritalStatus = document.getElementById("maritalStatus").value;
    if(maritalStatus < 1 || maritalStatus > 50) {
        return false;
    }

}

function validBirthday() {
    const birthday = document.getElementById("birthday").value;
    if(birthday !== 10) {
        return false;
    }

}


// Place the phone number into xxx-xxx-xxxx format
$('.phoneNumber').on('input', function() {              //Using input event for instant effect
    let text=$(this).val()                             //Get the value
    text=text.replace(/\D/g,'')                        //Remove illegal characters
    if(text.length>3) text=text.replace(/.{3}/,'$&-')  //Add hyphen at pos.4
    if(text.length>7) text=text.replace(/.{7}/,'$&-')  //Add hyphen at pos.8
    $(this).val(text);                                 //Set the new text
});

// Place the zipcode into xxxxx-xxxx format
$('.zipCode').on('input', function() {              //Using input event for instant effect
    let text=$(this).val()                             //Get the value
    text=text.replace(/\D/g,'')                        //Remove illegal characters
    if(text.length>5) text=text.replace(/.{5}/,'$&-')  //Add hyphen at pos.4
    $(this).val(text);                                 //Set the new text
});


