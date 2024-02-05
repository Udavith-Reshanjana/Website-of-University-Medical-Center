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
        return false;
    } else if (usernameVal === "") {
        alert("Please enter your Username!!!");
        usernameField.style.backgroundColor = "#ff9999";
        return false;
    } else if (passwordVal === "") {
        alert("Please enter your Password!!!");
        passwordField.style.backgroundColor = "#ff9999";
        return false;
    }
    return true;
}

