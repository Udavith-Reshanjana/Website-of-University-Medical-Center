// login
function isEmpty() {
    var usernameVal = document.getElementsByName("username")[0].value;
    var passwordVal = document.getElementsByName("password")[0].value;

    if (usernameVal === "" && passwordVal === "") {
        alert("Please enter your Username and Password!!!");
    } else if (usernameVal === "") {
        alert("Please enter your Username!!!");
    } else if (passwordVal === "") {
        alert("Please enter your Password!!!");
    } else {
        alert("Form is not empty. You can proceed with the submission.");
    }
}
