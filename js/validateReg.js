function validateForm() {

    // Validate user name
    if (!validUsername()) {
        console.log("FALSE Username");
        return false;
    }


    // Validate password
    if (!validPassword()) {
        console.log("FALSE Pass");
        return false;
    }

    // Validate confirm password
    if (!validConfPassword()) {
        console.log("FALSE confPass");
        return false;
    }

    // Validate first name
    if (!validFName()) {
        console.log("FALSE F name");
        return false;
    }


    // Validate last name
    if (!validLName()) {
        console.log("FALSE L name");
        return false;
    }

    // Validate address line 1
    if (!validAddress()) {
        console.log("FALSE Add");
        return false;
    }

    // Validate city
    if (!validCity()) {
        console.log("FALSE City");
        return false;
    }

    // Validate state
    if (!validState()) {
        console.log("FALSE State");
        return false;
    }

    // Validate zip code
    if (!validZipcode()) {
        console.log("FALSE Zip");
        return false;
    }

    // Validate phone number
    if (!validPhoneNum()) {
        console.log("FALSE Phone");
        return false;
    }

    // Validate email
    if (!validEmail()) {
        console.log("FALSE Email");
        return false;
    }

    // Validate gender
    if(!validGender()) {
        console.log("FALSE Gender");
        return false;
    }

    if(!validMarry()) {
        console.log("FALSE Marry");
        return false;
    }

    if(!validBirthday()) {
        console.log("FALSE Birthday");
        return false;
    }

    // If all inputs are valid, submit the form
    alert("Form submitted successfully!");
    console.log("CRIT FALSE");
    return true;
}

function validUsername() {
    const userName = document.getElementById("userName");

    // Validate user name
    if (userName.value.length < 6) {
        userName.style.borderColor = "red";
        return false;
    }

    else if(userName.value.length > 50) {
        userName.style.borderColor = "red";
        return false;
    }
    else {
        userName.style.borderColor = "lime green";
        return true;
    }
}

function validPassword() {
    const password = document.getElementById("password");
    function validatePassword(password) {
        const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,50}$/;
        return passwordRegex.test(password);
    }

    if (password.value === '') {
        password.style.borderColor = "red";
        return false;
    } else if (!validatePassword(password.value)) {
        password.style.borderColor = "red";
        return false;
    }
    else {
        password.style.borderColor = "lime green";
        return true;
    }
}

function validConfPassword() {
    const password = document.getElementById("password");
    const confPassword = document.getElementById("confPassword");

    if (confPassword.value === "") {
        confPassword.style.borderColor = "red";
        return false;
    } else if (confPassword.value !== password.value) {
        confPassword.style.borderColor = "red";
        return false;
    }
    else {
        confPassword.style.borderColor = "lime green";
        return true;
    }
}

function validFName() {
    const firstName = document.getElementById("firstName");

    if (firstName.value === "") {
        firstName.style.borderColor = "red";
        return false;
    }
    else if(firstName.value.length > 50) {
        firstName.style.borderColor = "red";
        return false;
    }
    else {
        firstName.style.borderColor = "lime green";
        return true;
    }
}

function validLName() {
    const lastName = document.getElementById("lastName");

    if (lastName.value === "") {
        lastName.style.borderColor = "red";
        return false;
    }
    else if(lastName.value.length > 50) {
        lastName.style.borderColor = "red";
        return false;
    }
    else {
        lastName.style.borderColor = "lime green";
        return true;
    }
}

function validAddress() {
    const address1 = document.getElementById("address1");
    if (address1.value === "") {
        address1.style.borderColor = "red";
        return false;
    }
    else if (address1.value.length > 100) {
        address1.style.borderColor = "red";
        return false;
    }
    else {
        address1.style.borderColor = "lime green";
        return true;
    }
}

function validCity() {
    // Validate city
    const city = document.getElementById("city");
    if (city.value === "") {
        city.style.borderColor = "red";
        return false;
    }
    else if(city.value.length > 50) {
        city.style.borderColor = "red";
        return false;
    }
    else {
        city.style.borderColor = "lime green";
        return true;
    }
}

function validState() {
    const state = document.getElementById("state");

    if (state.value === " ") {
        state.style.borderColor = "red";
        return false;
    }
    else if (state.value.length > 52) {
        state.style.borderColor = "red";
    }
    else {
        state.style.borderColor = "lime green";
        return true;
    }
}

function validZipcode() {
    const zipCode = document.getElementById("zipCode");
    if (zipCode.value === "") {
        zipCode.style.borderColor = "red";
        return false;
    }
    else if(zipCode.value.length > 10 || zipCode.value.length < 5) {
        zipCode.style.borderColor = "red";
        return false;
    }
    else {
        zipCode.style.borderColor = "lime green";
        return true;
    }
}

function validPhoneNum() {
    const phoneNumber = document.getElementById("phoneNumber");

    if (phoneNumber.value === "") {
        phoneNumber.style.borderColor = "red";
        return false;
    }
    else if(phoneNumber.value.length > 12) {
        phoneNumber.style.borderColor = "red";
        return false;
    }
    else {
        phoneNumber.style.borderColor = "lime green";
        return true;
    }
}

function validEmail() {
    const email = document.getElementById("email");

    if (email.value === "") {
        email.style.borderColor = "red";
        return false;
    } else if (!/\S+@\S+\.\S+/.test(email.value)) {
        email.style.borderColor = "red";
        return false;
    }
    else {
        email.style.borderColor = "lime green";
        return true;
    }
}

function validGender() {
    const gender = document.getElementById("gender");
    if (gender.value < 1 || gender.value > 50) {
        return false;
    }
    else {
        gender.style.borderColor = "lime green";
        return true;
    }
}

function validMarry() {
    const maritalStatus = document.getElementById("maritalStatus");
    if(maritalStatus.value < 1 || maritalStatus.value > 50) {
        return false;
    }
    else {
        maritalStatus.style.borderColor = "lime green";
        return true;
    }
}

function validBirthday() {
    const birthday = document.getElementById("birthday");
    if(birthday.value.length !== 10) {
        birthday.style.borderColor = "red";
        return false;
    }
    else {
        birthday.style.borderColor = "lime green";
        return true;
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


