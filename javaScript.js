// common
function verifyBeforeLeave() {
    var confirmValue = confirm("Do you want to leave this page ?");
    return confirmValue;
}
function isValidName(name) {
    var regex = /^[a-zA-Z\s]+$/;
    return regex.test(name);
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
    window.location.href = "Doctor.html";
}

// feedback
function clearMeInFeedback() {
    var nameField = document.getElementById("Name");
    var personIDField = document.getElementById("personid");
    var dateField = document.getElementById("date");
    var dobField = document.getElementById("date");

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
    var dobField = document.getElementById("date");
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
