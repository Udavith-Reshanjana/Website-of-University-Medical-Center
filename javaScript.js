// common
function verifyBeforeLeave() {
    var confirmValue = confirm("Do you want to leave this page ?");
    return confirmValue;
}
function isValidPersonID(personID) {
    var regex = /^[A-Z]{2}\/\d{4}\/\d{4}$/;
    var regex1 = /^[A-Z]{2}\/\d{4}\/\d{3}$/;
    var regex2 = /^[A-Z]{4}\/\d{4}\/\d{4}$/;
    var regex3 = /^[A-Z]{4}\/\d{4}\/\d{3}$/;

    return regex.test(personID) || regex1.test(personID) || regex2.test(personID) || regex3.test(personID);
}
function clearRadioButtons(groupName) {
    var radioButtons = document.getElementsByName(groupName);
    for (var i = 0; i < radioButtons.length; i++) {
        radioButtons[i].checked = false;
    }
}
function isValidContactNo(contactno) {
    if (contactno.length === 9) {
        var firstTwoDigits = contactno.substring(0, 2);
        var validStartingCodes = ['11', '70', '71', '72', '75', '76', '77', '78'];
        if (validStartingCodes.includes(firstTwoDigits)) {
            return true;
        }
        else {
            return false;
        }
    }
    else if (contactno.length === 10) {
        var firstThreeDigits = contactno.substring(0, 3);
        var validStartingCodes = ['011', '070', '071', '072', '075', '076', '077', '078'];
        if (validStartingCodes.includes(firstThreeDigits)) {
            return true;
        }
        else {
            return false;
        }
    }
    else if (contactno.length === 10) {
        var firstFiveDigits = contactno.substring(0, 5);
        var validStartingCodes = ['+9411', '+9470', '+9471', '+9472', '+9475', '+9476', '+9477', '+9478'];
        if (validStartingCodes.includes(firstFiveDigits)) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}

// login
function isEmpty() {
    var usernameField = document.getElementById("username");
    var passwordField = document.getElementById("password");
    
    var usernameVal = usernameField.value;
    var passwordVal = passwordField.value;

    if (usernameVal === "" && passwordVal === "") {
        alert("Please enter your Username and Password!!!");
        usernameField.style.backgroundColor = "#ff9999";
        passwordField.style.backgroundColor = "#ff9999";
        usernameField.focus();
        return false;
    } else if (usernameVal === "") {
        alert("Please enter your Username!!!");
        usernameField.style.backgroundColor = "#ff9999";
        usernameField.focus();
        return false;
    } else if (passwordVal === "") {
        alert("Please enter your Password!!!");
        passwordField.style.backgroundColor = "#ff9999";
        passwordField.focus();
        return false;
    }
    else {
        return true;
    }
}
function clearMeInLogIn() {
    var usernameField = document.getElementById("username");
    var passwordField = document.getElementById("password");
    usernameField.style.backgroundColor = "#FFFFFF";
    passwordField.style.backgroundColor = "#FFFFFF";
    usernameField.value = "";
    passwordField.value = "";
    usernameField.focus();
    return false;
}

// service
function loadDoc() {
    window.location.href = "Doctor.php";
}
function loadAppoint() {
    window.location.href = "Appoinment.php";
}

// feedback
function clearMeInFeedback() {
    var nameField = document.getElementById("Name");
    var personIDField = document.getElementById("personid");
    var dateField = document.getElementById("date");
    var dobField = document.getElementById("dob");

    nameField.value = "";
    personIDField.value = "";
    dateField.value = "";
    dobField.value = "";

    clearRadioButtons("gender");
    clearRadioButtons("DoctorKnowledge");
    clearRadioButtons("DoctorKindness");
    clearRadioButtons("WaitingTime");
    clearRadioButtons("Hygene");

    nameField.focus();
}

function validateSubmitInFeedback() {
    var nameField = document.getElementById("Name");
    var personIDField = document.getElementById("personid");
    var dateField = document.getElementById("date");
    var dobField = document.getElementById("dob");
    var genderField = document.getElementsByName("gender");

    if (nameField.value === "") {
        alert("Please enter your name !!!");
        nameField.style.backgroundColor = "#ff9999";
        nameField.focus();
        return false;
    } 
    else if (!isValidName(nameField.value)) {
        alert("Please enter a valid name !!!");
        nameField.style.backgroundColor = "#ff9999";
        nameField.focus();
        return false;
    }
    else if (personIDField.value === "") {
        alert("Please enter your person ID !!!");
        personIDField.style.backgroundColor = "#ff9999";
        personIDField.focus();
        return false;
    } 
    else if (!isValidPersonID(personIDField.value)) {
        alert("Please enter a valid person ID like PS/2020/XXX !!!");
        personIDField.style.backgroundColor = "#ff9999";
        personIDField.focus();
        return false;
    }
    else if (dateField.value === "") {
        alert("Please fill the date field!!!");
        dateField.style.backgroundColor = "#ff9999";
        dateField.focus();
        return false;
    } 
    else if (dobField.value === "") {
        alert("Please fill the date of birth field !!!");
        dobField.style.backgroundColor = "#ff9999";
        dobField.focus();
        return false;
    } 
    else {
        return true;
    }
}

// appoinment
function clearMeInAppoinment() {
    var nameField = document.getElementById("Name");
    var personIDField = document.getElementById("personid");
    var dateField = document.getElementById("date");
    var dobField = document.getElementById("dob");
    var contactnoField = document.getElementById("contactno");
    var symptomsField = document.getElementById("symptom");

    nameField.value = "";
    personIDField.value = "";
    dateField.value = "";
    dobField.value = "";
    contactnoField.value = "";
    symptomsField.value = "";

    clearRadioButtons("gender");

    nameField.focus();
}
function validateSubmitInAppointment() {
    var nameField = document.getElementById("Name");
    var personIDField = document.getElementById("personid");
    var dateField = document.getElementById("date");
    var dobField = document.getElementById("dob");
    var contactnoField = document.getElementById("contactno");
    var symptomsField = document.getElementById("symptom");

    if (nameField.value === "") {
        alert("Please enter your name !!!");
        nameField.style.backgroundColor = "#ff9999";
        nameField.focus();
        return false;
    } 
    else if (personIDField.value === "") {
        alert("Please enter your person ID !!!");
        personIDField.style.backgroundColor = "#ff9999";
        personIDField.focus();
        return false;
    } 
    else if (!isValidPersonID(personIDField.value)) {
        alert("Please enter a valid person ID like PS/2020/XXX !!!");
        personIDField.style.backgroundColor = "#ff9999";
        personIDField.focus();
        return false;
    }
    else if (dateField.value === "") {
        alert("Please fill the date field!!!");
        dateField.style.backgroundColor = "#ff9999";
        dateField.focus();
        return false;
    } 
    else if (dobField.value === "") {
        alert("Please fill the date of birth field !!!");
        dobField.style.backgroundColor = "#ff9999";
        dobField.focus();
        return false;
    } 
    else if (contactnoField.value === "") {
        alert("Please enter the contact number !!!");
        contactnoField.style.backgroundColor = "#ff9999";
        contactnoField.focus();
        return false;
    } 
    else if (!isValidContactNo(contactnoField.value)) {
        alert("Please enter a valid contact number which has the pattern 77XXXXXXX, 075XXXXXXX, or +9470XXXXXXX !!!");
        contactnoField.style.backgroundColor = "#ff9999";
        contactnoField.focus();
        return false;
    }
    else {
        return true;
    }
}
