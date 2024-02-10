// common
function verifyBeforeLeave() {
    var confirmValue = confirm("Do you want to leave this page ?");
    return confirmValue;
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
