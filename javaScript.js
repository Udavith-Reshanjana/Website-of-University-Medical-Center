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
    var regex = /^[A-Z]\/\d{4}\/\d{4}$/;
    return regex.test(personID);
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
    return true;
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
